@extends('client.layouts.master')
@section('title', 'Wina Shoes - Thế Giới Giày')
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

        {{-- đơn hàng --}}
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
                {{-- <div class="order-filter">
                    <select class="uk-select text-[#222] border-none">
                        <option>Tất cả đơn hàng</option>
                        <option>Đã giao hàng</option>
                        <option>Đang xử lý</option>
                        <option>Đã hủy</option>
                    </select>
                </div> --}}
            </div>
        
            <div class="uk-overflow-auto">
                <table class="uk-table uk-table-middle uk-table-divider order-table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Người nhận</th>
                            <th>Tổng tiền</th>
                            <th>Thanh toán</th>
                            <th>Trạng thái giao hàng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($orders->isEmpty())
                            <tr>
                                <td colspan="7" style="text-align: center; color: red; font-size: 1.2em;">Không có đơn nào</td>
                            </tr>
                        @else
                            @foreach ($orders as $index => $order)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $order->code }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->recipient_name }}</td>
                                    <td>{{ number_format($order->total_price, 0, ',', '.') }}₫</td>
                                    <td>
                                        <p class="uk-margin-remove">{{ $order->payment_method }}</p>
                                        <p class="uk-margin-remove payment-status">
                                            {{ $order->payment_status === 'Đã thanh toán' ? 'Đã thanh toán' : 'Chưa thanh toán' }}
                                        </p>
                                    </td>
                                    <td> 
                                        <!-- Trạng thái đơn hàng -->
                                        <div class="order-status">
                                            @php
                                            $result = match($order->status) {
                                                'Hoàn thành' => '<span class="status-delivered uk-text-success">Đã giao hàng</span>',
                                                'Chờ xác nhận' => sprintf(
                                                    '<span class="pending uk-text-warning">Đang chờ xác nhận</span>
                                                    <button class="cancel-btn uk-button uk-button-danger uk-button-small" data-order-id="%s">Hủy đơn</button>',
                                                    $order->id,
                                                ),
                                                'Đã xác nhận' => sprintf(
                                                    '<span class="confirmed uk-text-primary">Đã xác nhận</span>
                                                    <button class="cancel-btn uk-button uk-button-danger uk-button-small" data-order-id="%s">Hủy đơn</button>',
                                                    $order->id,
                                                ),
                                                'Đang giao' => '<span class="shipping uk-text-warning">Đang giao hàng</span>',
                                                'Giao hàng thành công' => sprintf(
                                                    '<span>Vui lòng nhấn hoàn thành để hoàn tất đơn hàng: </span>
                                                    <button class="complete-btn uk-button uk-button-success uk-button-small" data-order-id="%s">Hoàn thành</button>',
                                                    $order->id,
                                                ),
                                                'Giao hàng thất bại' => sprintf(
                                                    '<span class="failed uk-text-danger">Giao hàng thất bại, vui lòng liên hệ để được xử lý</span>
                                                    <button class="cancel-btn uk-button uk-button-danger uk-button-small" data-order-id="%s">Hủy đơn</button>',
                                                    $order->id,
                                                ),
                                                'Đã hủy' => '<span class="canceled uk-text-muted">Đã hủy</span>',
                                                default => '<span class="unknown uk-text-light">Trạng thái không xác định</span>',
                                            };
                                            @endphp
                        
                                            {!! $result !!}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="uk-button-group">
                                            <div class="order-actions uk-button-group">
                                                <button class="view-order-bt uk-button uk-button-primary" data-uk-toggle="target: #modal-details-{{ $order->id }}">Xem đơn hàng</button>
                                                
                                                @if ($order->status === 'Hoàn thành')
                                                    @if ($order->review_exists)
                                                        <!-- Nếu đã có đánh giá -->
                                                        <button class="review-button uk-button uk-button-default" disabled>
                                                            Đã đánh giá
                                                        </button>
                                                    @else
                                                        <!-- Nếu chưa có đánh giá -->
                                                        <button class="review-button uk-button uk-button-secondary" data-uk-toggle="target: #modal-review-{{ $order->id }}">
                                                            Viết đánh giá
                                                        </button>
                                                    @endif
                                                @elseif (in_array($order->status, ['Chờ xác nhận', 'Đã xác nhận', 'Đang giao', 'Giao hàng thất bại']))
                                                    <span class="uk-text-danger">Bình tĩnh để đánh giá</span>
                                                @endif
                                             
                                            </div>

                                        </div>
                                    </td>
                                </tr>
        
                                <!-- Modal Xem thêm chi tiết sản phẩm -->
                                {{-- <div id="modal-details-{{ $order->id }}" class="uk-flex-top modal-details" uk-modal>

                                    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                        <button class="uk-modal-close-default modal-bt" type="button" uk-close></button>
                                        <h3 class="uk-modal-title font-bold">Thông tin đơn hàng</h3>
                                        <div class="uk-margin modal-details-info">
                                            @foreach ($order->orderDetails as $orderDetail)
                                                <p><strong>Tên sản phẩm:</strong> {{ $orderDetail->product->name }}</p>
                                                <p><img alt="Product Image" class="uk-width-small uk-border-rounded" src="{{ $orderDetail->product->image ?? 'default-image.jpg' }}"/></p>
                                                <p><strong>Màu sắc:</strong> {{ $orderDetail->variant->color ?? 'Không xác định' }}</p>
                                                <p><strong>Size:</strong> {{ $orderDetail->variant->size ?? 'Không xác định' }}</p>
                                                <p><strong>Số lượng:</strong> {{ $orderDetail->quantity }}</p>
                                                <p><strong>Giá:</strong> {{ number_format($orderDetail->price, 0, ',', '.') }}₫</p>
                                                <p><strong>Thông tin chi tiết:</strong> {{ $orderDetail->product->description ?? 'Không có thông tin' }}</p>
                                                <hr />
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div> --}}
        
        {{-- end đơn hàng --}}


        <div id="orders-content" class="content-section my-order">
            <!-- Form tìm kiếm đơn hàng -->
            <form action="" class="order-search">
                <input type="text" name="keyword" placeholder="Tìm kiếm đơn hàng..." class="input-my-order" />
                <button uk-icon="search" class="icon-search"></button>
            </form>

                                    </div>
                                </div> --}}
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        
        
        {{-- end đơn hàng --}}
            <!-- Kiểm tra nếu không có đơn hàng -->
                <!-- Hiển thị danh sách đơn hàng -->
                @foreach ($orders as $order)
                    <div class="order-item">
                        <!-- Modal Xem thêm chi tiết sản phẩm -->
                        <div id="modal-details-{{ $order->id }}" class="uk-flex-top modal-details" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical" style="width: 70%">
                                <button class="uk-modal-close-default modal-bt" type="button" uk-close></button>
                                <h3 class="uk-modal-title font-bold">Thông tin đơn hàng</h3>
                                <div class="uk-margin modal-details-info">
                                    <div class="uk-grid" uk-grid>

                                        <div class="order-detail-left uk-width-2-3 pr-20">
                                            <table class="tb-order-detail">
                                                <thead class="th-order-detail">
                                                    <tr>
                                                        <th class="text-[17px]">
                                                            Sản phẩm
                                                        </th>
                                                        <th class="text-[17px]">
                                                            Giá
                                                        </th>
                                                        <th class="text-[17px]">
                                                            Số lượng
                                                        </th>
                                                        <th class="text-[17px]">
                                                            Tổng cộng
                                                        </th>
                                                    </tr>
                                                </thead>
                            
                                                <tbody class="tbody-order-detail">
                                                    <?php $totalProduct = 0?>
                                                    @foreach ($order->orderDetails as $item)
                                                    <?php $totalProduct += $item->price * $item->quantity;?>
                                                        <tr class="tr-order-detail">
                                                            <td class="tbody-td-order-detail">
                                                                <div class="product-row">
                                                                    <a href="{{ route('productDetail', $item->product_id) }}"><img alt="" class="product-image"
                                                                        src="{{ $item->product->image }}" /></a>
                                                                    <div class="product-row-body ml-2">
                                                                        <a href="{{ route('productDetail', $item->product_id) }}" class="text-[#222] font-semibold text-[16px">{{ $item->product->name }}</a>
                            
                                                                        <span class="text-[#222] font-semibold">
                                                                            Màu:
                                                                            <span class="pl-1 font-light">
                                                                                {{ $item->color }}
                                                                            </span>
                            
                                                                        </span>
                                                                        <span class="text-[#222] font-semibold">
                                                                            Size:
                                                                            <span class=" pl-1 font-light">
                                                                                {{ $item->size }}
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                {{ number_format($item->price, 0, ',', '.') ?? number_format($item->product->price_old, 0, ',', '.') }} đ
                                                            </td>
                                                            <td>
                                                                {{ $item->quantity }}
                                                            </td>
                                                            <td>
                                                                {{ number_format($item->total, 0, ',', '.') }} đ
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                            
                                        <div class="uk-width-1-3 order-detail-right">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5>Thông tin người nhận</h5>
                                                    <hr>
                                                    <h5 class="card-title-order">{{ $order->name }}</h5>
                                                    <p class="card-text">{{ $order->address }}</p>
                                                    <p class="card-text">{{ $order->phone }}</p>
                            
                                                </div>
                                            </div>
                            
                                            <!-- Thông tin thanh toán -->
                                            <div class="payment-summary">
                                                <div class="summary-item ">
                                                    <span class="label text-[#222] font-semibold">Mã đơn hàng:</span>
                                                    <span class="value text-[#222] font-semibold" id="grand-total">{{ $order->code }}</span>
                                                </div>
                                                <div class="summary-item ">
                                                    <span class="label text-[#222] font-semibold">Tổng cộng:</span>
                                                    <span class="value text-[#222] font-semibold" id="grand-total">{{number_format($totalProduct, 0, ',', '.') }} đ</span>
                                                </div>
                                                <div class="summary-item" id="promo-section">
                                                    <span class="label text-[#222] font-semibold">Tên khuyến mại:</span>
                                                    <span class="value text-[#222] font-semibold">Khuyến mãi </span>
                                                </div>
                                                <div class="summary-item" id="discount-section">
                                                    <span class="label text-[#222] font-semibold">Mức giảm:</span>
                                                    <span class="value text-[#222] font-semibold">20.000</span>
                                                </div>
                                                <div class="summary-item">
                                                    <span class="label text-[#222]">Phí giao hàng:</span>
                                                    <span class="value text-[#222] font-semibold" id="shipping-fee">{{number_format($order->shipping_fee, 0, ',', '.') }} đ</span>
                                                </div>
                                                <hr class="divider">
                                                <div class="summary-item total">
                                                    <span class="label text-[#222] font-bold text-[18px]">Tổng thanh toán:</span>
                                                    <span class="value text-[#222] font-semibold" id="final-total">{{number_format($order->total_price, 0, ',', '.') }} đ</span>
                                                </div>
                                            </div>
                                        </div>
                            
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            
        {{-- voucher --}}
        <div id="discounts-content" class="content-section container mt-4">
            <h3 class="mb-4 text-center text-primary">Danh sách Phiếu Giảm Giá</h3>
            <div class="row justify-content-center">
                @forelse($vouchers as $voucher)
                    <div class="col-md-4 mb-4">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-body text-center">
                                <h5 class="card-title text-uppercase text-success fw-bold">
                                    {{ $voucher->discount_code }}
                                </h5>
                                <p class="card-text text-muted">
                                    Giảm {{ $voucher->discount_type === 'VND' ? number_format($voucher->discount_value, 0, ',', '.') . ' VND' : number_format($voucher->discount_value, 0, ',', '.') . '%' }}
                                </p>
                                <p class="small text-secondary">
                                    Cho đơn từ {{number_format($voucher->min_order_value,0,',','.').'VND'}}
                                </p>
                                <p class="small text-secondary">
                                    Sử dụng trước: {{ \Carbon\Carbon::parse($voucher->end_date)->format('d/m/Y') }}
                                </p>
                                <button class="btn btn-primary btn-sm">
                                    Áp dụng ngay
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="text-danger">Không có phiếu giảm giá nào khả dụng</p>
                    </div>
                @endforelse
            </div>
        </div>
        

        </main>

    </div>



    <!-- Modal Review -->
    @if ($orders->isEmpty())
    @else
        @foreach ($orders as $order)
            <div id="modal-review-{{ $order->id }}" class="uk-flex-top modal-review" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                    <button class="uk-modal-close-default modal-bt" type="button" uk-close></button>

                    <h3 class="uk-modal-title font-bold">Đánh giá đơn hàng</h3>

                    <!-- Hiển thị thông tin đơn hàng -->
                    <div class="uk-margin modal-review-name">
                        <p><strong>Mã đơn hàng:</strong> {{ $order->code }}</p>
                        <p><strong>Người nhận:</strong> {{ $order->name }}</p>
                        <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>
                        <p><strong>Số điện thoại:</strong> {{ $order->phone }}</p>
                    </div>

                    <!-- Form đánh giá cho toàn bộ đơn hàng -->
                    <form id="review-form-{{ $order->id }}" data-order-id="{{ $order->id }}" enctype="multipart/form-data">
                        <div class="uk-margin">
                            <strong for="rating" class="rating-model">Đánh giá:</strong>
                            <div class="flex gap-2 items-center mt-1">
                                <a href="#" class="star" data-value="1"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                <a href="#" class="star" data-value="2"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                <a href="#" class="star" data-value="3"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                <a href="#" class="star" data-value="4"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                <a href="#" class="star" data-value="5"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                            </div>
                            <input type="hidden" name="rating" id="rate-input-{{ $order->id }}">
                        </div>
                        <div class="uk-margin">
                            <strong>Hình ảnh minh họa:</strong>
                            <input type="file" name="image" class="form-control" accept="image/*" required>
                        </div>
                        <div class="uk-margin">
                            <strong for="review-content">Nội dung đánh giá:</strong>
                            <textarea name="content" class="mt-2 block w-full h-32 p-2 input-info" rows="5" placeholder="Viết đánh giá của bạn về đơn hàng..." required></textarea>
                        </div>
                        <button type="submit" class="bt-review">Gửi đánh giá</button>
                    </form>
                    
                </div>
            </div>
        @endforeach
    @endif
