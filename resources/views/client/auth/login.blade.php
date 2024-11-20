<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])

<section>
    <a href="{{route('home')}}" class="icon-home-register">
        <span uk-icon="icon: home">
        </span>
        <div> Quay lại trang chủ </div>
    </a>

    <div class="wrapper-login uk-grid" uk-grid>
        <div class="uk-width-1-2 login-left">
            <img src="https://s3-alpha-sig.figma.com/img/040c/c45a/2d79166cf646d5a5a0119f93bceae506?Expires=1733097600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=XtJ9U5yNNXTF91j2NBmsgRmXb-ngUrtOmjP95bqX6bHuCO7lILxQexO9yiAE76HW3jRESlXGLWI-yefVNHapkWXblD8jMD7kClf1AvFqSRAYUKsuUfVr0Ce4Yh5LsUrvYSlIIky8PYL-l4KxASyl2iq9XhpaJ5KlFuIvmDNyXFzkpKeOPv2j5wfUCsH4LJAqX~uDwo6Qvq-lV5COpNIbp3Y5p5vqHLDIX28mI2ys6nEIY9hN4YnJbUBbIl-CMhmMK8uojZY~xL5vKOLFGibJwhQoYmNmcuBvAfVra3fs3~UAHoAnsA3YukYwJ0KvIuPvyTAOovAEk~Apch03kxGrRw__" alt="">
        </div>

        <div class="uk-width-1-2 login-right">
            @if (session('errorLogin'))
            <div class="alert alert-danger">
                {{ session('errorLogin') }}
            </div>
            @endif
            <form action="{{ route('postLogin') }}" method="POST">
                @csrf
                <h2>Xin chào 👋</h2>
                <span>Vui lòng đăng nhập tại đây</span>
                <div class="input-field">
                    <label for="" class="block text-base font-medium text-[#222] pb-1 mt-5">Email</label>
                    <input class="mt-1 block w-full p-2 input-info input-account-profile" type="email" name="email" value="{{ old('email') }}" required>
                </div>

                <div class="input-field">
                    <label class="block text-base font-medium text-[#222] pb-1 mt-5" for="">Mật khẩu</label>
                    <input class="mt-1 block w-full p-2 input-info input-account-profile" type="password" name="password" value="{{ old('password') }}" required>
                </div>

                <div class="forget">
                    <div for="remember">
                        <input type="checkbox" name="" id="remember">
                        <label for="remember">Ghi nhớ tôi</label>
                    </div>

                    <a href="#" class="pass-forget">Quên mật khẩu?</a>
                </div>

                <button type="submit" class="btn-login">Đăng nhập</button>

                <div class="register">
                    <p>Bạn chưa có tài khoản?
                        <a href="{{ route('postRegister') }}">Đăng ký</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
</section>