@extends('Client.layouts.master')

@section('title')
    Sneakers - Thế Giới Giày
@endsection

@section('content')
    @include('client.components.breadcrumb', [
        'title' => 'Giỏ Hàng',
    ])

    <section class="shopping-cart uk-container uk-container-large">
        <h1 class="cart-title">Giỏ Hàng Của Bạn</h1>
        <div class="cart-body uk-grid" uk-grid>
            <div class="shopping-cart-left uk-width-2-3">
                <table>
                    <thead>
                        <tr>
                            <th><span class="pr-10 text-[#333] text-xl font-normal">Sản phẩm</span></th>
                            <th class="invisible">Details</th>
                            <th class="text-[#333] text-xl font-normal">Tổng tiền</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if ($data['carts']->isNotEmpty())
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($data['carts'] as $item)
                                @php
                                    $total_price = $item->product->price * $item->quantity;
                                    $total += $total_price;
                                @endphp
                                <tr>
                                    <td class="shopping-cart-left-tbody-image">
                                        <a href="{{ route('productDetail', $item->product->id) }}">
                                            <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}"
                                                width="120px">
                                        </a>
                                    </td>

                                    <td class="shopping-cart-left-tbody-product">
                                        <div class="warp">
                                            <a href="#" class="product-name">{{ $item->product->name }}</a>
                                            <div class="price">
                                                <span>Giá: <strong>{{ number_format($item->product->price, 0, ',', '.') }}
                                                        đ</strong>
                                                    @if (!empty($item->product->price_old))
                                                        <del>({{ number_format($item->product->price_old, 0, ',', '.') }}
                                                            đ)</del>
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="data-size">
                                                <label>Size: </label>
                                                <span>{{ $item->color }} / {{ $item->size }}</span>
                                            </div>
                                            <div class="quantity">
                                                <div class="quantity-selector">
                                                    <button class="quantity-selector-button-minus"
                                                        data-cart-id="{{ $item->id }}">-</button>
                                                    <input class="quantity-selector-input" type="number" step="1"
                                                        min="1" max="9999" value="{{ $item->quantity }}"
                                                        data-cart-id="{{ $item->id }}">
                                                    <button class="quantity-selector-button-plus"
                                                        data-cart-id="{{ $item->id }}">+</button>
                                                </div>
                                                <button class="cart-item-remove"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="shopping-cart-left-tbody-total">
                                        <div class="total-price-wrapper">
                                            <span
                                                class="product-price">{{ number_format($total_price, 0, ',', '.') }}
                                                đ</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="d-flex justify-content-center align-items-center p-5">
                                Chưa có sản phẩm
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="shopping-cart-right uk-width-1-3">
                <h2 class="">Thông tin đơn hàng</h2>
                <div class="discount-code">
                    <span class="code">Mã giảm giá</span>
                    <form action="">
                        <input class="shopping-cart-right-input" type="text" autocapitalize="off" autocomplete="off"
                            aria-label="Mã giảm giá" title="" value="" placeholder="Nhập mã giảm giá">
                        <button type="submit" class="shopping-cart-right-button">
                            <span class="shopping-cart-right-text">Apply</span>
                        </button>
                    </form>
                </div>
                <div class="shipping-fee">
                    <span>Phí vẩn chuyển</span>
                    <span>$200</span>
                </div>
                <div class="total-right">
                    <span>Tổng tiền</span>
                    <span>{{ number_format($total ?? 0, 0, ',', '.') }} đ</span>
                </div>
                <div class="total-action">
                    <a href="#" class="continue-shopping" title="Tiếp tục mua hàng">Tiếp tục mua hàng</a>
                    <a href="#" class="pay-money" title="Thanh toán">Thanh toán</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        // Thực hiện khi nhấn nút giảm số lượng
        $('.quantity-selector-button-minus').on('click', function() {
            var cartId = $(this).data('cart-id'); // Lấy ID sản phẩm trong giỏ hàng
            var quantityInput = $(this).siblings('.quantity-selector-input'); // Tìm input số lượng
            var quantity = parseInt(quantityInput.val()); // Lấy giá trị số lượng hiện tại

            // Giảm số lượng nếu > 1
            if (quantity > 1) {
                quantity--;
                quantityInput.val(quantity); // Cập nhật lại giá trị input
                updateQuantity(cartId, quantity); // Gửi yêu cầu AJAX để cập nhật số lượng
            }
        });

        // Thực hiện khi nhấn nút tăng số lượng
        $('.quantity-selector-button-plus').on('click', function() {
            var cartId = $(this).data('cart-id'); // Lấy ID sản phẩm trong giỏ hàng
            var quantityInput = $(this).siblings('.quantity-selector-input'); // Tìm input số lượng
            var quantity = parseInt(quantityInput.val()); // Lấy giá trị số lượng hiện tại

            quantity++; // Tăng số lượng
            quantityInput.val(quantity); // Cập nhật lại giá trị input
            updateQuantity(cartId, quantity); // Gửi yêu cầu AJAX để cập nhật số lượng
        });

        // Hàm gửi AJAX để cập nhật số lượng sản phẩm trong giỏ hàng
        function updateQuantity(cartId, quantity) {
            $.ajax({
                url: '/cart/update-quantity', // Địa chỉ route API hoặc controller update số lượng
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    cart_id: cartId,
                    quantity: quantity
                },
                error: function(xhr, status, error) {
                    console.error("Lỗi khi cập nhật số lượng:", error);
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            });
        }
    </script>
@endsection
