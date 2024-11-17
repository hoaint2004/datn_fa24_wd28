@extends('user.index')
@section('title', 'Thông tin tài khoản')
@section('content')
    <div class="profile-container">
        <aside class="sidebar">
            <div class="profile-header">
                @if (Auth::check())
                    <h2>Xin Chào 👋 <span>{{ Auth::user()->fullname }}</span></h2>
                    {{-- <a href="{{ route('logout') }}" class="auth-link">Logout</a> --}}
                @else
            </div>
            <nav class="menu">
                <ul>
                    <li class="active">Thông tin cá nhân</li>
                    <li>Đơn hàng của tôi</li>
                    <li>Quản lý địa chỉ</li>
                    <li>Mã giảm giá</li>
                    <li>Notifications</li>
                    <li>Cài đặt</li>
                </ul>
            </nav>
        </aside>

        <main class="content">
            <button class="edit-profile"> <i class="fa-regular fa-pen-to-square"></i> Chỉnh sửa hồ sơ</button>
            <form class="profile-form">
                <div class="form-group">
                    <label>Họ và tên</label>
                    <input type="text" value="{{ $user->fullname}}">
                </div>
                <div class="form-group">
                    <label>Tên người dùng</label>
                    <input type="text" value="{{ $user->username}}">
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" value="{{ $user->phone}}">
                </div>
                <div class="form-group">
                    <label>Địa chỉ Email</label>
                    <input type="text" value="{{ $user->email}}">
                </div>
            </form>
        </main>
    </div>
@endsection
