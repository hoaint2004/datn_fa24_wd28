@extends('admin.index')

@section('title', 'Quản Lý Tài Khoản')

@section('content')
<style>
/* account management */
body {
    margin: 0;
    padding: 20px; /* Khoảng cách xung quanh */
    font-family: Arial, sans-serif; /* Phông chữ cho trang */
    background-color: #f0f0f0; /* Màu nền cho trang */
    color: #333; /* Màu chữ mặc định */
}

.form-container {
    max-width: 600px;
    margin: 0 auto; /* Căn giữa form */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.form-container h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.error-message {
    color: red;
    font-size: 0.9em;
}

button {
    width: 100%;
    padding: 12px; /* Tăng kích thước nút bấm */
    background-color: #007bff; /* Màu nút bấm */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3; /* Màu khi hover */
}

.form-group input:valid {
    border-color: #28a745; /* Màu xanh lá cây khi hợp lệ */
}

.form-group input:invalid {
    border-color: #dc3545; /* Màu đỏ khi không hợp lệ */
}

/* end account management */
</style>
<div class="form-container">
    <h1>Tạo Tài Khoản Mới</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('account.save') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="fullname">Họ và Tên</label>
            <input type="text" id="fullname" name="fullname" >
            @error('fullname')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="username">Tên Đăng Nhập</label>
            <input type="text" id="username" name="username">
            @error('username')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" >
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Mật Khẩu</label>
            <input type="password" id="password" name="password">
            @error('password')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Xác Nhận Mật Khẩu</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group">
            <label for="role">Vai Trò</label>
            <select id="role" name="role">
                <option value="">Chọn Vai Trò</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            @error('role')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Tạo Tài Khoản</button>
    </form>
</div>
@endsection
