@extends('client.layouts.master')
@section('title', 'Chi tiết đơn hàng')
@section('content')
<div class="uk-container uk-container-large breadcrumb mt-10 mb-10">
    <nav aria-label="Breadcrumb alo">
        <ul class="uk-breadcrumb">
            <li><a href="{{ route('home') }}" class="breadcrumb-a">Trang chủ</a></li>
            <li><a href="{{ route('showCart') }}" class="breadcrumb-a">Đơn hàng của tôi</a></li>
            <li><span aria-current="page" class="text-base">Chi tiết đơn hàng</span></li>
        </ul>
    </nav>
</div>

    <div class="uk-container uk-container-large"  style="padding: 0 0 54px 0px; margin-bottom: 120px;">

        <div class="status-order">
            <div class="status-body">
                <h4>{{ $order->status }}</h4>
                <span>Thanh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>
        </div>

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
                            <th class="text-[17px]">
                                Thao tác
                            </th>
                        </tr>
                    </thead>

                    <tbody class="tbody-order-detail">
                        @foreach ($order->orderDetails as $item)
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
                                <td>
                                    <button class="review-button" data-uk-toggle="target: #modal-review-1">
                                        Viết đánh giá
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="uk-width-1-3 order-detail-right">
                <div class="card">
                    <div class="card-body">
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
                        <textarea id="review-content" class=" mt-2 block w-full h-32 p-2 input-info" rows="5"
                            placeholder="Viết đánh giá của bạn về sản phẩm..."></textarea>
                    </div>


                    <button type="submit" class="bt-review">Gửi đánh giá</button>
                </form>
            </div>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> fb13817d6b0caba2ec0e5cd84c09ec5e84b4c929
