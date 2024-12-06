@extends('client.layouts.master')
@section('title', 'cảm ơn')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="payment-success uk-container uk-container-large">
        <!-- <h1>Đặt hàng thành công</h1> -->

        <div class="payment-success-body">
            <img src="https://shop.sandisk.com/content/dam/spinco/en-us/assets/support/home/icon-productregistration.svg" alt="" width="150px">

            <div class="info-success">
                <h2 class="thankyou-success">Cảm ơn bạn đã đặt hàng</h2>
                <div class="order-info">
                    <div class="info-item">
                        <span class="info-label">Mã đơn hàng:</span>
                        <span class="info-value">{{ session('code') }}</span>
                    </div>
                    <div class="info-group">
                        <h3>Thông tin giao hàng:</h3>
                        <div class="info-item">
                            <span class="info-label">Người nhận:</span>
                            <span class="info-value">{{ session('name') }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Số điện thoại:</span>
                            <span class="info-value">{{ session('phone') }}</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Địa chỉ:</span>
                            <span class="info-value">{{ session('address') }}</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-label mr-4">Phương thức thanh toán:</span>
                        <span class="info-value">{{ session('payment_method') }}</span>
                    </div>
                </div>
            </div>


            <!-- <p class="payment-success-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto fugiat saepe animi recusandae, aut magni quas voluptates consequatur perferendis commodi earum! A in doloremque quia fugit moles</p> -->
            <a href="{{ route('home') }}" class="payment-success-btn">Về trang chủ <i class="fa-solid fa-arrow-right"></i></a>
        </div>

    </div>


    </div>
</body>

</html>




<!-- <div class="main">
    <div class="container1">
        <h1 style="font-size: 24px">Cảm ơn bạn đã đặt hàng!</h1>
        <p>Mã đơn hàng {{ session('code') }}</p>
        <p><strong>Thông tin giao hàng</strong></p>
        <p>
            {{ session('name') }}
        </p>
        <p>{{ session('phone') }}</p>
        <p>{{ session('address') }}</p>
        <p><strong>Phương thức thanh toán</strong></p>

        <p>({{ session('payment_method') }})</p>


        <a href="{{ route('home') }}" class="btn">Tiếp tục mua hàng</a>
    </div>
</div> -->
@endsection