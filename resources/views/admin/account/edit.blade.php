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
    <h1>Edit Account</h1>

    <span class="">{{session('mesages')??''}}</span>
    <form action="{{ route('account.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="">
            <input type="hidden" class="" name="id" value="{{$acc->id}}">
        </div>
      
        <div class="form-group">
            <label for="fullname">Họ và Tên</label>
            <input type="text" id="fullname" name="fullname" value="{{$acc->fullname}}">
            @error('fullname')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="fullname">Tên đăng nhập</label>
            <input type="hidden" id="username" name="username"value="{{$acc->username}}">
            <span class="">{{$acc->username}}</span>
        </div>

        <div class="form-group">
            <label for="fullname">Email</label>
            <input type="hidden" id="email" name="email" value="{{$acc->email}}">
            <span class="">{{$acc->email}}</span>
        </div>

        <div class="form-group">
            <label for="role">Vai Trò</label>
            <select id="role" name="role">
                <option value="admin" {{$acc->role=='admin'?'selected':''}}>Admin</option>
                <option value="user" {{$acc->role=='user'?'selected':''}}>User</option>
            </select>
            @error('role')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Update</button>
    </form>
</div>
@endsection
