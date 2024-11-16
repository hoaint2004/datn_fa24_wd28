@extends('Admin.layouts.master')

@section('title')
    Chi tiết sản phẩm
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card shadow-sm">
                    <div class="card-header align-items-center d-flex bg-primary text-white">
                        <h4 class="card-title mb-0 flex-grow-1">Chi tiết sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 text-center">
                                <img src="{{ $product->image }}" alt="Image" class="img-fluid rounded mb-4" style="max-height: 300px; width: auto;">
                            </div>
                            <div class="col-md-7">
                                <h5 class="mb-3">Tên sản phẩm: <span class="text-primary">{{ $product->name }}</span></h5>
                                <p><strong>Danh mục:</strong> {{ $product->category->name ?? 'Không có danh mục' }}</p>
                                <p><strong>Giá Cũ:</strong> <span class="text-danger">{{ number_format($product->price_old, 0, ',', '.') }} đ</span></p>
                                <p><strong>Giá sale:</strong> <span class="text-danger">{{ number_format($product->price, 0, ',', '.') }} đ</span></p>
                                <p><strong>Mô tả:</strong> {{ $product->description }}</p>

                                <h6 class="mt-4 mb-2">Biến thể sản phẩm:</h6>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Kích thước</th>
                                                <th>Màu sắc</th>
                                                <th>Số lượng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->variants as $variant)
                                                <tr>
                                                    <td>{{ $variant->size }}</td>
                                                    <td>{{ $variant->color }}</td>
                                                    <td>{{ $variant->quantity }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <h6 class="mt-4 mb-2">Thư viện ảnh sản phẩm:</h6>
                                <div class="gallery-container row">
                                    @foreach ($product->images as $img)
                                        <div class="col-md-3 mb-3">
                                            <div class="gallery-item text-center">
                                                <img src="{{asset($img->image_url)}}" alt="Ảnh sản phẩm" class="img-fluid rounded" style="max-height: 150px; width: auto;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-4 d-flex justify-content-between">
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Quay lại danh sách</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
