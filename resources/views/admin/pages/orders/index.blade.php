@extends('Admin.layouts.master')

@section('title')
    Danh sách đơn hàng
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
    </style>
@endsection

@section('content')
  

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách đơn hàng</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">

                                    {{-- <div class="d-flex mb-3">
                                        <!-- Lọc theo danh mục -->
                                        <form method="GET" action="{{ route('admin.products.index') }}" class="d-flex">
                                            <select name="category_id" class="form-select" aria-label="Chọn danh mục">
                                                <option value="">Chọn danh mục</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" value="{{ request('name') }}">
                                            <button type="submit" class="btn btn-primary ms-2">Lọc</button>
                                        </form>
                                    </div> --}}
                                    

                                    <span class="text-danger">{{ session('messages') ?? '' }}</span>

                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col">Thông tin người nhận</th>
                                                <th scope="col">Mã đơn hàng</th>
                                                <th scope="col">Tổng tiền</th>
                                                <th scope="col">Trạng thái giao hàng</th>
                                                <th scope="col">Phương thức thanh toán</th>
                                                <th scope="col">Trạng thái thanh toán</th>
                                                <th scope="col">Ngày đặt</th>
                                                <th scope="col" class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $key => $item)
                                                <tr class="text-center">
                                                    <td>{{ $key + 1 }}</td>
                                                    <td> 
                                                        <p>Tên: {{ $item->name }}</p>
                                                        <p>Số điện thoại: {{ $item->phone }}</p>
                                                    </td>

                                                    <td>{{ $item->code }}</td>
                                                    <td>{{ number_format($item->total_price, 0, ',', '.') }} đ</td>
                                                    <td>{{ $item->status }}</td>
                                                    <td>{{ $item->payment_method }}</td>
                                                    <td>{{ $item->payment_status }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.orders.edit', $item->id) }}" class="btn btn-sm btn-success">
                                                            <i class="ri-settings-4-line"></i>
                                                        </a>
                                                        {{-- <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#topmodal{{ $item->id }}">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </a> --}}
                                                        <a href="{{ route('admin.orders.show', $item->id) }}" class="btn btn-sm btn-info">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    {{-- <div class="d-flex justify-content-end mt-3">
                                        {{ $orders->links('bootstrap-5') }}
                                    </div> --}}
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