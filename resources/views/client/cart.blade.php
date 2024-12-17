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
                                            <a href="{{ route('productDetail', $item->product->id) }}"
                                                class="product-name">{{ $item->product->name }}</a>
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
                                                <form data-product-id="{{ $item->id }}" class="form-deleteCart"
                                                    action="{{ route('cart.delete', $item->id) }}" method="post">
                                                    @csrf
                                                    <button class="cart-item-remove btn-removeCart"><i
                                                            class="fa-solid fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="shopping-cart-left-tbody-total">
                                        <div class="total-price-wrapper">
                                            <span class="product-price">{{ number_format($total_price, 0, ',', '.') }}
                                                đ</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <div class="text-[20px] text-[#222] my-10 flex justify-center">
                                Bạn không có sản phẩm nào trong giỏ hàng
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>



            <div class="shopping-cart-right uk-width-1-3">
                <h2 class="">Thông tin đơn hàng</h2>
                <div class="shipping-fee">
                    <span>Phí vận chuyển</span>
                    <span>30.000</span>
                </div>
                <div class="total-right">
                    <span>Tổng tiền</span>
                    <span id="total-price">{{ number_format($total ?? 0, 0, ',', '.') }} đ</span>
                </div>
                <div class="total-action">
                    <a href="{{ route('home') }}" class="continue-shopping" title="Tiếp tục mua hàng">Tiếp tục mua hàng</a>
                    <a href="{{ route('order.create') }}" class="pay-money" title="Thanh toán">Thanh toán</a>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $(document).on('submit', '.form-deleteCart', function(e) {
                e.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'Bạn có muốn xóa sản phẩm này không?',
                    showDenyButton: true,
                    confirmButtonText: 'Xóa',
                    denyButtonText: `Hủy`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });

        $('.quantity-selector-button-minus').on('click', function() {
            var cartId = $(this).data('cart-id');
            var quantityInput = $(this).siblings('.quantity-selector-input');
            var quantity = parseInt(quantityInput.val());

            // Giảm số lượng nếu > 1
            if (quantity > 1) {
                quantity--;
                quantityInput.val(quantity);
                updateQuantity(cartId, quantity);
            }
        });

        $('.quantity-selector-button-plus').on('click', function() {
            var cartId = $(this).data('cart-id');
            var quantityInput = $(this).siblings('.quantity-selector-input');
            var quantity = parseInt(quantityInput.val());

            quantity++; // Tăng số lượng
            quantityInput.val(quantity);
            updateQuantity(cartId, quantity);
        });

        function updateQuantity(cartId, quantity) {
            $.ajax({
                url: '/cart/update-quantity',
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'), // CSRF token
                    cart_id: cartId,
                    quantity: quantity
                },
                success: function(response) {
                    console.log(response);
                    
                    if (response.success) {
                        // Cập nhật giá từng sản phẩm
                        const newProductPrice = response.new_product_price; // Giá tiền mới của sản phẩm
                        const totalCartPrice = response.total_cart_price; // Tổng tiền giỏ hàng mới

                        // Cập nhật giá trị hiển thị của sản phẩm
                        const productPriceElement = $(`[data-cart-id="${cartId}"]`)
                            .closest('tr')
                            .find('.product-price');
                        productPriceElement.text(newProductPrice.toLocaleString('vi-VN') + ' đ');

                        // Cập nhật tổng tiền giỏ hàng
                        $('#total-price').text(totalCartPrice.toLocaleString('vi-VN') + ' đ');
                    } else {
                        alert(response.message || 'Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Lỗi khi cập nhật số lượng:", error);
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                }
            });
        }
    </script>
@endsection