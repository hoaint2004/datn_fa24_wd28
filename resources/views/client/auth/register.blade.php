<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <!-- <link rel="stylesheet" href="{{ asset('register.css') }}"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sneakers/assets/images/favicon.ico') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <a href="#" class="icon-home-register">
        <span uk-icon="icon: home">
        </span>
        <div> Quay lại trang chủ </div>
    </a>
    <div class="wrapper-register uk-grid" uk-grid>
        <div class="uk-width-1-2 register-left">

            <img src="https://heins.websitesbykarlo.com/wp-content/uploads/2024/04/banner-01-1.jpg" alt="" width="100%">

        </div>

        <form class="uk-width-1-2 register-right" action="{{ route('postRegister') }}" method="post">
            @csrf
            <h2>Đăng Ký Tài Khoản</h2>
            <p class="mb-10">Vui lòng nhập thông tin chi tiết</p>
            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1"> Họ Tên</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Nhập họ và tên" type="text" value="{{ old('fullname') }}" name="fullname">
            </div>
            @error('fullname')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1 mt-5"> Tên Người dùng</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Nhập Tên người dùng" type="text" value="{{ old('username') }}" name="username">
            </div>
            @error('username')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1  mt-5">Email</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Email" type="email" value="{{ old('email') }}" name="email">
            </div>
            @error('email')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1  mt-5"> Số Điện Thoại</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Nhập số điện thoại" type="text" value="{{ old('phone') }}" name="phone">
            </div>
            @error('phone')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1  mt-5"> Mật khẩu</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Nhập mật khẩu" type="password" value="{{ old('password') }}" name="password">
            </div>
            @error('password')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="input-field">
                <label for="" class="block text-base font-medium text-[#222] pb-1  mt-5"> Xác nhận mật khẩu</label>
                <input class="mt-1 block w-full p-2 input-info input-account-profile" placeholder="Xác nhận mật khẩu" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation">
            </div>
            @error('password_confirmation')
            <span style="color:red">{{ $message }}</span>
            @enderror

            <div class="forget">
                <div for="remember" class="checkbox-register">
                    <input type="checkbox" name="" id="remember">
                    <label for="remember">Ghi nhớ tài khoản</label>
                </div>

                <a href="#" style="display:none">Quên mật khẩu?</a>
            </div>

            <button type="submit" class="btn-register">Đăng Ký</button>

            <div class="login">
                <p>Bạn đã có tài khoản?
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
        title: '{{ session('
        error ') }}',
        showConfirmButton: true
    }).then(result => {
        if (result.isConfirmed) {
            window.location.href = "{{ route('register.form') }}";
        }
    });
</script>
@endif

</html>