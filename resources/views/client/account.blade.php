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


            <div id="orders-content" class="content-section my-order">
                <!-- Form tìm kiếm đơn hàng -->
                <form action="" class="form-search-my-order">
                    <input type="text" name="keyword" placeholder="Tìm kiếm đơn hàng..." class="input-my-order" />

            
                    <button uk-icon="search" class="icon-search"></button>

                </form>
            
                <!-- Kiểm tra nếu không có đơn hàng -->
                @if ($orders->isEmpty())
                    <span style="color:red">Không có đơn nào</span>
                @else
                    <!-- Hiển thị danh sách đơn hàng -->
                    @foreach ($orders as $order)
                        <div class="order-item">
                            <div class="order-content">
                                <div class="order-content-left"> 
                                    <div class="order-code">Mã đơn hàng: {{$order->code}}</div>
                                </div>
            
                                <div class="order-content-right">
                                    <!-- Nút hành động -->
                                    <div class="order-actions">
                                        <button class="view-order-bt" data-uk-toggle="target: #modal-details-{{ $order->id }}">Xem đơn hàng</button>
                                        
                                        @if ($order->status === 'Hoàn thành')
                                            @if (!$order->review || $order->review->user_id !== $order->user_id)
                                                <!-- Kiểm tra nếu chưa có đánh giá hoặc đánh giá không thuộc user hiện tại -->
                                                <button class="review-button" data-uk-toggle="target: #modal-review-{{ $order->id }}">
                                                    Viết đánh giá
                                                </button>
                                            @else
                                                <!-- Nếu đã có đánh giá -->
                                                <button class="review-button" disabled>
                                                    Đã đánh giá
                                                </button>
                                            @endif
                                        @elseif (in_array($order->status, ['Chờ xác nhận', 'Đã xác nhận', 'Đang giao', 'Giao hàng thất bại']))
                                            <span class="" style="color:red">Bình tĩnh để đánh giá</span>
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
            
                            <!-- Trạng thái đơn hàng -->
                            <div class="order-status">
                              @php
                                $result = match($order->status) {
                                    'Hoàn thành' => '<span class="delivered" style="color:green;">Đã giao hàng</span>',
                                    'Chờ xác nhận' => sprintf(
                                        '<span class="pending" style="color:orange;">Đang chờ xác nhận</span> 
                                        <button style="color:red" class="cancel-btn" data-order-id="%s">Hủy đơn</button>',
                                        $order->id,
                                    ),
                                    'Đã xác nhận' => sprintf(
                                        '<span class="confirmed" style="color:blue;">Đã xác nhận</span> 
                                        <button style="color:red" class="cancel-btn" data-order-id="%s">Hủy đơn</button>',
                                        $order->id,
                                    ),
                                    'Đang giao' => '<span class="shipping" style="color:yellow;">Đang giao hàng</span>',
                                    'Giao hàng thành công' => sprintf(
                                        '<span>Vui lòng nhấn hoàn thành để hoàn tất đơn hàng: </span> 
                                        <button style="color:green" class="complete-btn" data-order-id="%s">Hoàn thành</button>',
                                        $order->id,
                                    ),
                                    'Giao hàng thất bại' => sprintf(
                                        '<span class="failed" style="color:red;">Giao hàng thất bại vui lòng liên hệ để được xử lý</span> 
                                        <button style="color:red" class="cancel-btn" data-order-id="%s">Hủy đơn</button>',
                                        $order->id,
                                    ),
                                    'Đã hủy' => '<span class="canceled" style="color:gray;">Đã hủy</span>',
                                    default => '<span class="unknown" style="color:lightgray;">Trạng thái không xác định</span>',
                                };
                                @endphp

                                
                                {!! $result !!}
                            
                                <div id="order-status-message"></div>
                            </div>
                            
            
                            <!-- Modal Xem thêm chi tiết sản phẩm -->
                            <div id="modal-details-{{ $order->id }}" class="uk-flex-top modal-details" uk-modal>
                                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                                    <button class="uk-modal-close-default modal-bt" type="button" uk-close></button>
                                    
                                    <h3 class="uk-modal-title font-bold">Thông số sản phẩm</h3>
                                    <div class="uk-margin modal-details-info">
                                        @foreach ($order->orderDetails as $orderDetail)
                                            <p><strong>Tên sản phẩm:</strong> {{ $orderDetail->product->name }}</p>
                                            <p><img alt="Product Image" src="{{ $orderDetail->product->image ?? 'default-image.jpg' }}"/></p>
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
                        </div>

                    @endforeach
                @endif
            </div>
              
        {{-- voucher --}}
            <div id="discounts-content" class="content-section">
                <div class="">Phiếu giảm 100% cho khách hàng đặc biệt</div>
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
        $('.complete-btn').click(function () {
            var orderId = $(this).data('order-id');
            var messageDiv = $('#order-status-message');
            var button = $(this);

            $.ajax({
                url: "{{ route('thongtinOrder.updateOrder', ':id') }}".replace(':id', orderId),
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function (data) {
                    if (data.status === 'success') {
                        messageDiv.html(`<span style="color:green;">${data.message}</span>`);
                        button.prop('disabled', true); // Vô hiệu hóa nút sau khi đã cập nhật
                        button.text('Đã hoàn thành'); // Đổi chữ trên nút
                    } else {
                        messageDiv.html(
                            `<span style="color:orange;">Cập nhật không thành công: ${data.message}</span>`
                        );
                    }
                },
                error: function (xhr, status, error) {
                    messageDiv.html(
                        `<span style="color:red;">Có lỗi xảy ra, vui lòng thử lại. Lỗi: ${xhr.responseText}</span>`
                    );
                },
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