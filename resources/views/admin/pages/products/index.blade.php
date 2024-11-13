@extends('Admin.layouts.master')

@section('title')
    Danh sách sản phẩm
@endsection
@section('style')
    <style>
        body {
            background-color: #f8f9fa;
        }

        .page-content {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
        }

        .table-light {
            background-color: #f1f1f1;
        }

        .btn {
            background-color: #007bff;
            color: white;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table tr:hover {
            background-color: #f9f9f9;
        }
    </style>
@endsection

@section('content')
  

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách sản phẩm</h4>

                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="card-tables-showcode" class="form-label text-muted">Hiển thị mã sản phẩm</label>
                                    <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                                </div>
                            </div>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <div class="d-flex justify-content-between mb-3">
                                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Thêm mới sản phẩm</a>

                                        <!-- Form tìm kiếm -->
                                     

                                    </div>

                                    <div class="d-flex mb-3">
                                        <!-- Lọc theo danh mục -->
                                        <form method="GET" action="{{ route('admin.products.index') }}" class="d-flex">
                                            <select name="category_id" class="form-select" aria-label="Chọn danh mục">
                                                <option value="">Chọn danh mục</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="name" class="form-control" placeholder="Tên sản phẩm" value="{{ request('name') }}">
                                            <button type="submit" class="btn btn-primary ms-2">Lọc</button>
                                        </form>
                                    </div>
                                    

                                    <span class="text-danger">{{ session('messages') ?? '' }}</span>

                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" class="text-center">STT</th>
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Tên sản phẩm</th>
                                                <th scope="col">Danh mục</th>
                                                <th scope="col">Mô tả</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col" class="text-center">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $key => $pro)
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td><img src="{{ $pro->image }}" width="100px" alt="error" class="rounded"></td>
                                                    <td>{{ $pro->name }}</td>
                                                    <td>{{ $pro->category->name ?? 'Không có loại' }}</td>
                                                    <td>{{ Str::limit($pro->description, 50) }}</td>
                                                    <td>{{ number_format($pro->price, 0, ',', '.') }} đ</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('admin.products.edit', $pro->id) }}" class="btn btn-sm btn-success">
                                                            <i class="ri-settings-4-line"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#topmodal{{ $pro->id }}">
                                                            <i class="ri-delete-bin-5-line"></i>
                                                        </a>
                                                        <a href="{{ route('admin.products.detail', $pro->id) }}" class="btn btn-sm btn-info">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <!-- Modal Xóa -->
                                                <div id="topmodal{{ $pro->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#405189" style="width:130px;height:130px"></lord-icon>
                                                                <div class="mt-4">
                                                                    <h4 class="mb-3">Bạn muốn xóa sản phẩm '{{ $pro->name }}'?</h4>
                                                                    <p class="text-muted mb-4">Nó sẽ bị xóa vĩnh viễn khỏi website của bạn.</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">
                                                                            <i class="ri-close-line me-1 align-middle"></i> Hủy
                                                                        </a>
                                                                        <form action="{{ route('admin.products.delete', $pro->id) }}" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <div class="d-flex justify-content-end mt-3">
                                        {{ $products->links('pagination::bootstrap-5') }}
                                    </div>
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
