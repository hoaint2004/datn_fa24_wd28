@extends('Admin.layouts.master')

@section('title')
    Danh sách bình luận
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách bình luận</h4>
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
                                                <th scope="col">Người bình luận</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Nội dung</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col" style="width: 150px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($comments as $key => $comment)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck03">
                                                            <label class="form-check-label" for="cardtableCheck03"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>
                                                        <ul>
                                                            <li>{{ $comment->user->fullname }}</li>
                                                            <li>{{ $comment->user->email }}</li>
                                                            <li>{{ $comment->user->role == 'admin' ? 'Quản lý' : 'Khách hàng' }}</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul>
                                                            <li><img src="{{ $comment->product->image }}" width="50px" alt=""></li>
                                                            <li>Tên sản phẩm: {{ $comment->product->name }}</li>
                                                            <li>Giá: {{ number_format($comment->product->price, 0, ',', '.') }} VND</li>
                                                        </ul>
                                                    </td>
                                                    <td>{{ $comment->content }}</td>
                                                    <td><span
                                                            class="badge bg-{{ $comment->status === 1 ? 'success' : 'danger' }}">{{ $comment->status === 1 ? 'Hiện' : 'Ẩn' }}</span>
                                                    </td>
                                                    <td>
                                                        <a style="margin: 0 5px; cursor: pointer;"
                                                            href="{{ route('admin.comments.edit', $comment->id) }}"
                                                            class="link-primary"><i class="ri-settings-4-line"
                                                                style="font-size:18px;"></i></a>
                                                        <a style="margin: 0 5px; cursor: pointer;" class="link-danger"><i
                                                                class="ri-delete-bin-5-line" style="font-size:18px;"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#topmodal{{ $comment->id }}"></i></a>
                                                    </td>
                                                </tr>
                                                <div id="topmodal{{ $comment->id }}" class="modal fade" tabindex="-1"
                                                    aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"
                                                                    trigger="loop"
                                                                    colors="primary:#f7b84b,secondary:#405189"
                                                                    style="width:130px;height:130px"></lord-icon>
                                                                <div class="mt-4">
                                                                    <h4 class="mb-3">Bạn muốn xóa bình luận
                                                                        '{{ $comment->name }}' ?</h4>
                                                                    <p class="text-muted mb-4"> Nó sẽ bị xóa vĩnh viễn khỏi
                                                                        website của bạn</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-link link-success fw-medium btnClose{{ $comment->id }}"
                                                                            data-bs-dismiss="modal"><i
                                                                                class="ri-close-line me-1 align-middle"></i>
                                                                            Hủy</a>
                                                                        <form action="{{ route('admin.comments.delete', $comment->id) }}" method="post">
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

@section('script')
@endsection