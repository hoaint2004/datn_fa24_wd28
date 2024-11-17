<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="uk-container uk-container-large breadcrumb mt-10 mb-10">
        <nav aria-label="Breadcrumb alo">
            <ul class="uk-breadcrumb">
                <li><a href="#" class="breadcrumb-a">Trang chủ</a></li>
                <li><a href="#" class="breadcrumb-a">Category</a></li>
                <li><span aria-current="page" class="text-base">Giỏ Hàng</span></li>
            </ul>
        </nav>
    </div>

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
                            <div class="d-flex justify-content-center align-items-center p-5">
                                Chưa có sản phẩm
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="shopping-cart-right uk-width-1-3">
                <h2 class="">Thông tin đơn hàng</h2>
                <div class="shipping-fee">
                    <span>Phí vận chuyển</span>
                    <span>$200</span>
                </div>
                <div class="total-right">
                    <span>Tổng tiền</span>
                    <span id="total-price">{{ number_format($total ?? 0, 0, ',', '.') }} đ</span>
                </div>
            </div>
        </div>
    </section>

</body>

</html>