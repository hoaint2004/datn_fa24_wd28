@extends('client.layouts.master')
@section('title', 'Trang đặt hàng')
@section('content')
<div class="uk-container uk-container-large breadcrumb mt-10 mb-10">
    <nav aria-label="Breadcrumb alo">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('home') }}" class="breadcrumb-a">Trang chủ</a></li>
            <li><a href="{{ route('showCart') }}" class="breadcrumb-a">Giỏ hàng</a></li>
            <li><span aria-current="page" class="text-base">Đặt hàng</span></li>
        </ul>
    </nav>
</div>
@if($carts->isEmpty())
<!-- <script>
    window.onload = function() {
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Vui lòng thêm sản phẩm vào giỏ hàng để tiếp tục mua hàng',
            showConfirmButton: true
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('home') }}";
            }
        });
    }
</script> -->
@endif
<span>
</span>
<section class="uk-container uk-container-large order mb-4">
    <h2 class="order-title">Thông tin nhận hàng</h2>
    <form action="{{ route('order.store') }}" method="POST" nsubmit="return preventResubmit()">
        @csrf
        <div class="uk-grid order-body" uk-grid>
            <article class="uk-margin-top uk-width-2-3 order-left">

                <ul class="uk-tab custom-tab" uk-tab>

                    <li>
                        <a href="#">
                            <i class="fa-solid fa-house" style="font-size: 30px"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-money-check" style="font-size: 30px"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-solid fa-list" style="font-size: 30px"></i>
                        </a>
                    </li>
                </ul>


                <ul class="order-left-body uk-switcher uk-margin">
                    <div class="address">
                        <p class="order-name">Thông tin khách hàng</p>
                        <div class="space-y-4">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="!mb-7">
                                <label class="block text-[14px] font-semibold  text-[#222] ">Họ tên</label>
                                <input type="text"
                                    class="mt-1 block w-full p-2 input-info !bg-white"
                                    placeholder="Nhập Họ và Tên" name="name"
                                    value="{{ Auth::user()->fullname ?? '' }}">

                                @error('name')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="!mb-7">
                                <label class="block text-[14px] font-semibold  text-[#222] ">Số điện thoại</label>
                                <input type="text"
                                    class="mt-1 block w-full p-2 input-info !bg-white"
                                    placeholder="Nhập số điện thoại" name="phone"
                                    value="{{ Auth::user()->phone ?? '' }}">
                                @error('phone')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="!mb-7">
                                <label class="block text-[14px] font-semibold  text-[#222] ">Địa chỉ</label>
                                <input type="text"
                                    class="mt-1 block w-full p-2 input-info !bg-white"
                                    placeholder="Nhập địa chỉ" name="address" value="{{ Auth::user()->address ?? '' }}">
                                @error('address')
                                <span style="color: red">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <button type="button" id="nextTab" class="uk-button uk-button-primary text-[12px] ">Tiếp tục</button>

                    </div>

                    <!-- Bước 2: Phương thức thanh toán -->

                    <div class="payments">
                        <fieldset class="uk-fieldset payments-body">
                            <p class="order-name">Phương thức thanh toán</p>

                            <div class="uk-margin payments-card">
                                <label class="flex items-center mb-2 payments-card-title">
                                    <input type="radio" name="payment_method" class="form-radio text-black"

                                        value="Thanh toán khi nhận hàng" checked>

                                    <span class="ml-2 text-[14px] font-semibold text-[#222]">Thanh toán khi nhận hàng</span>
                                </label>

                                <label class="flex items-center mb-2 payments-card-title">
                                    <input type="radio" name="payment_method" class="form-radio text-black"

                                        value="Thanh toán khi nhận hàng">
                                    <button type="button" class="bt-vnpay-order !ml-2 !text-[14px] !font-semibold !text-[#222]" onclick="submitVNPay()">Thanh toán VNPay</button>

                                </label>

                                <button type="button" id="nextTab2" class="uk-button uk-button-primary mt-5 text-[12px]">Tiếp tục</button>
                            </div>


                        </fieldset>
                    </div>


                    <!-- Bước 3: Xác nhận đơn hàng -->
                    <div class="review">
                        <fieldset class="uk-fieldset review-body">
                            {{-- <legend class="uk-legend order-title-item">Xác thực thanh toán</legend> --}}
                            <p class="order-name">Sản phẩm đã đặt</p>
                            <div class="uk-list uk-list-divider review-content">
                                @foreach ($carts as $item)
                                <div class="warp">
                                    <a href="{{ route('productDetail', $item->product_id) }}">
                                        <img
                                            src="{{ asset($item->product->image) }}" alt=""
                                            class="!h-[110px] !w-[110px] !max-w-[1110px] !max-h-[1110px]" style="object-fit: cover;"></a>
                                    <div class="warp-body">
                                        <a href="{{ route('productDetail', $item->product_id) }}"
                                            class="product-name">{{ $item->product->name }}</a>
                                        <div class="price">
                                            <span>Giá:
                                                <strong>{{ number_format($item->product->price ?? 0, 0, ',', '.') }}
                                                    đ</strong>
                                                <del>({{ number_format($item->product->price_old ?? 0, 0, ',', '.') }})
                                                    đ</del></span>
                                        </div>
                                        <div class="data-size">
                                            <label>Size: </label>
                                            <span>{{ $item->variant->color }} / {{ $item->variant->size }}</span>
                                        </div>
                                        <div class="data-size">
                                            <label>Số lượng:</label>
                                            <span> {{ $item->quantity }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </fieldset>
                    </div>
                </ul>
            </article>

            <article class="shopping-cart-right uk-width-1-3">
                <h2 class="">Đơn hàng</h2>

                <div class="discount-code">
                    <span class="code block text-base font-semibold text-[#222] pb-3">Mã giảm giá</span>
                    <div class="form-voucher">
                        <input class="shopping-cart-right-input block w-full p-1 input-info" type="text" id="discount_code" autocomplete="off" placeholder="Nhập mã giảm giá">
                        <button type="button" id="apply-discount" class="shopping-cart-right-button" onclick="validateDiscount()">
                            <span class="shopping-cart-right-text">Apply</span>
                        </button>
                        <button type="button" id="change-discount" class="shopping-cart-right-button" onclick="changeDiscount()" style="display: none;">
                            <span class="shopping-cart-right-text"> Mã khác</span>
                        </button>

                    </div>
                </div>


                <div class="total-right">
                    <span>Tổng sản phẩm</span>
                    <span>{{ $subTotal }} đ</span>
                </div>
                <div class="shipping-fee">
                    <span>Phí vẩn chuyển</span>
                    <span>{{ $shipping }} đ</span>
                    <input type="hidden" name="shipping_fee" value="{{ $shipping }}" id="">
                </div>

                <div class="discount-amount hidden mt-4">
                    <div class="shipping-fee">
                        <span class="text-[15px] text-[#222]">Phiếu giảm giá</span>
                        <span id="discount-value" class="text-[15px] text-[red]">- 0 đ</span>
                    </div>
                </div>

                <div class="total-right total-voucher">
                    <span class="!text-[18px] font-semibold text-[#222]">Tổng tiền</span>
                    <span class="!text-[18px] font-semibold text-[#222]">{{ $total }} đ</span>
                    <input type="hidden" name="total_price" value="{{ $total }}" id="">
                </div>
                <div class="total-action">
                    <input type="hidden" name="voucher_use" id="voucher_use" value="">
                    <button type="submit" class="pay-money" title="Đặt hàng">Đặt hàng</button>
                </div>
            </article>
        </div>
    </form>
</section>

<!-- <div id="id-vnpay" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-card uk-card-default">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-card-title font-bold">Thanh toán qua VNPay</h2>

       
        <form action="{{ route('vnpay_payment') }}" method="POST" id="vnpay-form">
            @csrf
            <div class="uk-margin">
                <label class="block text-[14px] font-semibold  text-[#222] ">Họ và tên</label>
                <div class="uk-form-controls">
                    <input class="mt-1 block w-full p-2 input-info !bg-white"
                        placeholder="Nhập Họ và Tên" name="name" value="{{ Auth::user()->fullname }}" required>
                </div>
            </div>

            <div class="uk-margin">
                <label class="block text-[14px] font-semibold  text-[#222]">Số điện thoại</label>
                <div class="uk-form-controls">
                    <input class="mt-1 block w-full p-2 input-info !bg-white"
                        placeholder="Nhập số điện thoại" name="phone" value="{{ Auth::user()->phone }}" required>
                </div>
            </div>

            <div class="uk-margin">
                <label class="block text-[14px] font-semibold  text-[#222]">Địa chỉ giao hàng</label>
                <div class="uk-form-controls">
                    <input class="mt-1 block w-full p-2 input-info !bg-white"
                        placeholder="Nhập địa chỉ" name="address" required>
                </div>
            </div>

            <div class="uk-margin">
                <label class="block text-[14px] font-semibold text-[#222]">Thông tin đơn hàng</label>
                <div class="uk-grid !mt-0 pb-3">
                    <div class="uk-width-expand block text-[14px] text-[#333]">Tổng sản phẩm:</div>
                    <div class="uk-width-auto">{{ number_format($subTotal - $shipping) }}đ</div>
                    <input type="hidden" name="subtotal" value="{{ $subTotal - $shipping }}">
                </div>
                <div class="uk-grid !mt-0 pb-3">
                    <div class="uk-width-expand block text-[14px] text-[#333]">Phí vận chuyển:</div>
                    <div class="uk-width-auto">{{ number_format($shipping) }}đ</div>
                    <input type="hidden" name="shipping_fee" value="{{ $shipping }}">
                </div>
                <div class="uk-grid !mt-0 pb-3">
                    <div class="uk-width-expand block text-[14px] font-semibold text-[#222]">Tổng thanh toán:</div>
                    <div class="uk-width-auto"><strong>{{ number_format($total) }}đ</strong></div>
                    <input type="hidden" name="total" value="{{ $total }}">
                </div>
            </div>

            <input type="hidden" name="total" value="{{ $total }}">

            <button type="submit" class="uk-button uk-width-1-1 bt-vnpay">
                Thanh toán
            </button>
        </form>
    </div>
</div> -->

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabList = UIkit.tab(document.querySelector('.uk-tab'));
        var tabItems = document.querySelectorAll('.uk-tab li');

        // First tab "Tiếp tục" button
        document.getElementById('nextTab').addEventListener('click', function() {
            tabItems[0].classList.add('tab-completed');
            tabList.show(1);
        });

        // Second tab "Tiếp tục" button
        document.getElementById('nextTab2').addEventListener('click', function() {
            tabItems[1].classList.add('tab-completed');
            tabList.show(2);
        });
    });

    // $('#vnpay-form').submit(function(e) {
    //     e.preventDefault();

    //     $.ajax({
    //         url: $(this).attr('action'),
    //         method: 'POST',
    //         data: $(this).serialize(),
    //         success: function(response) {
    //             if (response.status === 'error') {
    //                 Swal.fire({
    //                     position: 'center',
    //                     icon: 'warning',
    //                     title: response.message,
    //                     showConfirmButton: true
    //                 });
    //             } else {
    //                 window.location.href = response;
    //             }
    //         }
    //     });
    // });

    function submitVNPay() {
        // Kiểm tra các trường bắt buộc
        const name = document.querySelector('input[name="name"]').value;
        const phone = document.querySelector('input[name="phone"]').value;
        const address = document.querySelector('input[name="address"]').value;

        if (!name || !phone || !address) {
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Vui lòng điền đầy đủ thông tin giao hàng',
                showConfirmButton: true
            });
            return;
        }

        const orderData = {
            name: name,
            phone: phone,
            address: address,
            total: document.querySelector('input[name="total_price"]').value,
            shipping_fee: document.querySelector('input[name="shipping_fee"]').value,
            voucher_use: document.querySelector('input[name="voucher_use"]').value
        };

        fetch('{{ route("vnpay_payment") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.text())
            .then(url => window.location.href = url);
    }

    function validateDiscount() {
        const code = document.getElementById('discount_code').value;
        const subtotal = parseInt('{{ $subTotal }}'.replace(/[^0-9]/g, ''));
        const shipping = parseInt('{{ $shipping }}'.replace(/[^0-9]/g, ''));

        fetch('{{ route("validate.discount") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    discount_code: code,
                    total: subtotal,
                    shipping_fee: shipping
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Hiển thị số tiền giảm giá
                    document.querySelector('.discount-amount').classList.remove('hidden');
                    document.getElementById('discount-value').textContent = data.discount.toLocaleString() + ' đ';

                    // Cập nhật tổng tiền cuối
                    const totalVoucherSpan = document.querySelector('.total-voucher span:nth-child(2)');
                    if (totalVoucherSpan) {
                        totalVoucherSpan.textContent = data.final_total.toLocaleString() + ' đ';
                    }

                    // Cập nhật input hidden
                    document.getElementById('voucher_use').value = data.discount_id;
                    document.querySelector('input[name="total_price"]').value = data.final_total;

                    // Vô hiệu hóa input và đổi nút
                    document.getElementById('discount_code').disabled = true;
                    document.getElementById('apply-discount').style.display = 'none';
                    document.getElementById('change-discount').style.display = 'inline-block';

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Áp mã giảm giá thành công',
                        showConfirmButton: false,
                        timer: 2000
                    });
                } else {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: data.message,
                        showConfirmButton: true
                    });
                }
            });
    }

    function changeDiscount() {
        // Reset input mã giảm giá
        document.getElementById('discount_code').value = '';
        document.getElementById('discount_code').disabled = false;

        // Đổi trạng thái các nút
        document.getElementById('apply-discount').style.display = 'inline-block';
        document.getElementById('change-discount').style.display = 'none';

        // Ẩn phần giảm giá
        document.querySelector('.discount-amount').classList.add('hidden');

        // Khôi phục tổng tiền ban đầu
        const subtotal = parseInt('{{ $subTotal }}'.replace(/[^0-9]/g, ''));
        const shipping = parseInt('{{ $shipping }}'.replace(/[^0-9]/g, ''));
        const total = subtotal + shipping;

        const totalVoucherSpan = document.querySelector('.total-voucher span:nth-child(2)');
        if (totalVoucherSpan) {
            totalVoucherSpan.textContent = total.toLocaleString() + ' đ';
        }

        // Cập nhật input hidden
        document.querySelector('input[name="total_price"]').value = total;
        document.getElementById('voucher_use').value = '';
    }


    function changeDiscount() {
        // Reset input mã giảm giá
        document.getElementById('discount_code').value = '';
        document.getElementById('discount_code').disabled = false;

        // Đổi trạng thái các nút
        document.getElementById('apply-discount').style.display = 'inline-block';
        document.getElementById('change-discount').style.display = 'none';

        // Ẩn phần giảm giá
        document.querySelector('.discount-amount').classList.add('hidden');

        // Khôi phục tổng tiền ban đầu
        const subtotal = parseInt('{{ $subTotal }}'.replace(/[^0-9]/g, ''));
        const shipping = parseInt('{{ $shipping }}'.replace(/[^0-9]/g, ''));
        const total = subtotal + shipping;

        // Cập nhật lại các giá trị hiển thị
        const totalProductElement = document.querySelector('.total-right:not(.total-voucher) span:last-child');
        if (totalProductElement) {
            totalProductElement.textContent = subtotal.toLocaleString() + ' đ';
        }

        const totalVoucherSpan = document.querySelector('.total-voucher span:nth-child(2)');
        if (totalVoucherSpan) {
            totalVoucherSpan.textContent = total.toLocaleString() + ' đ';
        }

        // Cập nhật input hidden
        const totalInput = document.querySelector('.total-voucher input[name="total_price"]');
        if (totalInput) {
            totalInput.value = total;
        }
    }

    function preventResubmit() {
        setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 1000);
        return true;
    }
</script>