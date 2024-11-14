@extends('Admin.layouts.master')

@section('title')
    Thêm mới biến thể sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thêm mới biến thể sản phẩm</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.product_variants.store') }}" method="POST">
                            @csrf

                            <!-- Product ID -->
                            <div class="col-md-12">
                                <label for="product_id" class="form-label">Mã sản phẩm</label>
                                <select class="form-control" name="product_id" id="product_id">
                                    <option value="">Chọn sản phẩm...</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"
                                            {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('product_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="live-preview">
                                <!-- Size -->
                                <div class="col-md-12 mt-3">
                                    <label for="size" class="form-label">Kích thước</label>
                                    <input type="number" class="form-control" name="size" id="size"
                                        value="{{ old('size') }}" placeholder="Nhập kích thước...">
                                    @error('size')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Color -->
                                <div class="col-md-12 mt-3">
                                    <label for="color" class="form-label">Màu sắc</label>
                                    <input type="text" class="form-control" name="color" id="color"
                                        value="{{ old('color') }}" placeholder="Nhập màu sắc...">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Quantity -->
                                <div class="col-md-12 mt-3">
                                    <label for="quantity" class="form-label">Số lượng</label>
                                    <input type="number" class="form-control" name="quantity" id="quantity"
                                        value="{{ old('quantity') }}" placeholder="Nhập số lượng...">
                                    @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Thêm biến thể sản phẩm</button>
                                        <a href="{{ route('admin.product_variants.index') }}"
                                            class="btn btn-outline-warning">Quay lại</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection

@section('script')
@endsection
