<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class PaymentController extends Controller
{
    public function vnpay_payment(Request $request)
    {
        $data = $request->all();
        Log::info('Dữ liệu nhận được:', $request->all());

        $carts = Cart::where('user_id', Auth::id())->get();
        // if ($carts->isEmpty()) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Vui lòng thêm sản phẩm vào giỏ hàng để tiếp tục mua hàng'
        //     ]);
        // }

        // Lưu session
        session([
            'payment_data' => [
                'user_id' => Auth::id(),
                'code' => 'ORDER-' . time(),
                'name' => $data['name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'total_price' => $data['total'],
                'shipping_fee' => $data['shipping_fee'],
                'voucher_use' => $data['voucher_use'],
                'payment_method' => 'vnpay',
                'payment_status' => 'Đã thanh toán'
            ]
        ]);

        session(['cart_data' => $carts]);

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_ReturnUrl = route('vnpay.return');
        $vnp_TmnCode = "IH2ONX1B";
        $vnp_HashSecret = "8V2791JGIMTNOOI4338HD0RGFBSUWIB2";
        $vnp_TxnRef = time();
        $vnp_OrderInfo = 'Thanh toan don hang ' . time();
        $vnp_Amount = (int)($data['total'] * 100);
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => "billpayment",
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef
        );

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return $vnp_Url;
    }

    public function vnpayReturn(Request $request)
    {
        DB::beginTransaction();
        try {
            if ($request->vnp_ResponseCode == "00") {
                $paymentData = session('payment_data');
                if (!$paymentData) {
                    throw new Exception('Không tìm thấy dữ liệu thanh toán trong session');
                }

                // Tạo đơn hàng mới
                $order = Order::create($paymentData);

                // Lưu chi tiết đơn hàng
                $carts = session('cart_data');
                foreach ($carts as $cart) {
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'product_id' => $cart->product_id,
                        'variant_id' => $cart->variant_id,
                        'price' => $cart->product->price,
                        'size' => $cart->variant->size,
                        'color' => $cart->variant->color,
                        'quantity' => $cart->quantity,
                        'total' => $cart->product->price * $cart->quantity
                    ]);
                }

                // Xóa giỏ hàng
                Cart::where('user_id', Auth::id())->delete();

                // Flash order data to session
                session()->flash('order_success', [
                    'code' => $order->code,
                    'name' => $order->name,
                    'phone' => $order->phone,
                    'address' => $order->address,
                    'payment_method' => $order->payment_method,
                    'subtotal' => $order->total_price - $order->shipping_fee,
                    'shipping_fee' => $order->shipping_fee,
                    'total' => $order->total_price
                ]);

                DB::commit();

                return view('client.success-vnpay');
            }

            throw new Exception('Thanh toán thất bại');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Lỗi thanh toán VNPay: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Thanh toán không thành công');
        }
    }
}
