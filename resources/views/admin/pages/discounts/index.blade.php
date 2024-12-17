@extends('Admin.layouts.master')

@section('title')
    Danh sách mã giảm giá
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách mã giảm giá</h4>

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
                                    <a href="{{ route('admin.discounts.create') }}" class="btn btn-primary m-3">Thêm mới mã giảm giá</a>
                                    {{-- Lọc theo danh mục (bỏ chú thích để sử dụng) --}}
                                   

                                    <span class="text-danger">{{ session('messages') ?? '' }}</span>
                                    <table class="table align-middle table-nowrap table-striped-columns mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Mã giảm giá</th>
                                                <th scope="col">Mô tả</th>
                                                <th scope="col">Ngày bắt đầu</th>
                                                <th scope="col">Ngày kết thúc</th>
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col">Loại giảm giá</th>
                                                <th scope="col">Giảm giá</th>
                                                <th scope="col">Giá trị đơn hàng tối thiểu</th>
                                                <th scope="col">Giới hạn sử dụng</th>
                                                <th scope="col" style="width: 150px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($discounts as $key => $discount)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $discount->discount_code }}</td>
                                                    <td>{{ $discount->description }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($discount->start_date)->format('d/m/Y') }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($discount->end_date)->format('d/m/Y') }}</td>
                                                    <td>
                                                        @if($discount->is_active)
                                                            <span class="badge bg-success">Kích hoạt</span>
                                                        @else
                                                            <span class="badge bg-danger">Không kích hoạt</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $discount->discount_type }}</td>
                                                    <td>{{ number_format($discount->discount_value, 0, '.', ',' ) }}{{ $discount->discount_type == '%' ? '%' : 'Đ' }}</td>
                                                    <td>{{ number_format($discount->min_order_value, 0, '.', ',').' VND'}}</td>
                                                    <td>{{ $discount->usage_limit }}</td>
                                                    
                                                    <td>
                                                        <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="link-primary" style="margin: 0 5px;">
                                                            <i class="ri-settings-4-line" style="font-size:18px;"></i>
                                                        </a>
                                                        <a href="javascript:void(0);" class="link-danger" style="margin: 0 5px;" data-bs-toggle="modal" data-bs-target="#topmodal{{ $discount->id }}">
                                                            <i class="ri-delete-bin-5-line" style="font-size:18px;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                
                                                <!-- Modal Xóa -->
                                                <div id="topmodal{{ $discount->id }}" class="modal fade" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#405189" style="width:130px;height:130px"></lord-icon>
                                                                <div class="mt-4">
                                                                    <h4 class="mb-3">Bạn muốn xóa mã giảm giá '{{ $discount->discount_code }}'?</h4>
                                                                    <p class="text-muted mb-4">Nó sẽ bị xóa vĩnh viễn khỏi website của bạn.</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">
                                                                            <i class="ri-close-line me-1 align-middle"></i> Hủy
                                                                        </a>
                                                                        <form action="{{ route('admin.discounts.delete', $discount->id) }}" method="post">
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

@section('script')
@endsection