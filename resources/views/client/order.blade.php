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
    <span>
        {{session('error')}}
    </span>
    <section class="uk-container uk-container-large order mb-4">
        <h2 class="order-title">Thông tin nhận hàng</h2>
        <form action="{{ route('order.store') }}" method="POST">
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
                            <button type="button" id="nextTab" class="uk-button uk-button-primary ">Tiếp tục</button>

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

                                            value="Thanh toán khi nhận hàng" checked>

                                        <div class="ml-2 text-[14px] font-semibold text-[#222]" uk-toggle="target: #id-vnpay">
                                            Thanh toán bằng VNPay
                                        </div>
                                        <!-- <a href="{{ route('vnpay_payment') }}" class="flex items-center mb-2 payments-card-title">
                                            <span class="ml-2 text-[14px] font-semibold text-[#222]">Thanh toán bằng VNPay</span>
                                        </a> -->
                                    </label>

                                    <button type="button" id="nextTab2" class="uk-button uk-button-primary mt-5">Tiếp tục</button>
                                </div>


                            </fieldset>
                        </div>


                        <!-- Bước 3: Xác nhận đơn hàng -->
                        <div class="review">
                            <fieldset class="uk-fieldset review-body">
                                {{-- <legend class="uk-legend order-title-item">Xác thực thanh toán</legend> --}}
                                <p class="order-name">Sản phẩm đã đặt.</p>
                                <div class="uk-list uk-list-divider review-content">
                                    @foreach ($carts as $item)
                                        <div class="warp">
                                            <a href="{{ route('productDetail', $item->product_id) }}"><img
                                                    src="{{ asset($item->product->image) }}" alt=""
                                                    width="120px"></a>
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
                                                    <span>{{ $item->variant->color }} / {{ $item->variant->size }}.</span>
                                                    <span>Số lượng: {{ $item->quantity }}</span>
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
                        <span class="code">Mã giảm giá</span>
                        <form action="">
                            <input class="shopping-cart-right-input" type="text" autocapitalize="off"
                                autocomplete="off" aria-label="Mã giảm giá" title="" value=""
                                placeholder="Nhập mã giảm giá">
                            <button type="submit" class="shopping-cart-right-button">
                                <span class="shopping-cart-right-text">Apply</span>
                            </button>
                        </form>
                    </div>
                    <div class="total-right">
                        <span>Tổng phụ</span>
                        <span>{{ $subTotal }} đ</span>
                    </div>
                    <div class="shipping-fee">
                        <span>Phí vẩn chuyển</span>
                        <span>{{ $shipping }} đ</span>
                        <input type="hidden" name="shipping_fee" value="{{ $shipping }}" id="">
                    </div>
                    <div class="total-right">
                        <span>Tổng tiền</span>
                        <span>{{ $total }} đ</span>
                        <input type="hidden" name="total_price" value="{{ $total }}" id="">
                    </div>
                    <div class="total-action">
                        <button type="submit" class="pay-money" title="Đặt hàng">Đặt hàng</button>
                    </div>
                </article>
            </div>
        </form>
    </section>

    <div id="id-vnpay" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-card uk-card-default">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h2 class="uk-card-title font-bold">Thanh toán qua VNPay</h2>
    
            <!-- Form thanh toán -->
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
                    <span class="block text-[18px] font-semibold  text-[#222] mb-5">Thông tin đơn hàng</span>
                    <div class="uk-grid !mt-0 pb-3">
                        <div class="uk-width-expand block text-[14px] font-semibold  text-[#222]">Tổng phụ:</div>
                        <div class="uk-width-auto">{{ number_format($total - $shipping) }}đ</div>
                    </div>
                    <div class="uk-grid !mt-0 pb-3">
                        <div class="uk-width-expand block text-[14px] font-semibold  text-[#222]">Phí vận chuyển:</div>
                        <div class="uk-width-auto">{{ number_format($shipping) }}đ</div>
                    </div>
                    <div class="uk-grid !mt-0 pb-3">
                        <div class="uk-width-expand block text-[14px] font-semibold  text-[#222]"><strong>Tổng thanh toán:</strong></div>
                        <div class="uk-width-auto"><strong>{{ number_format($total) }}đ</strong></div>
                    </div>
                </div>
    
                <input type="hidden" name="total" value="{{ $total }}">
    
                <button type="submit" class="uk-button uk-width-1-1 bt-vnpay">
                    Thanh toán
                </button>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabList = UIkit.tab(document.querySelector('.uk-tab'));
    
            // First tab "Tiếp tục" button
            document.getElementById('nextTab').addEventListener('click', function() {
                tabList.show(1);
            });
    
            // Second tab "Tiếp tục" button
            document.getElementById('nextTab2').addEventListener('click', function() {
                tabList.show(2);
            });
        });
    </script>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tabList = UIkit.tab(document.querySelector('.uk-tab'));

        // First tab "Tiếp tục" button
        document.getElementById('nextTab').addEventListener('click', function() {
            tabList.show(1);
        });

        // Second tab "Tiếp tục" button
        document.getElementById('nextTab2').addEventListener('click', function() {
            tabList.show(2);
        });
    });
</script>
