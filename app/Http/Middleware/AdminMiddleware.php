<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập và có quyền admin chưa
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request); // Cho phép truy cập
        }

        // Nếu không phải admin, chuyển hướng về trang chính hoặc báo lỗi
        return redirect()->route('home')->with('error', 'Bạn không có quyền truy cập vào trang này.');
    }
}
