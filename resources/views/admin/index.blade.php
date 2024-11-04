<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('index.css') }}">

    <!-- Font-icon css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js',])

    <title>@yield('title')</title>
</head>

<body>
    <div id="mySidenav" class="mySidenav">
        <p class="logo">
            <span>Wina</span> Shoes
        </p>

        <a href="{{ route('dashboard') }}" class="icon-a">
            <i class="fa-solid fa-gauge icons"></i> &nbsp;&nbsp; Thống Kê
        </a>

        <a href="{{ route('category.management') }}" class="icon-a">
            <i class="fa-solid fa-calendar icons"></i> &nbsp;&nbsp; Quản Lý Danh Mục
        </a>

        <a href="{{ route('product.management') }}" class="icon-a">
            <i class="fa-brands fa-product-hunt icons"></i> &nbsp;&nbsp; Quản Lý Sản Phẩm
        </a>


        <a href="{{ route('product_variants.management') }}" class="icon-a">
            <i class="fa-solid fa-comments icons"></i> &nbsp;&nbsp; Quản Lý BIến Thể Sản Phẩm
        </a>


        <a href="{{ route('discount.management') }}" class="icon-a">
            <i class="fa-solid fa-comments icons"></i> &nbsp;&nbsp; Quản Lý Mã Giảm Giá
        </a>

        <a href="{{ route('account.management') }}" class="icon-a">
            <i class="fa-solid fa-user icons"></i> &nbsp;&nbsp; Quản Lý Tài Khoản
        </a>

        <a href="{{ route('order.management') }}" class="icon-a">
            <i class="fa-solid fa-bag-shopping icons"></i> &nbsp;&nbsp; Quản Lý Đơn Hàng
        </a>

        <a href="{{ route('comment.management') }}" class="icon-a">
            <i class="fa-solid fa-envelope-open-text icons"></i> &nbsp;&nbsp; Quản Lý Bình Luận
        </a>

        <a href="{{ route('review.management') }}" class="icon-a">
            <i class="fa-solid fa-comments icons"></i> &nbsp;&nbsp; Quản Lý Đánh Giá
        </a>

    </div>

    <div id="main">
        <div class="head">
            <div class="col-div-6">
                <span style="font-size: 30px; cursor: pointer; color: white" class="nav">
                    &#9776; Dashbroad
                </span>
                <span style="font-size: 30px; cursor: pointer; color: white" class="nav2">
                    &#9776; Dashbroad
                </span>
            </div>
            <div class="col-div-6">
                <div class="profile">
                    <img src="{{ url('storage/images/g7.jpg') }}" alt="" class="pro-img" width="100px">
                    <p>Manoj Adhijari <span> UI/ UX DESIGHNER</span></p>
                </div>
            </div>

            <div class="clearfix">

            </div>

            @yield('content')


        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script></script>
</body>



</html>
