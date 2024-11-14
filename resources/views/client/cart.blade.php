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
                        <tr>
                            <td class="shopping-cart-left-tbody-image">
                                <a href="#"><img src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" width="120px"></a>
                            </td>

                            <td class="shopping-cart-left-tbody-product">
                                <div class="warp">
                                    <a href="#" class="product-name" >Giày búp bê da</a>
                                    <div class="price">
                                        <span>Giá: <strong>150$</strong> <del>(100$)</del></span> 
                                    </div>
                                    <div class="data-size">
									    <label>Size: </label>  
									    <span>Trắng / 35</span>
								    </div>
                                    <div class="data">
                                        <div class="data-description">
                                            <p>Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve… </p>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-selector">
                                            <button aria-label="Giảm số lượng" class="quantity-selector-button-minus" >-</button>
                                            <input class="quantity-selector-input" type="number" step="1" min="1" max="9999" aria-label="Số lượng sản phẩm" value="1" readonly="">
                                            <button aria-label="Tăng số lượng" class="quantity-selector-button-plus">+</button>
                                        </div>
                                        <button class="cart-item-remove"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </td>

                            <td class="shopping-cart-left-tbody-total">
                                <div class="total-price-wrapper">
                                    <span class="product-price">
                                        $150.00
                                    </span>
                                </div>
                                </td>
                        </tr>

                        <tr>
                            <td class="shopping-cart-left-tbody-image">
                                <a href="#"><img src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" width="120px"></a>
                            </td>

                            <td class="shopping-cart-left-tbody-product">
                                <div class="warp">
                                    <a href="#" class="product-name" >Giày búp bê da</a>
                                    <div class="price">
                                        <span>Giá: <strong>150$</strong> <del>(100$)</del></span> 
                                    </div>
                                    <div class="data-size">
									    <label>Size: </label>  
									    <span>Trắng / 35</span>
								    </div>
                                    <div class="data">
                                        <div class="data-description">
                                            <p>Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve… </p>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-selector">
                                            <button aria-label="Giảm số lượng" class="quantity-selector-button-minus" >-</button>
                                            <input class="quantity-selector-input" type="number" step="1" min="1" max="9999" aria-label="Số lượng sản phẩm" value="1" readonly="">
                                            <button aria-label="Tăng số lượng" class="quantity-selector-button-plus">+</button>
                                        </div>
                                        <button class="cart-item-remove"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </td>

                            <td class="shopping-cart-left-tbody-total">
                                <div class="total-price-wrapper">
                                    <span class="product-price">
                                        $150.00
                                    </span>
                                </div>
                                </td>
                        </tr>

                        <tr>
                            <td class="shopping-cart-left-tbody-image">
                                <a href="#"><img src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" width="120px"></a>
                            </td>

                            <td class="shopping-cart-left-tbody-product">
                                <div class="warp">
                                    <a href="#" class="product-name" >Giày búp bê da</a>
                                    <div class="price">
                                        <span>Giá: <strong>150$</strong> <del>(100$)</del></span> 
                                    </div>
                                    <div class="data-size">
									    <label>Size: </label>  
									    <span>Trắng / 35</span>
								    </div>
                                    <div class="data">
                                        <div class="data-description">
                                            <p>Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve…  Presta valves are typically found on performance road and mountain bikes. They have built-in valve… </p>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-selector">
                                            <button aria-label="Giảm số lượng" class="quantity-selector-button-minus" >-</button>
                                            <input class="quantity-selector-input" type="number" step="1" min="1" max="9999" aria-label="Số lượng sản phẩm" value="1" readonly="">
                                            <button aria-label="Tăng số lượng" class="quantity-selector-button-plus">+</button>
                                        </div>
                                        <button class="cart-item-remove"><i class="fa-solid fa-trash-can"></i></button>
                                    </div>
                                </div>
                            </td>

                            <td class="shopping-cart-left-tbody-total">
                                <div class="total-price-wrapper">
                                    <span class="product-price">
                                        $150.00
                                    </span>
                                </div>
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="shopping-cart-right uk-width-1-3">
                <h2 class="">Thông tin đơn hàng</h2>
                <div class="discount-code">
                    <span class="code">Mã giảm giá</span>
                    <form action="">
                        <input class="shopping-cart-right-input" type="text" autocapitalize="off" autocomplete="off" aria-label="Mã giảm giá" title="" value="" placeholder="Nhập mã giảm giá">
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
                    <span>$10000</span>
                </div>
                <div class="total-action">
					<a href="#" class="continue-shopping" title="Tiếp tục mua hàng">Tiếp tục mua hàng</a>
					<a href="#" class="pay-money" title="Thanh toán">Thanh toán</a>
				</div>
            </div>
        </div>
    </section>

</body>

</html>