</div>

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     showContent('info');
    // });
    document.addEventListener('DOMContentLoaded', function () {
        const params = new URLSearchParams(window.location.search);
        const activeTab = params.get('activeTab') || 'info'; // Mặc định là 'info'

        showContent(activeTab);
        const activeMenuItem = document.querySelector(`.menu li[onclick="showContent('${activeTab}')"]`);
        if (activeMenuItem) {
            document.querySelectorAll('.menu li').forEach(item => item.classList.remove('active'));
            activeMenuItem.classList.add('active');
        }
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

  
</script>
{{-- sử lý send review --}}
<script>
$(document).ready(function() {
    
        // Bắt sự kiện click để lưu giá trị rate
        $('.star').on('click', function (event) {
            event.preventDefault();
            const value = $(this).data('value');
            const orderId = $(this).closest('form').data('order-id');

            // Lưu giá trị đánh giá vào input ẩn
            $('#rate-input-' + orderId).val(value);

            // Đổi màu các sao
            $(this).closest('.flex').find('i').each(function (index) {
                if (index < value) {
                    $(this).removeClass('text-gray-400').addClass('text-yellow-500');
                } else {
                    $(this).removeClass('text-yellow-500').addClass('text-gray-400');
                }
            });
        });

        // Xử lý gửi đánh giá
        $('form[id^="review-form-"]').on('submit', function (event) {
            event.preventDefault();  // Ngăn form gửi theo cách mặc định

            const orderId = $(this).data('order-id');
            const rating = $('#rate-input-' + orderId).val();  
            const content = $(this).find('textarea[name="content"]').val(); 
            const image = $(this).find('input[name="image"]')[0].files[0];  

            // Tạo đối tượng FormData
            const formData = new FormData();
            formData.append('order_id', orderId);
            formData.append('rating', rating);
            formData.append('content', content);
            formData.append('image', image); 
             // Kiểm tra xem file ảnh có được lấy đúng không
            //  for (var pair of formData.entries()) {
            //     console.log(pair[0] + ': ' + pair[1]);
            // }


            $.ajax({
                url: "{{ route('reviews.store') }}", 
                type: 'POST',
                data: formData,
                processData: false, 
                contentType: false,  
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                },
                success: function (data) {
                    if (data.status == 'success') {
                        alert("Send thành công: " + (data.message ? data.message : 'Không có thông điệp'));
                        location.reload(); 
                    } else {
                        alert('Có lỗi xảy ra: ' + data.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText); 
                    alert('Đã xảy ra lỗi, vui lòng thử lại.' + error);
                }
            });
        });



        // update order status hoàn thành
        $(document).on('click', '.complete-btn', function () {
            var orderId = $(this).data('order-id');
            var $button = $(this);
            var $orderItem = $button.closest('tr'); // Sửa lại selector để tìm đúng hàng

            $.ajax({
                url: "{{ route('thongtinOrder.updateOrder', ':id') }}".replace(':id', orderId),
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order_id: orderId
                },
                success: function (response) {
                    if (response.status === 'success') {
                        // Vô hiệu hóa nút và cập nhật trạng thái
                        $button.prop('disabled', true).text('Đã hoàn thành');
                        $orderItem.find('.order-status').html('<span class="uk-text-success">Đã giao hàng</span>');

                        // Cập nhật nút đánh giá
                        var $actionGroup = $orderItem.find('.order-actions');
                        $actionGroup.find('.review-button').remove();

                        if (!response.review_exists) {
                            $actionGroup.append(`
                                <button class="review-button uk-button uk-button-secondary" 
                                        data-uk-toggle="target: #modal-review-${response.order_id}">
                                    Viết đánh giá
                                </button>
                            `);
                        } else {
                            $actionGroup.append(`
                                <button class="review-button uk-button uk-button-default" disabled>
                                    Đã đánh giá
                                </button>
                            `);
                        }

                        // Hiển thị thông báo
                        UIkit.notification({
                            message: 'Cập nhật đơn hàng thành công',
                            status: 'success',
                            pos: 'top-right'
                        });
                    } else {
                        UIkit.notification({
                            message: 'Cập nhật thất bại',
                            status: 'danger',
                            pos: 'top-right'
                        });
                    }
                },
                error: function () {
                    UIkit.notification({
                        message: 'Lỗi hệ thống! Vui lòng thử lại sau.',
                        status: 'danger',
                        pos: 'top-right'
                    });
                }

            });
        });


});
</script>
<script>


// if (typeof window.Echo !== 'undefined') {
//     window.Echo.channel('order-status.' + '$order->id ')
//     .listen('OrderStatusUpdated', (event) => {
//         const status = event.status;
//         const messageDiv = document.getElementById('order-status-message');

//         let statusHtml = '';
//         switch (status) {
//             case 'Hoàn thành':
//                 statusHtml = '<span class="delivered" style="color:green;">Đã giao hàng</span>';
//                 break;
//             case 'Chờ xác nhận':
//                 statusHtml = `
//                     <span class="pending" style="color:orange;">Đang chờ xác nhận</span> 
//                     <button style="color:red" class="cancel-btn" data-order-id="${event.order.id}">Hủy đơn</button>
//                 `;
//                 break;
//             case 'Đã xác nhận':
//                 statusHtml = `
//                     <span class="confirmed" style="color:blue;">Đã xác nhận</span> 
//                     <button style="color:red" class="cancel-btn" data-order-id="${event.order.id}">Hủy đơn</button>
//                 `;
//                 break;
//             case 'Đang giao':
//                 statusHtml = '<span class="shipping" style="color:yellow;">Đang giao hàng</span>';
//                 break;
//             case 'Giao hàng thành công':
//                 statusHtml = `
//                     <span style="color:green;">Vui lòng nhấn hoàn thành để hoàn tất đơn hàng: </span> 
//                     <button style="color:green" class="complete-btn" data-order-id="${event.order.id}">Hoàn thành</button>
//                 `;
//                 break;
//             case 'Giao hàng thất bại':
//                 statusHtml = `
//                     <span class="failed" style="color:red;">Giao hàng thất bại vui lòng liên hệ để được xử lý</span> 
//                     <button style="color:red" class="cancel-btn" data-order-id="${event.order.id}">Hủy đơn</button>
//                 `;
//                 break;
//             case 'Đã hủy':
//                 statusHtml = '<span class="canceled" style="color:gray;">Đã hủy</span>';
//                 break;
//             default:
//                 statusHtml = '<span class="unknown" style="color:lightgray;">Trạng thái không xác định</span>';
//                 break;
//         }

//         messageDiv.innerHTML = statusHtml;

//         // Đính kèm sự kiện click vào nút hủy đơn nếu có
       
//     });
// }else{
//     console.log('ko ton tai');
// }

    console.log(document.querySelectorAll('.cancel-btn'));
    document.body.addEventListener('click',function(event){
       
        if(event.target.classList.contains('cancel-btn')){
            console.log('Đã bấm nút hủy đơn');
            const orderId = event.target.getAttribute('data-order-id');
            console.log('Order ID:', orderId);
            if(confirm('bạn có muốn hủy đơn chứ?')){
                fetch(`api/thongtinOrder/cancel/${orderId}`,{
                    method :'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    body :JSON.stringify({}),
                })
                .then(response=>response.json())
                .then(data=>{
                    alert(data.message);
                    if (data.status === 'success') {
                        location.reload(); // Tải lại trang để cập nhật trạng thái
                    }
           
                })
                .catch(error => console.error('Lỗi:', error));
            }
        }
    });
      

</script>

@endsection