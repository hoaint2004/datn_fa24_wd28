@extends('Admin.layouts.master')

@section('title')
    Danh sách biến thể sản phẩm
@endsection

@section('content')

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách biến thể sản phẩm</h4>
                            {{-- <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <label for="card-tables-showcode" class="form-label text-muted">Show Code</label>
                                    <input class="form-check-input code-switcher" type="checkbox" id="card-tables-showcode">
                                </div>
                            </div> --}}
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <a href="/admin/product_variants/create" class="btn btn-primary m-3">Thêm mới biến thể sản phẩm</a>
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
                                                <th scope="col">Tên Sản Phẩm</th>
                                                <th scope="col">Kích Thước</th>
                                                <th scope="col">Màu Sắc</th>
                                                <th scope="col">Số Lượng</th>
                                                <th scope="col" style="width: 150px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product_variants as $pro_var)
                                                <tr data-id-tr="{{ $pro_var->id }}">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                            id="cardtableCheck{{ $pro_var->id }}">
                                                            <label class="form-check-label" for="cardtableCheck{{ $pro_var->id }}"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $pro_var->id }}</td>
                                                    <td>{{ optional($pro_var->product)->name }}</td> <!-- Sử dụng optional để tránh lỗi -->
                                                    <td>{{ $pro_var->size }}</td>
                                                    <td>{{ $pro_var->color }}</td>
                                                    <td>{{ $pro_var->quantity }}</td>
                                                    <td>
                                                        <a style="margin: 0 5px; cursor: pointer;"
                                                            href="{{ route('admin.product_variants.edit', $pro_var->id) }}"
                                                            class="link-primary"><i class="ri-settings-4-line"
                                                                style="font-size:18px;"></i></a>
                                                        <a style="margin: 0 5px; cursor: pointer;" class="link-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $pro_var->id }}">
                                                            <i class="ri-delete-bin-5-line" style="font-size:18px;"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <!-- Modal for delete confirmation -->
                                                <div id="deleteModal{{ $pro_var->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#405189" style="width:130px;height:130px"></lord-icon>
                                                                <div class="mt-4">
                                                                    <h4 class="mb-3">Bạn muốn xóa biến thể của sản phẩm '{{ $pro_var->product->name ?? 'N/A' }}'?</h4>
                                                                    <p class="text-muted mb-4"> Nó sẽ bị xóa vĩnh viễn khỏi website của bạn</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">Hủy</a>
                                                                        <form action="{{ route('admin.product_variants.delete', $pro_var->id) }}" method="POST">
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
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div> <!-- end col -->
@endsection
