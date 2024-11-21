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
        // Đếm số lượng đơn hàng theo trạng thái
        $statuses = ['pending', 'confirmed', 'shipping', 'delivering', 'failed', 'cancelled', 'completed'];
        $data = [];

        foreach ($statuses as $status) {
            $data["order_{$status}"] = Order::where('status', $status)->count();
        }

        $currentMonth = now()->month;
        $currentYear = now()->year;

        $totalRevenueThisMonth = Order::where('status', 'completed')
            ->whereYear('created_at', $currentYear)
            ->whereMonth('created_at', $currentMonth)
            ->with('orderDetails') // Load mối quan hệ orderDetails
            ->get()
            ->sum(function ($order) {
                return $order->orderDetails->sum(function ($detail) {
                    return $detail->price * $detail->quantity;
                });
            });

        $totalOrders = Order::where('status', 'completed')->count();

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
