@extends('Admin.layouts.master')

@section('title')
    Cập nhật thông tin sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật thông tin sản phẩm</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.product_variants.update', $product_variant->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="live-preview">
                                <!-- Product ID (Hidden) -->
                                <input type="hidden" name="id" value="{{ $product_variant->id }}">

                                <!-- Product ID -->
                                <div class="col-md-12 mt-3">
                                    <label for="product_id" class="form-label">Mã sản phẩm</label>
                                    <select class="form-control" name="product_id" id="product_id">
                                        <option value="">Chọn sản phẩm...</option>
                                        @foreach ($product as $pro)
                                        <option value="{{ $pro->id }}" {{ old('product_id', $product_variant->product_id) == $pro->id ? 'selected' : '' }}>
                                            {{ $pro->name }}
                                        </option>
                                        
                                        @endforeach
                                    </select>
                                    @error('product_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Size -->
                                <div class="col-md-12 mt-3">
                                    <label for="sizeInput" class="form-label">Kích cỡ</label>
                                    <input type="number" class="form-control" name="size" id="sizeInput"
                                        value="{{ old('size', $product_variant->size) }}"
                                        placeholder="Nhập kích cỡ...">
                                    @error('size')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Color -->
                                <div class="col-md-12 mt-3">
                                    <label for="colorInput" class="form-label">Màu sắc</label>
                                    <input type="text" class="form-control" name="color" id="colorInput"
                                        value="{{ old('color', $product_variant->color) }}"
                                        placeholder="Nhập màu sắc...">
                                    @error('color')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Quantity -->
                                <div class="col-md-12 mt-3">
                                    <label for="quantityInput" class="form-label">Số lượng</label>
                                    <input type="number" class="form-control" name="quantity" id="quantityInput"
                                        value="{{ old('quantity', $product_variant->quantity) }}"
                                        placeholder="Nhập số lượng...">
                                    @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-3">
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Cập nhật thông tin sản phẩm</button>
                                        <a href="{{ route('admin.product_variants.index') }}" class="btn btn-outline-warning">Quay
                                            lại</a>
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
