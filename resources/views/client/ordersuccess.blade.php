@extends('client.layouts.master')
@section('title', 'cảm ơn')
@section('content')
    <style>
        .main {
            color: #333;
            padding: 50px;
            margin: 20px;
        }

        .container1 {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: blue;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: rgb(62, 62, 240);
            color: #fff;
        }
    </style>
    <div class="main">
        <div class="container1">
            <h1 style="font-size: 24px">Cảm ơn bạn đã đặt hàng!</h1>
            <p>Mã đơn hàng {{ session('code') }}</p>
            <p><strong>Thông tin giao hàng</strong></p>
            <p>
                {{ session('name') }}</p>
            <p>{{ session('phone') }}</p>
            <p>{{ session('address') }}</p>
            <p><strong>Phương thức thanh toán</strong></p>
            <p>({{ session('payment_method') }})</p>
            <a href="{{ route('home') }}" class="btn">Tiếp tục mua hàng</a>
        </div>
    </div>
@endsection
