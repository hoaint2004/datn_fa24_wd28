<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
                'regex:/^[\w\.-]+@(?:gmail\.com|fpt\.edu\.vn)$/i',
            ],
            'phone' => [
                'required',
                'string',
                'unique:users',
                'regex:/^(03|09|05|08)\d{8}$/', // Đầu số 03, 09, 05, hoặc 08 và 8 chữ số tiếp theo
            ],
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|same:password', // Xác nhận mật khẩu trùng với mật khẩu
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên là bắt buộc.',
            'username.required' => 'Tên đăng nhập là bắt buộc.',
            'username.unique' => 'Tên đăng nhập đã được sử dụng.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email này đã được đăng ký.',
            'email.regex' => 'Email không hợp lệ.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.unique' => 'Số điện thoại này đã được đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password_confirmation.required' => 'Vui lòng nhập lại mật khẩu.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không khớp với mật khẩu đã nhập.',
        ];
    }
}
