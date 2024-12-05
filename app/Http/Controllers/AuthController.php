<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\ResetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $previousUrl = url()->previous();
        if ($previousUrl === route('register.form')) {
            session(['url.intended' => route('home')]);
        } else {
            session(['url.intended' => $previousUrl]);
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
            // Mail::to($user->email)->send(new RegisterMail($user));

            DB::commit();

            return redirect()->route('register.form')->with('status', 'Đăng Ký Thành Công!');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());

            return redirect()->back()->with('error', 'Đăng Ký Thất Bại!');
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
        session()->flush();
        Auth::logout();
        return redirect()->route('login.form');
    }

    public function forgotPassword()
    {
        return view('client.auth.forgotPassword');
    }

    public function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        try {
            $request->validate(['email' => 'required|email']);

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return back()->with([
                    'sendResetLink' => false,
                    'status' => 'Email này không tồn tại.'
                ]);
            }

            $token = Str::random(60);

            PasswordResetToken::updateOrInsert(
                ['email' => $user->email],
                ['token' => $token, 'created_at' => now()]
            );

            Mail::to($user->email)->send(new ResetPasswordMail($token, $user->email));

            return back()->with([
                'sendResetLink' => true,
                'status' => 'Yêu cầu thay đổi mật khẩu đã được gửi đến email của bạn. Vui lòng kiểm tra lại email.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'sendResetLink' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function showResetForm(Request $request)
    {
        $token = $request->query('code');
        $email = $request->query('email');

        session(['reset_token' => $token, 'reset_email' => $email]);

        return view('client.auth.newPassword', ['token' => $token, 'email' => $email]);
    }

    public function reset(ResetPasswordRequest $request)
    {
        try {
            $token = session('reset_token');
            $email = session('reset_email');

            if (!$token || !$email) {
                return back()->with([
                    'sendResetPassword' => false,
                    'status' => 'Token hết hạn hoặc không hợp lệ. Vui lòng thử lại.'
                ]);
            }

            $reset = PasswordResetToken::where('token', $token)
                ->where('email', $email)
                ->first();

            if (!$reset) {
                return back()->with([
                    'sendResetPassword' => false,
                    'status' => 'Đường dẫn đặt lại mật khẩu đã hết hạn. Vui lòng thử lại.'
                ]);
            }

            $user = User::where('email', $reset->email)->first();

            if ($user) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

            PasswordResetToken::where('token', $token)->delete();
            session()->forget(['reset_token', 'reset_email']);

            return redirect()->route('login.form')->with([
                'sendResetPassword' => true,
                'status' => 'Mật khâu đã được thay đổi thành công.'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'sendResetPassword' => false,
                'error' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }
}
