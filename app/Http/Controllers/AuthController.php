<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (url()->previous() == route('register.form')) {
            session(['url.intended' => route('home')]); // Nếu trang trước là đăng ký, chuyển hướng tới trang home sau khi đăng nhập
        } else {
            session(['url.intended' => url()->previous()]); // Nếu trang trước là các trang khác, chuyển hướng về trang trước đó
        }
        return view('client.auth.login');
    }

    public function postLogin(Request $request)
    {
    $data = $request->only('email', 'password');

    // Tìm user theo email
    $user = User::where('email', $data['email'])->first();

    if ($user && $user->email_verified_at) {
        // Kiểm tra mật khẩu
        if (Hash::check($data['password'], $user->password)) {
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
        return redirect()->route('login.form')->with('errorLogin', 'Email không tồn tại hoặc chưa xác thực vui lòng kiểm tra lại email.');
    }
}


    public function showRegisterForm()
    {
        return view('client.auth.register');
    }
    public function postRegister(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'fullname' => $request->fullname,
                'username' => $request->username,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'role' => User::TYPE_MEMBER,
                'remember_token' => Str::random(10)
            ]);
             // Gửi mail
            Mail::to($user->email)->send(new RegisterMail($user));

            DB::commit();

            return redirect()->route('register.form')->with('status', 'Đăng Ký Thành Công!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());

            return redirect()->back()->with('error', 'Đăng Ký Thất Bài!');
        }
    }

    public function verify($token)
    {
        // Tìm user theo token
        $user = User::where('remember_token', $token)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Link xác thực không hợp lệ hoặc đã hết hạn.');
        }

        $user->email_verified_at = now();
        $user->remember_token = null; 
        $user->save();

        return redirect('/login')->with('status', 'Tài khoản của bạn đã được kích hoạt thành công!');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form');
    }
}
