@extends('Admin.layouts.master')

@section('title')
    Thêm mới danh mục
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thêm mới danh mục</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="live-preview">
                                <div class="col-md-12">
                                    <label for="categoryInput" class="form-label">Tên danh mục</label>
                                    <input type="text" class="form-control name" name="name"
                                        id="categoryInput" value="{{ old('name') }}" placeholder="Nhập tên danh mục...">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="categoryInput" class="form-label">Ảnh</label>
                                    <input type="file" class="form-control image" id="inputImage" name="image">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <div id="imagePreview"></div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label for="categoryInput" class="form-label">Trạng thái</label><br>
                                    <input type="radio" class="btn-check statusCategories" value="0" name="status"
                                        id="success-outlined" autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="success-outlined">Hiện</label>
    
                                    <input type="radio" class="btn-check statusCategories" value="1" name="status"
                                        id="danger-outlined" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="danger-outlined">Ẩn</label>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <button type="submit" id="btnAddCate" name="insertCategory"
                                            class="btn btn-primary insertCategory">Thêm danh
                                            mục</button>
                                        <a href="{{ route('admin.categories.index') }}" class="btn btn-outline-warning">Quay lại</a>
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