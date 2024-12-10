@extends('Admin.layouts.master')
@section('title')
    Danh sách đánh giá
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Danh sách đánh giá</h4>
                        <form method="GET" action="{{ route('admin.reviews.index') }}" class="d-flex align-items-center">
                            <!-- Lọc theo sao đánh giá -->
                            <select name="rating" class="form-select form-select-sm me-2">
                                <option value="0">Lọc theo sao đánh giá</option>
                                <option value="1">1 sao</option>
                                <option value="2">2 sao</option>
                                <option value="3">3 sao</option>
                                <option value="4">4 sao</option>
                                <option value="5">5 sao</option>
                            </select>
                        
                            <!-- Lọc theo ngày -->
                            <input type="date" name="start_date" class="form-control form-control-sm me-2">
                            <input type="date" name="end_date" class="form-control form-control-sm me-2">
                        
                            <button type="submit" class="btn btn-primary btn-sm">Lọc</button>
                        </form>
                        
                       
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 46px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">STT</th>
                                            <th scope="col">Người đánh giá</th>
                                            <th scope="col">Số sao</th>
                                            <th scope="col">Nội dung đánh giá</th>
                                            <th scope="col">Đánh giá</th>
                                            <th scope="col" style="width: 150px;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($reviews as $review)
                                        <tr>
                                            <td></td>
                                            <td>{{ $loop->iteration }}</td> 
                                            <td>{{ $review->user->username ?? 'N/A' }}</td> 
                                            <td>
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <i class="ri-star-fill text-warning"></i> <!-- Hiển thị sao đánh giá -->
                                                    @else
                                                        <i class="ri-star-line text-muted"></i>
                                                    @endif
                                                @endfor
                                            </td>
                                            <td>{{ $review->content ?? 'Không có nội dung' }}</td> <!-- Nội dung đánh giá -->
                                            <td>{{ $review->created_at ? $review->created_at->diffForHumans() : 'N/A' }}</td>
                                            <td>
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#reviewModal{{ $review->id }}">Chi tiết</a>
                                            </td>
                                        </tr>
                                    
                                        <!-- Modal hiển thị chi tiết đánh giá -->
                                        <div class="modal fade" id="reviewModal{{ $review->id }}" tabindex="-1" aria-labelledby="reviewModalLabel{{ $review->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="reviewModalLabel{{ $review->id }}">Chi tiết đánh giá</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p><strong>Người đánh giá:</strong> {{ $review->user->username ?? 'Ẩn danh' }}</p>
                                                        <p><strong>Email:</strong> {{ $review->user->email ?? 'Không có email' }}</p>
                                                        <p><strong>Thời gian đánh giá:</strong> {{ $review->created_at ? $review->created_at->format('d/m/Y H:i A') : 'N/A' }}</p>
                                                        <p><strong>Nội dung đánh giá:</strong> {{ $review->content ?? 'Không có nội dung' }}</p>
                                                        @if (!empty($review->image))
                                                        <p><strong>Hình ảnh đánh giá:</strong> <img src="{{ $review->image }}" alt="Hình ảnh" width="400px" height="300px"></p>
                                                        @endif
                    
                                                        <p><strong>Đánh giá:</strong>
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $review->rating)
                                                                    <i class="ri-star-fill text-warning"></i>
                                                                @else
                                                                    <i class="ri-star-line text-muted"></i>
                                                                @endif
                                                            @endfor
                                                        </p>
                                                        @if ($review->order)
                                                            <p><strong>Mã đơn hàng:</strong> {{ $review->order->code ?? 'Không xác định' }}</p>
                                                            <p><strong>Sản phẩm trong đơn hàng:</strong></p>
                                                            <div style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd; padding: 10px;">
                                                                <ul class="list-group">
                                                                    @foreach ($review->order->orderDetails as $orderDetail)
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                            <div>
                                                                                <p><strong>Tên sản phẩm:</strong> {{ $orderDetail->variant->product->name ?? 'N/A' }}</p>
                                                                                <p><strong>Màu sắc:</strong> {{ $orderDetail->variant->color ?? 'Không xác định' }}</p>
                                                                                <p><strong>Kích thước:</strong> {{ $orderDetail->variant->size ?? 'Không xác định' }}</p>
                                                                                <p><strong>Số lượng:</strong> {{ $orderDetail->quantity ?? 0 }}</p>
                                                                            </div>
                                                                            @if (!empty($orderDetail->variant->product->image))
                                                                                <img src="{{ $orderDetail->variant->product->image }}" alt="Hình sản phẩm" width="250" height="200">   
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                    
                    <!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div> <!-- end col -->



@endsection