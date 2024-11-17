<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('client.auth.login');
    }

    // public function showRegisterForm()
    // {
    //     return view('client.auth.register');


    // }

    public function register(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required','string', 'min:8', // Tối thiểu 8 ký tự
            'regex:/[a-z]/',      // Ít nhất một chữ thường
            'regex:/[A-Z]/',      // Ít nhất một chữ hoa
            'regex:/[0-9]/',      // Ít nhất một số
            'regex:/[@$!%*?&]/',  // Ít nhất một ký tự đặc biệt
        ],
        'password_confirmation' => 'required|same:password',
    ]);

    // Nếu xác thực thất bại
    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors(),
        ], 422);
    }

    // Lưu thông tin người dùng
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // Trả về phản hồi
    return response()->json([
        'success' => true,
        'message' => 'Registration successful!',
        'user' => $user,
    ]);
}



}


