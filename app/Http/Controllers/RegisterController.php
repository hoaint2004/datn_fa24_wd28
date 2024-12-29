<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
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
}