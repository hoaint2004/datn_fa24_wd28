<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\alert;
use App\Events\OrderStatusUpdated;

class UserController extends Controller
{
    public function changeInfo(){

    }

    public function account(){

        $user = User::find(Auth::user()->id);
        $orders = $user->orders()
                ->with('orderDetails.product', 'orderDetails.variant','review')
                ->get();
                // dd($orders);
        return view('client.account', compact('user','orders'));
    }

    public function updateOrderStatus($orderId){
        $order = Order::findOrFail($orderId);
        if($order->status === 'Giao hàng thành công' && $order->payment_status === 'Đã thanh toán'){
            $order->status = 'Hoàn thành';
            $order->save();
            // Phát sự kiện khi client nhấn hoàn thành
            event(new OrderStatusUpdated($order));
            return response()->json([
                'status' => 'success',
                'message' => 'Cảm ơn quý khách đã mua hàng.'
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Vui lòng thanh toán cho Shipper để hoàn tất đơn hàng. Hoặc chờ trong giây lát!'
        ]);
    }

    public function changePassword($id_user, Request $request){
        // Lấy các giá trị từ request
        $password_old = $request->input('password_old');
        $password_new = $request->input('password_new');
        $password_confirm = $request->input('password_confirm');
    
        // Kiểm tra mật khẩu cũ với mật khẩu trong cơ sở dữ liệu (không sử dụng Hash)
        if ($password_old === Auth::user()->password) {
            // Kiểm tra mật khẩu mới và mật khẩu xác nhận có giống nhau không

            if ($password_new === $password_confirm) {
                // Cập nhật mật khẩu mới vào cơ sở dữ liệu
                $updateSuccess = User::where('id', Auth::user()->id)
                    ->update([
                        'password' => $password_new,  // Cập nhật trực tiếp mật khẩu mới
                    ]);
    
                if ($updateSuccess) {
                    alert('Mật khẩu đã được thay đổi thành công');
                    return redirect()->back()->with('message', 'Mật khẩu đã được thay đổi thành công');
                } else {
                    return redirect()->back()->with('error', 'Mật khẩu không đúng!');
                }
            } else {
                return redirect()->back()->with('error', 'Mật khẩu mới và mật khẩu xác nhận không khớp');
            }
        } else {
            return redirect()->back()->with('error', 'Mật khẩu cũ không chính xác');
        }
    }

    public function order_history(){
        $orders = Order::where('user_id', Auth::id())
        ->with('orderDetails')
        ->orderBy('created_at', 'desc') 
        ->get();
        dd($orders);
        return view('client.account');
    }
}

