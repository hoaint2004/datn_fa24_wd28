@extends('Client.layouts.master')

@section('title')
    Đăng nhập
@endsection

@section('content')
    <!-- Start of Breadcrumbs -->
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="/">Trang chủ</a>
                        <span class="breadcrumb-item active">Đăng nhập</span>
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
                                            <h2>Đăng nhập</h2>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                        <div class="login-form">
                                            <form>
                                                <div class="form-group mb-4">
                                                    <label for="email" class="col-12 col-sm-12 col-md-12 col-form-label">Email hoặc Số điện thoại</label>
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        <input type="text" class="form-control" id="emailOrPhone" placeholder="Email/Số điện thoại" required>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="c-password" class="col-12 col-sm-12 col-md-12 col-form-label">Mật khẩu</label>
                                                    <div class="col-12 col-sm-12 col-md-12">
                                                        <input type="password" class="form-control" id="c-password" placeholder="Password" required>
                                                        <button class="pass-show-btn" type="button">Show</button>
                                                    </div>
                                                </div>
                                                <div class="login-box mt-5 text-center">
                                                    <p><a href="#">Quên mật khẩu?</a></p>
                                                    <button type="button" name="btnLogin" id="btnLogin" class="default-btn tiny-btn mt-4 btnLogin">Đăng nhập</button>
                                                </div>
                                                <div class="text-center mt-half pt-half top-bordered">
                                                    <p>Bạn chưa có tài khoản? <a href="{{ route('register.form') }}">Tạo tài khoản.</a></p>
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
