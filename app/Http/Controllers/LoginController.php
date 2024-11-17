<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        //
    }

    public function postLogin(){
        return view('postLogin');
    }

    public function register(){
        return view('register');
    }

    public function postRegister(Request $request) {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:10',
            'password' => 'required|min:6',
        ],
        [
            'fullname.required' => "Họ Tên không được để trống",
            'username.required' => "Tên người dùng không được để trống",
            'email.required' => "Email không được để trống",
            'email.unique' => "Email đã tồn tại!",
            'phone.required' => "Số điện thoại không được để trống",
            'password.required' => "Mật Khẩu không được để trống",
            'password.' => "Xác nhận mật khẩu không khớp với mật khẩu",
        ]);

        // Thêm mới người dùng vào cơ sở dữ liệu
        User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('home')->with('message', 'Đăng Ký Thành Công!');
    }

}
