@extends('Admin.layouts.master')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Chi tiết sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{ $product->image }}" alt="Image" class="img-fluid rounded" style="max-height: 300px; width: auto;">
                                </div>
                                <div class="col-md-7">
                                    <h5 class="mb-3">Tên sản phẩm: {{ $product->name }}</h5>
                                    <p><strong>Danh mục:</strong> {{ $product->category->name ?? 'Không có danh mục' }}</p>
                                    <p><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} đ</p>
                                    <p><strong>Mô tả:</strong> {{ $product->description }}</p>
                                    <h6 class="mt-4">Biến thể:</h6>
                                    <ul class="list-unstyled">
                                        @foreach ($product->variants as $variant)
                                            <li>
                                                - Kích thước: {{ $variant->size }}, 
                                                Màu sắc: {{ $variant->color }}, 
                                                Số lượng: {{ $variant->quantity }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    {{-- Nút chỉnh sửa sản phẩm (nếu cần) --}}
                                    {{-- <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Chỉnh sửa</a> --}}
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
