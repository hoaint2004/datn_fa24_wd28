@extends('client.layouts.master')
@section('title', 'Sneakers - Thế Giới Giày')
@section('content')
@if (session('message'))
<div class="alert-success">
    {{ session('message') }}
</div>
@endif

@if (session('error'))
<div class="alert-danger">
    {{ session('error') }}
</div>
@endif

<div class="profile-container uk-container uk-container-large mt-16">
    <div class="uk-grid" uk-grid>

        <aside class="sidebar uk-width-1-4">
            <div class="profile-header">
                @if (Auth::check())
                <h2>Xin Chào 👋</h2>
                <span>{{ Auth::user()->fullname }}</span>
                @endif
            </div>
            <nav class="menu">
                <ul>
                    <li class="active" onclick="showContent('info')"> <i class="fa-solid fa-user pr-3"></i>Thông tin cá nhân</li>
                    <li onclick="showContent('orders')"><i class="fa-solid fa-box pr-3"></i>Đơn hàng của tôi</li>
                    <li onclick="showContent('wishlists')"><i class="fa-solid fa-heart pr-3"></i>Sản phẩm yêu thích</li>
                    <li onclick="showContent('addresses')"><i class="fa-solid fa-map pr-3"></i>Quản lý địa chỉ</li>
                    <li onclick="showContent('discounts')"><i class="fa-solid fa-money-bill pr-3"></i>Mã giảm giá</li>
                    <li onclick="showContent('notifications')"><i class="fa-solid fa-bell pr-3"></i>Notifications</li>
                    <li onclick="showContent('settings')"><i class="fa-solid fa-gear pr-3"></i>Cài đặt</li>
                </ul>
            </nav>
        </aside>

        <main class="content uk-width-3-4">
            <div id="info-content" class="content-section personal">

                <button class="edit-profile"> <i class="fa-regular fa-pen-to-square pr-2"></i> Chỉnh sửa hồ sơ</button>
                <form class="profile-form uk-grid" uk-griduk uk-width-1-2>
                    <div class="form-groupuk uk-width-1-2 mt-7">
                        <label class="block text-base font-medium text-[#555] pb-1">Họ và tên</label>
                        <input class="mt-1 block w-full p-2 input-info input-account-profile" type="text" value="{{ $user->fullname }}">
                    </div>
                    <div class="form-groupuk uk-width-1-2 mt-7">
                        <label class="block text-base font-medium text-[#555] pb-1">Tên người dùng</label>
                        <input class="mt-1 block w-full p-2 input-info input-account-profile" type="text" value="{{ $user->username }}">
                    </div>
                    <div class="form-groupuk uk-width-1-2 mt-7">
                        <label class="block text-base font-medium text-[#555] pb-1">Địa chỉ Email</label>
                        <input class="mt-1 block w-full p-2 input-info input-account-profile" type="text" value="{{ $user->email }}">
                    </div>

                    <div class="form-group uk uk-width-1-2 mt-7">
                        <label class="block text-base font-medium text-[#555] pb-1">Số điện thoại</label>
                        <input class="mt-1 block w-full p-2 input-info input-account-profile" type="text" value="{{ $user->phone}}">
                    </div>
                </form>

                <!-- Form Thay Đổi Mật Khẩu -->
                <div class="change-password">
                    <h3>Thay đổi mật khẩu</h3>
                    <form action="{{ route('changePassword', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-7">
                            <label class="block text-base font-medium text-[#555] pb-1">Mật khẩu hiện tại</label>
                            <input class="mt-1 block w-full p-2 input-info input-account-profile    " type="password" placeholder="Nhập mật khẩu hiện tại" class="password_old" name="password_old" required>
                        </div>
                        <div class="form-group mb-7">
                            <label class="block text-base font-medium text-[#555] pb-1">Mật khẩu mới</label>
                            <input class="mt-1 block w-full p-2 input-info input-account-profile    " type="password" placeholder="Nhập mật khẩu mới" class="password_new" name="password_new" required>
                        </div>
                        <div class="form-group mb-7">
                            <label class="block text-base font-medium text-[#555] pb-1">Xác nhận mật khẩu mới</label>
                            <input class="mt-1 block w-full p-2 input-info input-account-profile    " type="password" placeholder="Xác nhận mật khẩu mới" class="password_confirm" name="password_confirm" required>
                        </div>
                        <button type="submit" class="save-password-btn">Lưu thay đổi</button>
                    </form>
                </div>

            </div>
