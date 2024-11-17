<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sneakers/assets/images/favicon.ico') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('postRegister') }}" method="post">
            @csrf
            <h2>Đăng Ký</h2>
            <div class="input-field">
                <input type="text" value="{{ old('fullname') }}" name="fullname">
                <label for=""> Họ Tên</label>
            </div>
            @error('fullname')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="text" value="{{ old('username') }}" name="username">
                <label for=""> Tên người dùng</label>
            </div>
            @error('username')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="email" value="{{ old('email') }}" name="email">
                <label for="">Email</label>
            </div>
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="phone" value="{{ old('phone') }}" name="phone">
                <label for=""> Số Điện Thoại</label>
            </div>
            @error('phone')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="password" value="{{ old('password') }}" name="password">
                <label for=""> Mật khẩu</label>
            </div>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                <label for=""> Xác nhận mật khẩu</label>
            </div>
            @error('password_confirmation')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="forget" style="display:none">
                <label for="remember">
                    <input type="checkbox" name="" id="remember">
                    <p>Ghi nhớ </p>
                </label>

                <a href="#">Quên mật khẩu?</a>
            </div>

            <button type="submit">Đăng Ký</button>

            <div class="login">
                <p>Không có tài khoản?
                    <a href="{{ route('login.form') }}">Đăng Nhập</a>
                </p>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.js"></script>

@if (session()->has('status'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{ session("status") }}',
            showConfirmButton: true
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('login.form') }}";
            }
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: '{{ session('error') }}',
            showConfirmButton: true
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('register.form') }}";
            }
        });
    </script>
@endif

</html>
