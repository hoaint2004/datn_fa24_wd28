@extends('Admin.layouts.master')
@section('title', 'Quản lý User')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4 class="card-title mb-0 flex-grow-1">Danh sách User</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-card">
                            <table class="table align-middle table-striped-columns mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên người dùng</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Quyền hành</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col" style="width: 150px;">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->fullname ?? 'N/A' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            @if ($user->status === 'active')
                                                <span class="badge bg-success">Hoạt động</span>
                                            @else
                                                <span class="badge bg-danger">Không hoạt động</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Form cập nhật trạng thái -->
                                            <form method="POST" action="{{ route('admin.updateStatus', $user->id) }}">
                                                @csrf
                                                @method('PATCH')
                                                <select name="status" class="form-select form-select-sm d-inline-block w-auto">
                                                    <option value="active" {{ $user->status == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                                    <option value="inactive" {{ $user->status == 'inactive' ? 'selected' : '' }}>Không hoạt động</option>
                                                </select>
                                                <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success mt-2">{{ session('success') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
