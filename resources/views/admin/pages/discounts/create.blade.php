@extends('Admin.layouts.master')

@section('title')
    Thêm mới Discount
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thêm mới Discount</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.discounts.store') }}" method="POST">
                            @csrf
                            <div class="live-preview">
                                <!-- Discount Code -->
                                <div class="col-md-12">
                                    <label for="discount_code" class="form-label">Discount Code</label>
                                    <input type="text" class="form-control" name="discount_code" id="discount_code"
                                        value="{{ old('discount_code') }}" placeholder="Nhập mã giảm giá...">
                                    @error('discount_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="col-md-12 mt-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        placeholder="Nhập mô tả">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Start Date -->
                                <div class="col-md-12 mt-3">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                        value="{{ old('start_date') }}">
                                    @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- End Date -->
                                <div class="col-md-12 mt-3">
                                    <label for="end_date" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                        value="{{ old('end_date') }}">
                                    @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- Is Active -->
                                <div class="col-md-12 mt-3">
                                    <label for="is_active" class="form-label">Trạng thái kích hoạt</label>
                                    <select class="form-control" name="is_active" id="is_active">
                                        <option value="1" {{ old('is_active' ) == 1 ? 'selected' : '' }}>Kích hoạt</option>
                                        <option value="0" {{ old('is_active' ) == 0 ? 'selected' : ''}}>Không kích hoạt</option>
                                    </select>
                                    @error('is_active')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Discount Type -->
                                <div class="col-md-12 mt-3">
                                    <label for="discount_type" class="form-label">Loại giảm giá</label>
                                    <select class="form-control" name="discount_type" id="discount_type">
                                        <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Phần trăm</option>
                                        <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Giảm giá cố định</option>
                                    </select>
                                    @error('discount_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Discount Value -->
                                <div class="col-md-12 mt-3">
                                    <label for="discount_value" class="form-label">Giá trị giảm giá</label>
                                    <input type="number" class="form-control" name="discount_value" id="discount_value"
                                        value="{{ old('discount_value') }}" step="0.01" placeholder="Nhập giá trị giảm giá">
                                    @error('discount_value')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Minimum Order Value -->
                                <div class="col-md-12 mt-3">
                                    <label for="min_order_value" class="form-label">Giá trị đơn hàng tối thiểu</label>
                                    <input type="number" class="form-control" name="min_order_value" id="min_order_value"
                                        value="{{ old('min_order_value') }}" step="0.01" placeholder="Nhập giá trị đơn hàng tối thiểu">
                                    @error('min_order_value')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Usage Limit -->
                                <div class="col-md-12 mt-3">
                                    <label for="usage_limit" class="form-label">Giới hạn sử dụng</label>
                                    <input type="number" class="form-control" name="usage_limit" id="usage_limit"
                                        value="{{ old('usage_limit') }}" placeholder="Nhập giới hạn sử dụng">
                                    @error('usage_limit')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-3">
                                    <div class="text-start">
                                        <button type="submit" id="btnAddDiscount"
                                            class="btn btn-primary">Thêm Discount</button>
                                        <a href="{{ route('admin.discounts.index') }}" class="btn btn-outline-warning">Quay lại</a>
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
