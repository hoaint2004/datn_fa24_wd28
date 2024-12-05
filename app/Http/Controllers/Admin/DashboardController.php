<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $statuses = ['Chờ xác nhận', 'Đã xác nhận', 'Đang giao', 'Giao hàng thành công', 'Giao hàng thất bại', 'Đã hủy', 'Hoàn thành'];
        $data = [];

        $data['order_pending'] = Order::where('status', 'Chờ xác nhận')->count();
        $data['order_confirmed'] = Order::where('status', 'Đã xác nhận')->count();
        $data['order_shipping'] = Order::where('status', 'Đang giao')->count();
        $data['order_delivering'] = Order::where('status', 'Giao hàng thành công')->count();
        $data['order_failed'] = Order::where('status', 'Giao hàng thất bại')->count();
        $data['order_cancelled'] = Order::where('status', 'Đã hủy')->count();
        $data['order_completed'] = Order::where('status', 'Hoàn thành')->count();

        $currentMonth = now()->month;
        $currentYear = now()->year;

        $totalRevenueThisMonth = Order::where('status', 'Hoàn thành')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->with('orderDetails') // Load mối quan hệ orderDetails
            ->get()
            ->sum(function ($order) {
                return $order->orderDetails->sum(function ($detail) {
                    return $detail->price * $detail->quantity;
                });
            });

        $totalOrders = Order::where('status', 'Hoàn thành')->count();

        $data['users'] = User::all()->count();

        $data['products'] = Product::all()->count();

        // Lấy top 5 sản phẩm bán chạy nhất
        $data['topProducts'] = Product::withSum('orderDetails as total_revenue', 'total') // Tính tổng doanh thu
            ->orderByDesc('total_revenue') // Sắp xếp giảm dần theo doanh thu
            ->take(5) // Giới hạn 5 sản phẩm
            ->get();

        $data['topSellingProducts'] = Product::withSum('orderDetails as total_quantity', 'quantity') // Tính tổng số lượng bán
            ->orderByDesc('total_quantity') // Sắp xếp giảm dần theo tổng số lượng bán
            ->take(5) // Lấy 5 sản phẩm đầu tiên
            ->get();

        return view('admin.pages.dashboard', compact('data', 'totalRevenueThisMonth', 'totalOrders'));
    }
}