<!--             
            <div id="orders-content" class="content-section my-order">
                <form action="" class="form-search-my-order">
                    <input type="text" name="keyword" placeholder="Tìm kiếm đơn hàng..." class="input-my-order" />
                    <button uk-icon="search" class="icon-search">
                    </button>
                </form>

                <div class="order-item">
                    <div class="order-content">
                        <div class="order-content-left">
                            <img alt="" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" />
                            <div class="order-details">
                                <a href="#" class="order-details-nam-product">
                                    <h3>
                                        Giày búp bê da
                                    </h3>
                                </a>
                                <p>
                                    Size: S
                                </p>
                                <p>
                                    Màu: Đen
                                </p>
                                <p>
                                    Số lượng: 1
                                </p>
                            </div>

                        </div>

                        <div class="order-content-right">
                            <div class="order-price">
                                2.180.000₫
                            </div>

                            <div class="order-actions">
                                <button class="view-order-bt">
                                    Xem đơn hàng
                                </button>
                                <button class="review-button" data-uk-toggle="target: #modal-review-1">
                                    Viết đánh giá
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="order-status">
                        <span class="delivered">
                            Đã giao hàng
                        </span>
                        <p>
                            Sản phẩm của bạn đã được giao
                        </p>
                    </div>
                </div>

                <div class="order-item">
                    <div class="order-content">
                        <div class="order-content-left">
                            <img alt="" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" />
                            <div class="order-details">
                                <a href="#" class="order-details-nam-product">
                                    <h3>
                                        Giày búp bê da
                                    </h3>
                                </a>
                                <p>
                                    Size: S
                                </p>
                                <p>
                                    Màu: Đen
                                </p>
                                <p>
                                    Số lượng: 1
                                </p>
                            </div>

                        </div>

                        <div class="order-content-right">
                            <div class="order-price">
                                2.180.000₫
                            </div>

                            <div class="order-actions">
                                <button class="view-order-bt">
                                    Xem đơn hàng
                                </button>
                                <button class="cancel-button">
                                    Hủy đơn hàng
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="order-status">
                        <span class="in-process">
                            Đang xử lý
                        </span>
                        <p>
                            Sản phẩm của bạn đang được xử lý
                        </p>
                    </div>
                </div>

            </div> -->


            <div id="orders-content" class="content-section my-order">
                <div class="order-header">
                    <div class="order-search">
                        <input type="text" name="keyword" placeholder="Tìm kiếm đơn hàng..." class="input-my-order" />
                        <button uk-icon="search" class="icon-search"></button>
                    </div>
                    <div class="order-filter">
                        <select class="uk-select text-[#222] border-none">
                            <option>Tất cả đơn hàng</option>
                            <option>Đã giao hàng</option>
                            <option>Đang xử lý</option>
                            <option>Đã hủy</option>
                        </select>
                    </div>
                </div>

                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-middle uk-table-divider order-table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã đơn hàng</th>
                                <th>Người nhận</th>
                                <th>Tổng tiền</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái giao hàng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>
                                        <p class="uk-margin-remove">{{ $item->name }}</p>
                                    </td>
                                    <td>{{ number_format($item->total_price, 0, ',', '.') }} đ</td>
                                    <td>
                                        {{-- <p class="uk-margin-remove payment-status">{{ $item->payment_status }}</p> --}}
                                        {{ date_format($item->created_at, 'Y-m-d') }}
                                    </td>
                                    <td>
                                        @if ($item->status == 'Giao hàng thành công')
                                            <span class="status-delivered">{{ $item->status }}</span>
                                        @elseif($item->status == 'Đã hủy')
                                            <span class="in-process" style="background-color: red; color: white">{{ $item->status }}</span>
                                        @else
                                            <span class="in-process">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                
                                    <td>
                                        <div class="uk-button-group">
                                            <a href="{{ route('order.show', $item->id) }}" class=" view-order-bt"><button style="text-transform: uppercase">Chi tiết</button></a>
                                            @if ($item->status == 'Chờ xác nhận')
                                                <form action="{{ route('order.update', $item->id) }}" method="post" class="cancel-button form-cancel" style="text-transform: uppercase;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" style="text-transform: uppercase;">Hủy đơn hàng</button>
                                                </form>
                                            @endif
                                            <!-- <button class=" review-button" data-uk-toggle="target: #modal-review-1">Đánh giá</button> -->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="discounts-content" class="content-section">
                <div class="">Phiếu giảm 100% cho khách hàng đặc biệt</div>
            </div>
        </main>

    </div>


    <div id="modal-review-1" class="uk-flex-top modal-review" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default modal-bt" type="button" uk-close></button>

            <h3 class="uk-modal-title font-bold">Đánh giá sản phẩm</h3>
            <div class="uk-margin modal-review-name">
                <p><strong>Tên sản phẩm:</strong> Giày búp bê da</p>
                <p><strong>Màu sắc:</strong> Đen</p>
                <p><strong>Size:</strong> S</p>
            </div>


            <form id="review-form">
                <div class="uk-margin">
                    <strong for="rating" class="rating-model">Đánh giá:</strong>
                    <div class="flex gap-2 items-center mt-1">
                        <a href="#" class="star" data-value="1"><i
                                class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                        <a href="#" class="star" data-value="2"><i
                                class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                        <a href="#" class="star" data-value="3"><i
                                class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                        <a href="#" class="star" data-value="4"><i
                                class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                        <a href="#" class="star" data-value="5"><i
                                class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                    </div>
                </div>


                <div class="uk-margin">
                    <strong for="review-content" class="text-[#222] ">Nội dung đánh giá:</strong>
                    <textarea id="review-content" class=" mt-2 block w-full h-32 p-2 input-info" rows="5" placeholder="Viết đánh giá của bạn về sản phẩm..."></textarea>
                </div>


                <button type="submit" class="bt-review">Gửi đánh giá</button>
            </form>
        </div>
    </div>




</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        showContent('info');
    });

    function showContent(section) {
        // ẩn nd
        var sections = document.querySelectorAll('.content-section');
        sections.forEach(function(section) {
            section.style.display = 'none';
        });
        // hiện nd 
        var activeSection = document.getElementById(section + '-content');
        if (activeSection) {
            activeSection.style.display = 'block';
        }
    }
    $(document).ready(function() {
        $(document).on('submit', '.form-cancel', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Bạn có muốn hủy đơn hàng này không?',
                showDenyButton: true,
                confirmButtonText: 'Có',
                denyButtonText: `Hủy`,
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire({
                        icon: 'success',
                        title: 'Hủy đơn hàng thành công',
                        showConfirmButton: false,
                    });
                }
            });
        });
    });
</script>

@endsection