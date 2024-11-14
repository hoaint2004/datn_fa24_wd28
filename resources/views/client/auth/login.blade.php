<link rel="stylesheet" href="{{ asset('login.css') }}">

<div class="wrapper">
    @if (session('errorLogin'))
        <div class="alert alert-danger">
            {{ session('errorLogin') }}
        </div>
    @endif
    <form action="{{ route('postLogin') }}" method="POST">
        @csrf
        <h2>Đăng nhập</h2>
        <div class="input-field">
            <input type="email" name="email" value="{{ old('email') }}" required>
            <label for="">Email</label>
        </div>

        <div class="input-field">
            <input type="password" name="password" value="{{ old('password') }}" required>
            <label for="">Mật khẩu</label>
        </div>

        <div class="forget">
            <label for="remember">
                <input type="checkbox" name="" id="remember">
                <p>Ghi nhớ tôi</p>
            </label>

            <a href="#">Quên mật khẩu?</a>
        </div>

        <button type="submit">Đăng nhập</button>

        <div class="register">
            <p>Bạn chưa có tài khoản?
                <a href="{{ route('postRegister') }}">Đăng ký</a>
            </p>
        </div>
    </form>
</div>