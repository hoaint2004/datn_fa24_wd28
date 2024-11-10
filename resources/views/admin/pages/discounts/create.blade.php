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

                                <!-- Submit Button -->
                                <div class="col-12 mt-3">
                                    <div class="text-start">
                                        <button type="submit" id="btnAddDiscount" name="insertDiscount"
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
