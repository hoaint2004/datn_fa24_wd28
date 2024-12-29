@extends('Admin.layouts.master')

@section('title')
    Danh sách banner
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Danh sách banner</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive table-card">
                                    <a href="{{ route('admin.banners.create') }}" class="btn btn-primary m-3">Thêm mới banner</a>
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
                                                <th scope="col">Ảnh</th>
                                                <th scope="col">Tên banner</th>
                                                {{-- <th scope="col">Nội dung</th> --}}
                                                <th scope="col">Trạng thái</th>
                                                <th scope="col" style="width: 150px;">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($banners as $key => $banner)
                                                <tr data-id-tr="{{ $banner->id }}">
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="cardtableCheck03">
                                                            <label class="form-check-label" for="cardtableCheck03"></label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td><img src="{{ $banner->image }}" width="100px" alt=""></td>
                                                    <td>{{ $banner->name }}</td>
                                                    {{-- <td>{{ $banner->description }}</td> --}}
                                                    <td><span
                                                            class="badge bg-{{ $banner->status === 1 ? 'success' : 'danger' }}">{{ $banner->status === 1 ? 'Hiện' : 'Ẩn' }}</span>
                                                    </td>
                                                    <td>
                                                        <a style="margin: 0 5px; cursor: pointer;"
                                                            href="{{ route('admin.banners.edit', $banner->id) }}"
                                                            class="link-primary"><i class="ri-settings-4-line"
                                                                style="font-size:18px;"></i></a>
                                                        {{-- <a style="margin: 0 5px; cursor: pointer;" class="link-danger"><i
                                                                class="ri-delete-bin-5-line" style="font-size:18px;"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#topmodal{{ $banner->id }}"></i></a> --}}
                                                    </td>
                                                </tr>
                                                <div id="topmodal{{ $banner->id }}" class="modal fade" tabindex="-1"
                                                    aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center p-5">
                                                                <lord-icon src="https://cdn.lordicon.com/tdrtiskw.json"
                                                                    trigger="loop"
                                                                    colors="primary:#f7b84b,secondary:#405189"
                                                                    style="width:130px;height:130px"></lord-icon>
                                                                <div class="mt-4">
                                                                    <h4 class="mb-3">Bạn muốn xóa banner
                                                                        '{{ $banner->name }}' ?</h4>
                                                                    <p class="text-muted mb-4"> Nó sẽ bị xóa vĩnh viễn khỏi
                                                                        website của bạn</p>
                                                                    <div class="hstack gap-2 justify-content-center">
                                                                        <a href="javascript:void(0);"
                                                                            class="btn btn-link link-success fw-medium btnClose{{ $banner->id }}"
                                                                            data-bs-dismiss="modal"><i
                                                                                class="ri-close-line me-1 align-middle"></i>
                                                                            Hủy</a>
                                                                        <form action="{{ route('admin.banners.delete', $banner->id) }}" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
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

                        <div class="d-flex justify-content-center align-items-center mt-3">
                            {{ $banners->links('pagination::bootstrap-4') }}
                        </div>
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div> <!-- end col -->
@endsection

@section('script')
@endsection
