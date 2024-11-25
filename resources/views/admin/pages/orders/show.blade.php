@extends('Admin.layouts.master')

@section('title')
    Danh sách sản phẩm
@endsection
@section('style')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .page-content {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
        }

        .table-light {
            background-color: #f1f1f1;
        }

        .btn {
            background-color: #007bff;
            color: white;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table tr:hover {
            background-color: #f9f9f9;
        }
        ul>li {

        }
        b {

        }
    </style>
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Thông tin người nhận</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <ul>
                                <li>Họ và tên: <b>{{ $order->name }}</b></li>
                                <li>Số điện thoại: <b>{{ $order->phone }}</b></li>
                                <li>Địa chỉ: <b>{{ $order->phone }}</b></li>
                                <li>Trạng thái đơn hàng: <b>{{ $order->status }}</b></li>
                                <li>Trạng thái thanh toán: <b>{{ $order->payment_status }}</b></li>
                                <li>Phương thức thanh toán thanh toán: <b>{{ $order->payment_method }}</b></li>
                                <li>Tiền hàng: <b>{{ number_format($order->total_price, 0, ',', '.') }} đ</b></li>
                                <li>Tiền ship: <b>{{ number_format($order->shipping_fee, 0, ',', '.') }} đ</b></li>
                                <li style="font-size: 18px">Tổng tiền: <b>

                                        {{ number_format($order->total_price + $order->shipping_fee, 0, ',', '.') }} đ</b>
                                </li>
                            </ul>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sản phẩm của đơn hàng</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col">Mã sản phẩm</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Đơn giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->orderDetail as $key => $item)
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td>{{ $item->product->code }}</td>
                                                    <td><img src="{{ $item->product->image }}" width="100px"
                                                            alt="error" class="rounded"></td>
                                                    <td>{{ $item->product->name }}</td>
                                                    <td>{{ number_format($item->product->price, 0, ',', '.') ?? number_format($item->product->price_old, 0, ',', '.') }}
                                                        đ</td>
                                                    <td>{{ $item->quantity }}</td>
                                                    <td>{{ $item->total }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div> <!-- end col -->
@endsection

@section('script')
@endsection
