<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('register.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sneakers/assets/images/favicon.ico') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="{{ route('postLogin') }}" method="POST">
            @csrf
            <h2>Đăng nhập</h2>
            <div class="input-field">
                <input type="email" name="email" value="{{ old('email') }}">
                <label for="">Email</label>
            </div>
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input type="password" name="password" value="{{ old('password') }}">
                <label for="">Mật khẩu</label>
            </div>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="forget">
                <label for="remember">
                    <input type="checkbox" name="" id="remember">
                    <p>Ghi nhớ tôi</p>
                </label>

                <a href="{{ route('password.forgotPassword') }}">Quên mật khẩu?</a>
            </div>

            <button type="submit">Đăng nhập</button>

            <div class="register">
                <p>Bạn chưa có tài khoản?
                    <a href="{{ route('postRegister') }}">Đăng ký</a>
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
                window.location.href = "{{ route('home') }}";
            }
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            position: 'center',
            icon: 'error',
            title: '{{ session('error') }}',
            showConfirmButton: true
        }).then(result => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('login.form') }}";
            }
        });
    </script>
@endif

</html>
