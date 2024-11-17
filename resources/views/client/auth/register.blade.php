@extends('Client.layouts.master')

@section('title')
    Đăng ký
@endsection

@section('styleRegister')
    <style>
        .p_register {
            font-size: 15px;
            margin-top: 8px;
        }

        .swal2-title {
            font-size: 22px !important;
        }
    </style>
@endsection

@section('content')
    <!-- Start of Breadcrumbs -->
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="/">Trang chủ</a>
                        <span class="breadcrumb-item active">Đăng ký</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Breadcrumbs -->

    <!-- Start of Main Content Wrapper -->
    <div id="content" class="main-content-wrapper">

        <!-- Start of Login Wrapper -->
        <div class="login-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="user-login">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="section-title">
                                            <h2>Tạo một tài khoản</h2>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                                        <div class="registration-form login-form">
                                            <form action="#">
                                                <div class="login-info mb-half">
                                                    <p>Nếu bạn đã có tài khoản? <a href="{{ route('login.form') }}">Đăng nhập!</a></p>
                                                </div>

                                                <div class="form-group">
                                                    <label for="f-name" class="col-12 col-sm-12 col-md-12 col-form-label">Họ</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="text" class="form-control first_name" id="f-name" placeholder="Nhập họ của bạn..." required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="l-name" class="col-12 col-sm-12 col-md-12 col-form-label">Tên</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="text" class="form-control last_name" id="l-name" placeholder="Nhập tên của bạn..." required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-12 col-sm-12 col-md-12 col-form-label">Email</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="text" class="form-control email" placeholder="Nhập email..." id="email" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-12 col-sm-12 col-md-12 col-form-label">Số điện thoại</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="text" class="form-control phone" placeholder="Nhập số điện thoại..." id="phone" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-12 col-sm-12 col-md-12 col-form-label">Địa chỉ</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="text" class="form-control address" placeholder="Nhập địa chỉ..." id="address" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newpassword" class="col-12 col-sm-12 col-md-12 col-form-label">Mật khẩu</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="password" class="form-control password" placeholder="Nhập mật khẩu..." id="newpassword" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="c-password" class="col-12 col-sm-12 col-md-12 col-form-label">Nhập lại mật khẩu</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="password" class="form-control change_password" placeholder="Mật khẩu nhập lại..." id="c-password" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-12 col-sm-12 col-md-12 col-form-label">Giới tính</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-row">
                                                            <div class="col-6 col-sm-3">
                                                                <div class="custom-radio">
                                                                    <input class="form-check-input gender" value="Nam" type="radio" name="gender" id="male">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="male">Nam</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 col-sm-3">
                                                                <div class="custom-radio">
                                                                    <input class="form-check-input gender" value="Nữ" type="radio" name="gender" id="female">
                                                                    <span class="checkmark"></span>
                                                                    <label class="form-check-label" for="female">Nữ</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="birth" class="col-12 col-sm-12 col-md-12 col-form-label">Ngày sinh</label>
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="date" class="form-control birth" id="birth" required="">
                                                    </div>
                                                </div>
                                                <div class="register-box d-flex justify-content-start mt-half">
                                                    <button type="submit" id="btnRegister" class="default-btn tiny-btn">Đăng ký</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end of user-login -->
                        </main> <!-- end of #primary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Login Wrapper -->
    </div>
    <!-- End of Main Content Wrapper -->
@endsection


@section('script')
@endsection


<script>
    document.getElementById("registerForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const passwordConfirmation = document.getElementById("password_confirmation").value;

    const errorMessage = document.getElementById("errorMessage");
    const successMessage = document.getElementById("successMessage");

    errorMessage.textContent = "";
    successMessage.textContent = "";

    try {
        const response = await fetch("/register", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                name,
                email,
                password,
                password_confirmation: passwordConfirmation,
            }),
        });

        const result = await response.json();

        if (response.status === 422) {
            // Hiển thị lỗi xác thực
            errorMessage.innerHTML = Object.values(result.errors)
                .map(err => `<li>${err}</li>`)
                .join("");
        } else if (result.success) {
            successMessage.textContent = result.message;
        }
    } catch (error) {
        errorMessage.textContent = "An error occurred. Please try again.";
    }
});

</script>
