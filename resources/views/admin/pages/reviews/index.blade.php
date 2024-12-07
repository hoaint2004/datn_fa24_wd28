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

                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="card-tables-showcode" class="form-label text-muted">Show Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                            </div>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="table-responsive table-card">
                                <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 46px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="cardtableCheck">
                                                    <label class="form-check-label" for="cardtableCheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">STT</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Mã sản phẩm</th>
                                            <th scope="col">Ảnh sản phẩm</th>
                                            <th scope="col">Kích cỡ</th>
                                            <th scope="col">Màu</th>
                                            <th scope="col">Trạng thái đơn hàng</th>
                                            <th scope="col">Mã đơn hàng</th>
                                            <th scope="col">Sao</th>
                                            <th scope="col">Người đánh giá</th>
                                            <th scope="col">Nội dung đánh giá</th>

                                            <th scope="col" style="width: 150px;">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reviews_order as $key => $review)
                                            <tr data-id-tr="{{ $review->id }}">
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="cardtableCheck03">
                                                        <label class="form-check-label" for="cardtableCheck03"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $review->product->name }}</td>
                                                <td>{{ $review->product->code }}</td>
                                                <td><img src="{{ asset($review->product->image) }}" width="100px" height="100px" alt="Product Image"></td>
                                                <td>{{ $review->size }}</td>
                                                <td>{{ $review->color }}</td>
                                                <td>{{ $review->order_detail->order->status }}</td>
                                                <td>{{ $review->order_detail->order->code }}</td>
                                                <td>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $review->rating)
                                                            <i class="ri-star-fill text-warning"></i>
                                                        @else
                                                            <i class="ri-star-line text-muted"></i>
                                                        @endif
                                                    @endfor
                                                </td>
                                                <td>{{ $review->user->name }}</td>
                                                <td>{{ $review->content }}</td>
                                                <td>
                                                    <a style="margin: 0 5px; cursor: pointer;" href="{{ route('admin.reviews.edit', $review->id) }}" class="link-primary">
                                                        <i class="ri-settings-4-line" style="font-size:18px;"></i>
                                                    </a>
                                                    <a style="margin: 0 5px; cursor: pointer;" class="link-danger">
                                                        <i class="ri-delete-bin-5-line" style="font-size:18px;" data-bs-toggle="modal" data-bs-target="#topmodal{{ $review->id }}"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    
                                            <!-- Modal Xóa -->
                                            <div id="topmodal{{ $review->id }}" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center p-5">
                                                            <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#405189" style="width:130px;height:130px"></lord-icon>
                                                            <div class="mt-4">
                                                                <h4 class="mb-3">Bạn muốn xóa đánh giá '{{ $review->content }}'?</h4>
                                                                <p class="text-muted mb-4">Nó sẽ bị xóa vĩnh viễn khỏi website của bạn</p>
                                                                <div class="hstack gap-2 justify-content-center">
                                                                    <a href="javascript:void(0);" class="btn btn-link link-success fw-medium btnClose{{ $review->id }}" data-bs-dismiss="modal">
                                                                        <i class="ri-close-line me-1 align-middle"></i> Hủy
                                                                    </a>
                                                                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="post">
                                                                        @csrf
                                                                       
                                                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
</div> <!-- end col -->



@endsection