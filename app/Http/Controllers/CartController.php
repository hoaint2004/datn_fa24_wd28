<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Variants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    public function showCart()
    {
        if (!Auth::check()) {
            return redirect()->route('home')->with([
                'checkLogin' => 'Vui lòng đăng nhập để tiếp tục!'
            ]);
        }

        $data['carts'] = Cart::with('product', 'variant')->where('user_id', auth()->user()->id ?? 0)->get();


        return view('client.cart', compact('data'));
    }

    public function addToCart(Request $request)
    {
        DB::beginTransaction();
        try {
            if (!Auth::check()) {
                return response()->json(['status' => false, 'message' => 'Vui lòng đăng nhập để tiếp tục']);
            }

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
            $cartCount = Cart::all();

            $product = Product::with('variants')->where('id', $request->id)->first();
            DB::commit();
            return response()->json([
                'url' => route('cart.delete', $cart->id),
                'urlProduct' => route('productDetail', $request->id),
                'status' => true,
                'message' => 'Sản phẩm được thêm vào giỏ hàng thành công',
                'data' => [
                    'id' => $cart->id,
                    'color' => $cart->color,
                    'size' => $cart->size,
                    'quantity' => $cart->quantity,
                ],
                'product' => [
                    'name' => $product->name,
                    'price' => $product->price,
                    'image' => $product->image,
                ],
                'cartCount' => $cartCount->count(),
            ]);
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

    public function delete($id)
    {
        $cartItem = Cart::where('user_id', auth()->user()->id ?? 0)->find($id);

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('showCart')->with('status', 'Xóa sản phẩm trong giỏ hàng thành công');
        }

        return redirect()->route('showCart')->with('status', 'Không tìm thấy sản phẩm trong giỏ hàng.');
    }
}
