@extends('Client.layouts.master')
@section('title', 'Sneakers - Thế Giới Giày')
@section('content')
    <div class="profile-container">
        <aside class="sidebar">
            <div class="profile-header">
                @if (Auth::check())
                    <h2>Xin Chào 👋 <span>{{ Auth::user()->fullname }}</span></h2>
                @endif
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
                    <input type="text" value="{{ $user->fullname }}">
                </div>
                <div class="form-group">
                    <label>Tên người dùng</label>
                    <input type="text" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label>Địa chỉ Email</label>
                    <input type="text" value="{{ $user->email }}">
                </div>
            </form>

            <!-- Form Thay Đổi Mật Khẩu -->
            <div class="change-password">
                <h3>Thay đổi mật khẩu</h3>
                <form class="change-password-form">
                    <div class="form-group">
                        <label>Mật khẩu hiện tại</label>
                        <input type="password" placeholder="Nhập mật khẩu hiện tại">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu mới</label>
                        <input type="password" placeholder="Nhập mật khẩu mới">
                    </div>
                    <div class="form-group">
                        <label>Xác nhận mật khẩu mới</label>
                        <input type="password" placeholder="Xác nhận mật khẩu mới">
                    </div>
                    <button type="submit" class="save-password-btn">Lưu thay đổi</button>
                </form>
            </div>
        </main>
    </div>
@endsection
