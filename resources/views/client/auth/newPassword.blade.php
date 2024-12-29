<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xác nhận mật khẩu</title>
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
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <h2>Xác nhận mật khẩu mới</h2>
            <div class="input-field">
                <input id="password_new" type="password"
                    value="{{ old('password') }}" name="password" autocomplete="new-password">
                <label for="">Mật khẩu</label>
            </div>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <input id="password-confirm" type="password" name="password_confirmation"
                    autocomplete="new-password">
                <label for="">Xác nhận mật khẩu mới</label>
            </div>
            @error('password_confirmation')
                <span style="color:red">{{ $message }}</span>
            @enderror

            <button type="submit" class="mt-3">Xác nhận</button>

            <div class="register">
                <p>
                    <a href="{{ route('home') }}">Về trang chủ</a>
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
            icon: 'error',
            title: '{{ session('error') }}',
            showConfirmButton: true
        })
    </script>
@endif

</html>