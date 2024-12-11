@extends('Admin.layouts.master')

@section('title')
    Cập nhật bình luận
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật bình luận</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="live-preview">
                                <div class="col-md-12 mt-2">
                                    <label for="categoryInput" class="form-label">Trạng thái</label><br>
                                    <input type="radio" class="btn-check statusCategories" value="1" name="status"
                                        id="success-outlined" autocomplete="off" {{ old('status', $comment->status) == 1 ? 'checked' : '' }}>
                                    <label class="btn btn-outline-success" for="success-outlined">Hiện</label>

                                    <input type="radio" class="btn-check statusCategories" value="0" name="status"
                                        id="danger-outlined" autocomplete="off" {{ old('status', $comment->status) == 0 ? 'checked' : '' }}>
                                    <label class="btn btn-outline-danger" for="danger-outlined">Ẩn</label>
                                </div>
                                <div class="col-12">
                                    <div class="text-start">
                                        <button type="submit" id="btnAddCate" name="insertCategory"
                                            class="btn btn-primary insertCategory">Cập nhật bình luận</button>
                                        <a href="{{ route('admin.comments.index') }}" class="btn btn-outline-warning">Quay lại</a>
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