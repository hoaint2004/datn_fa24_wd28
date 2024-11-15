<link rel="stylesheet" href="{{ asset('register.css') }}">
<div class="wrapper">
    <form action="{{ route('postRegister') }}" method="post">
        @csrf
        <h2>Đăng Ký</h2>
        <div class="input-field">
            <input type="text" name="fullname">
            <label for=""> Họ Tên</label>
            @error('fullname')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input type="text" name="username">
            <label for=""> Tên người dùng</label>
            @error('username')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input type="email" name="email">
            <label for="">Email</label>
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>


        <div class="input-field">
            <input type="phone" name="phone">
            <label for=""> Số Điện Thoại</label>
            @error('phone')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input type="password" name="password">
            <label for=""> Mật khẩu</label>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div class="input-field">
            <input type="password" name="password">
            <label for=""> Xác nhận mật khẩu</label>
            @error('password')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

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
