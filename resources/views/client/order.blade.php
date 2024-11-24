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
                            {{-- <h2 class="text-xl font-semibold mb-4">Địa chỉ giao hàng</h2>
                        <p class="text-sm text-gray-600 mb-6">Địa chỉ bạn muốn sử dụng có được hiển thị bên dưới không? Nếu
                            có, hãy nhấp vào nút "Giao hàng đến địa chỉ này" tương ứng. Hoặc bạn có thể nhập địa chỉ giao
                            hàng mới.</p>
                        <div class="space-y-4">
                            <div class="border rounded-lg p-4 flex justify-between items-center">
                                <div>
                                    <h3 class="font-medium">Hiếu</h3>
                                    <p class="text-sm text-gray-600">02072004, Sơn Đà, Ba Vì, Hà Nội</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-500"><i class="fas fa-edit"></i> Sửa</button>
                                    <button class="text-red-500"><i class="fas fa-trash-alt"></i> Xóa</button>
                                    <input type="radio" name="address" class="ml-2">
                                </div>
                            </div>
                            <div class="border rounded-lg p-4 flex justify-between items-center">
                                <div>
                                    <h3 class="font-medium">Hiếu</h3>
                                    <p class="text-sm text-gray-600">02072004, Sơn Đà, Ba Vì, New Zeland</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-500"><i class="fas fa-edit"></i> Sửa</button>
                                    <button class="text-red-500"><i class="fas fa-trash-alt"></i> Xóa</button>
                                    <input type="radio" name="address" class="ml-2">
                                </div>
                            </div>
                        </div>
                        <button class="w-full bg-black text-white py-2 rounded-lg mt-6">Giao Hàng</button>

                        <hr class="my-6"> --}}

                            <h2 class="text-xl font-semibold mb-4">Thông tin khách hàng</h2>

                            <div class="space-y-4">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Họ tên</label>
                                    <input type="text"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black"
                                        placeholder="Nhập Họ và Tên" name="name"
                                        value="{{ Auth::user()->fullname ?? '' }}">

                                    @error('name')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                                    <input type="text"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black"
                                        placeholder="Nhập số điện thoại" name="phone"
                                        value="{{ Auth::user()->phone ?? '' }}">
                                    @error('phone')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Địa chỉ</label>
                                    <input type="text"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black"
                                        placeholder="Nhập địa chỉ" name="address" value="{{ Auth::user()->address ?? '' }}">
                                    @error('address')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- <div>
                                <label class="block text-sm font-medium text-gray-700">Căn hộ, Số nhà, Công ty, Tòa
                                    nhà</label>
                                <input type="text"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Khu vực, Đường, Làng</label>
                                <input type="text"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Thành phố</label>
                                <select
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                                    <option>Select City</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Pin Code</label>
                                <input type="text"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black"
                                    placeholder="Enter Pin Code">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">State</label>
                                <select
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                                    <option>Select State</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-black border-gray-300 rounded">
                                <label class="ml-2 block text-sm text-gray-900">Sử dụng làm địa chỉ mặc định.</label>
                            </div>
                            <button class="w-full bg-black text-white py-2 rounded-lg">Thêm Địa Chỉ </button> --}}
                            </div>

                        </div>

                        <!-- Bước 2: Phương thức thanh toán -->
                        <div class="payments">
                            <fieldset class="uk-fieldset payments-body">
                                <legend class="uk-legend order-title-item">Phương thức thanh toán</legend>

                                <div class="uk-margin payments-card">
                                    <label class="flex items-center mb-2 payments-card-title">
                                        <input type="radio" name="payment_method" class="form-radio text-black"

                                            value="Thanh toán khi nhận hàng" checked>

                                        <span class="ml-2 font-bold order-name">Thanh toán khi nhận hàng</span>
                                    </label>
                                    <div>
                                        <!-- <input class="uk-radio" type="radio" name="payment" checked> Thanh toán qua thẻ -->
                                        <label class="flex items-center mb-2 payments-card-title">
                                            <input type="radio" name="payment_method" value="vnpay"
                                                class="form-radio text-black">
                                            <span class="ml-2 font-bold order-name">Thanh toán qua thẻ</span>
                                        </label>
                                        <div class="mb-4">
                                            <label class="block mb-2 payments-card-label">Card Number</label>
                                            <input type="text"
                                                class="w-full border border-gray-400 p-2 rounded payments-card-input"
                                                value="0988697904">
                                        </div>
                                        <div class="mb-4">
                                            <label class="block mb-2 payments-card-label">Card Name</label>
                                            <input type="text"
                                                class="w-full border border-gray-400 p-2 rounded payments-card-input"
                                                value="Hiếu">
                                        </div>
                                        <div class="uk-grid mb-4" uk-grid>
                                            <div class="uk-width-1-2 ">
                                                <label class="block mb-2 payments-card-label">Expiry Date</label>
                                                <input type="text"
                                                    class="w-full border border-gray-400 p-2 rounded payments-card-input"
                                                    value="02/-7">
                                            </div>
                                            <div class="uk-width-1-2">
                                                <label class="block mb-2 payments-card-label">CVV</label>
                                                <input type="text"
                                                    class="w-full border border-gray-400 p-2 rounded payments-card-input"
                                                    value="02072004">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="uk-button uk-button-primary">Tiếp tục</button>
                            </fieldset>

                        </div>

                        <!-- Bước 3: Xác nhận đơn hàng -->
                        <div class="review">
                            <fieldset class="uk-fieldset review-body">
                                {{-- <legend class="uk-legend order-title-item">Xác thực thanh toán</legend> --}}
                                <p class="order-name mt-5 mb-3">Sản phẩm đã đặt.</p>
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
{{-- 
                                    <div class="shipping-adress mb-4">
                                        <p class="order-name mb-2">
                                            Địa chỉ giao hàng
                                        </p>
                                        <div class="flex items-start">
                                            <div class="flex-1">
                                                <p class="text-gray-800">
                                                    Minh Hiếu
                                                    <br>
                                                    Ba Vì, Sơn Đà, Hà Nội
                                                </p>

                                            </div>
                                            <button class="text-gray-500">
                                                <i class="fas fa-edit">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="payments-review mb-4">
                                        <p class="order-name alo mb-2">
                                            Phương thức thanh toán
                                        </p>
                                        <div class="flex items-start">
                                            <div class="flex-1">
                                                <p class="text-gray-800">
                                                    Thanh toán khi nhận hàng trực tiếp
                                                    <br>
                                                    Thanh toán qua thẻ (0988697904)
                                                </p>
                                            </div>
                                            <button class="text-gray-500">
                                                <i class="fas fa-edit">
                                                </i>
                                            </button>
                                        </div>
                                    </div> --}}
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
@endsection
