<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Variants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function showCart()
    {
        $data['carts'] = Cart::with('product', 'variant')->where('user_id', auth()->user()->id ?? 0)->get();

        return view('client.cart', compact('data'));
    }

    public function addToCart(Request $request)
    {
        DB::beginTransaction();
        try {
            // Tìm sản phẩm
            $product = Product::find($request->id);
            if (!$product) {
                return response()->json(['status' => false, 'message' => 'Không tìm thấy sản phẩm']);
            }

            // Lấy thông tin từ request
            $color = $request->input('color');
            $size = $request->input('size');
            $quantity = $request->input('quantity');

            // Tìm variant tương ứng
            $variant = Variants::where('product_id', $request->id)
                ->where('color', $color)
                ->where('size', $size)
                ->first();

            if (!$variant) {
                return response()->json(['status' => false, 'message' => 'Variant not found']);
            }

            if ($quantity > $variant->quantity) {
                return response()->json(['status' => false, 'message' => 'Không đủ hàng cho biến thể này']);
            }

            // Kiểm tra xem giỏ hàng đã có sản phẩm này với cùng variant_id chưa
            $cartItem = Cart::where('user_id', auth()->user()->id ?? 0)
                ->where('variant_id', $variant->id)
                ->first();

            if ($cartItem) {
                // Nếu variant đã có trong giỏ, cộng thêm vào số lượng hiện có
                $newQuantity = $cartItem->quantity + $quantity;

                if ($newQuantity > $variant->quantity) {
                    return response()->json(['status' => false, 'message' => 'Không đủ hàng để thêm vào giỏ hàng']);
                }

                // Cập nhật số lượng và giá cho sản phẩm trong giỏ
                $cartItem->quantity = $newQuantity;
                $cartItem->price = $product->price * $newQuantity;
                $cartItem->save();
            } else {
                // Nếu chưa có variant này trong giỏ hàng, thêm mới
                $cart = Cart::create([
                    'user_id' => auth()->user()->id ?? 0, // Thay thế bằng id người dùng đã đăng nhập
                    'product_id' => $request->id,
                    'variant_id' => $variant->id,
                    'size' => $variant->size,
                    'color' => $variant->color,
                    'quantity' => $quantity,
                    'price' => $product->price * $quantity
                ]);
            }

            DB::commit();
            return response()->json(['status' => true, 'message' => 'Sản phẩm được thêm vào giỏ hàng thành công', 'data' => $cartItem ?? $cart]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['status' => false, 'message' => 'Đã xảy ra lỗi']);
        }
    }

    public function updateQuantity(Request $request)
    {
        $cartItem = Cart::find($request->cart_id);

        if ($cartItem) {
            // Cập nhật số lượng
            $cartItem->quantity = $request->quantity;
            $cartItem->save();

            // Tính giá mới cho sản phẩm
            $newProductPrice = $cartItem->product->price * $cartItem->quantity;

            // Tính tổng tiền của giỏ hàng
            $totalCartPrice = Cart::with('product')->get()->reduce(function ($carry, $item) {
                return $carry + ($item->product->price * $item->quantity);
            }, 0);

            return response()->json([
                'success' => true,
                'new_product_price' => $newProductPrice,
                'total_cart_price' => $totalCartPrice,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Không tìm thấy sản phẩm trong giỏ hàng.',
        ]);
    }
}
