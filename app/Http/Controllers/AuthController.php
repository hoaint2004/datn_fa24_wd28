<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('client.auth.login');
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');

        // Tìm user theo email
        $user = User::where('email', $data['email'])->first();

        if ($user) {
            // Kiểm tra mật khẩu
            if ($user->password == $data['password']) {
                // Đăng nhập thành công
                Auth::login($user);

                // Kiểm tra quyền của người dùng sau khi đăng nhập thành công
                if (Auth::user()->role == 'admin') {
                    return redirect()->intended(route('admin.dashboard'));
                } elseif (Auth::user()->role == 'user') {
                    return redirect()->intended(route('home'));
                }
            } else {
                // Sai mật khẩu
                return redirect()->route('login.form')->with('errorLogin', 'Mật khẩu không chính xác.');
            }
        } else {
            // Sai email
            return redirect()->route('login.form')->with('errorLogin', 'Email không tồn tại.');
        }
    }


    public function showRegisterForm()
    {
        return view('client.auth.register');
    }
    public function postRegister(Request $request)
    {
        // Tìm người dùng qua email
        $user = User::where('email', $request->email)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->password, $user->password)) {
            // Xác thực thành công
            // Ở đây bạn có thể thiết lập session hoặc JWT token cho người dùng
            return response()->json(['message' => 'Đăng nhập thành công'], 200);
        }

        // Xác thực thất bại
        return response()->json(['message' => 'Email hoặc mật khẩu không đúng'], 401);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}
