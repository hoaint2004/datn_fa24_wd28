@extends('Admin.layouts.master')

@section('title')
    Chỉnh sửa đánh giá
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Chỉnh sửa đánh giá</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="live-preview">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="productInput" class="form-label">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="productInput" 
                                               value="{{ $review->product->name }}" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="userInput" class="form-label">Người đánh giá</label>
                                        <input type="text" class="form-control" id="userInput" 
                                               value="{{ $review->user->fullname }}" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="userInput" class="form-label">Ảnh sản phẩm</label>
                                        <img src="{{asset($review->product->image)}}" alt="error" class="">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label for="ratingInput" class="form-label">Đánh giá (Sao)</label>
                                        <select name="rating" id="ratingInput" class="form-select">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <option value="{{ $i }}" {{ $i == $review->rating ? 'selected' : '' }}>
                                                    {{ $i }} Sao
                                                </option>
                                            @endfor
                                        </select>
                                        @error('rating')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contentInput" class="form-label">Nội dung đánh giá</label>
                                        <textarea class="form-control" name="content" id="contentInput" rows="4">{{ old('content', $review->content) }}</textarea>
                                        @error('content')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Cập nhật đánh giá</button>
                                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-outline-warning">Quay lại</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
