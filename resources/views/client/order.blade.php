@extends('client.layouts.master')
@section('title', 'Trang đặt hàng')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
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
                <li><a href="#" class="breadcrumb-a">Giỏ hàng</a></li>
                <li><span aria-current="page" class="text-base">Đặt hàng</span></li>
            </ul>
        </nav>
    </div>

    <section class="uk-container uk-container-large order">
        <h2 class="order-title">Thông tin nhận hàng</h2>
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
                        <h2 class="text-xl font-semibold mb-4">Địa chỉ giao hàng</h2>
                        <p class="text-sm text-gray-600 mb-6">Địa chỉ bạn muốn sử dụng có được hiển thị bên dưới không? Nếu có, hãy nhấp vào nút "Giao hàng đến địa chỉ này" tương ứng. Hoặc bạn có thể nhập địa chỉ giao hàng mới.</p>
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

                        <hr class="my-6">

                        <h2 class="text-xl font-semibold mb-4">Thêm địa chỉ mới</h2>

                        <form class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Họ tên</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black" placeholder="Nhập Họ và Tên">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black" placeholder="Nhập số điện thoại">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Căn hộ, Số nhà, Công ty, Tòa nhà</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Khu vực, Đường, Làng</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Thành phố</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                                    <option>Select City</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Pin Code</label>
                                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black" placeholder="Enter Pin Code">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700">State</label>
                                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-black focus:border-black">
                                    <option>Select State</option>
                                </select>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-black border-gray-300 rounded">
                                <label class="ml-2 block text-sm text-gray-900">Sử dụng làm địa chỉ mặc định.</label>
                            </div>
                            <button class="w-full bg-black text-white py-2 rounded-lg">Thêm Địa Chỉ </button>
                        </form>

                    </div>

                    <!-- Bước 2: Phương thức thanh toán -->
                    <div class="payments">
                        <fieldset class="uk-fieldset payments-body">
                            <legend class="uk-legend order-title-item">Phương thức thanh toán</legend>

                            <div class="uk-margin payments-card">
                                <form action="" method="post">
                                    <!-- <input class="uk-radio" type="radio" name="payment" checked> Thanh toán qua thẻ -->
                                    <label class="flex items-center mb-2 payments-card-title">
                                        <input type="radio" name="payment-method" class="form-radio text-black" checked>
                                        <span class="ml-2 font-bold order-name">Thanh toán qua thẻ</span>
                                    </label>
                                    <div class="mb-4">
                                        <label class="block mb-2 payments-card-label">Card Number</label>
                                        <input type="text" class="w-full border border-gray-400 p-2 rounded payments-card-input" value="0988697904">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 payments-card-label">Card Name</label>
                                        <input type="text" class="w-full border border-gray-400 p-2 rounded payments-card-input" value="Hiếu">
                                    </div>
                                    <div class="uk-grid mb-4" uk-grid>
                                        <div class="uk-width-1-2 ">
                                            <label class="block mb-2 payments-card-label">Expiry Date</label>
                                            <input type="text" class="w-full border border-gray-400 p-2 rounded payments-card-input" value="02/-7">
                                        </div>
                                        <div class="uk-width-1-2">
                                            <label class="block mb-2 payments-card-label">CVV</label>
                                            <input type="text" class="w-full border border-gray-400 p-2 rounded payments-card-input" value="02072004">
                                        </div>
                                    </div>
                                </form>

                                <label class="flex items-center mb-2 payments-card-title">
                                    <input type="radio" name="payment-method" class="form-radio text-black" checked>
                                    <span class="ml-2 font-bold order-name">Thanh toán khi nhận hàng</span>
                                </label>

                            </div>

                            <button type="button" class="uk-button uk-button-primary">Tiếp tục</button>
                        </fieldset>

                    </div>

                    <!-- Bước 3: Xác nhận đơn hàng -->
                    <div class="review">
                        <fieldset class="uk-fieldset review-body">
                            <legend class="uk-legend order-title-item">Xác thực thanh toán</legend>
                            <p class="order-name mt-5 mb-3">Vui lòng kiểm tra lại thông tin đơn hàng của bạn.</p>
                            <div class="uk-list uk-list-divider review-content">
                                <div class="warp">
                                    <a href="#"><img src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" width="120px"></a>
                                    <div class="warp-body">
                                        <a href="#" class="product-name">Giày búp bê da</a>
                                        <div class="price">
                                            <span>Giá: <strong>150$</strong> <del>(100$)</del></span>
                                        </div>
                                        <div class="data-size">
                                            <label>Size: </label>
                                            <span>Trắng / 35</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="warp">
                                    <a href="#"><img src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" width="120px"></a>
                                    <div class="warp-body">
                                        <a href="#" class="product-name">Giày búp bê da</a>
                                        <div class="price">
                                            <span>Giá: <strong>150$</strong> <del>(100$)</del></span>
                                        </div>
                                        <div class="data-size">
                                            <label>Size: </label>
                                            <span>Trắng / 35</span>
                                        </div>
                                    </div>
                                </div>

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
                                </div>
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
                    <button type="submit" class="pay-money" title="Đặt hàng">Đặt hàng</button>
                </div>
            </article>
        </div>
    </section>



</body>

</html>

@endsection
<!-- <div class="uk-margin">
                                    <label>
                                        <input class="uk-radio" type="radio" name="payment"> Ví điện tử
                                    </label>
                                </div>

                                <div class="uk-margin">
                                    <label>
                                        <input class="uk-radio" type="radio" name="payment"> Tiền mặt khi nhận hàng
                                    </label>
                                </div> -->


<!-- 
                                <form>
                            <fieldset class="uk-fieldset">
                                <legend class="uk-legend">Thông tin giao hàng</legend>

                                <div class="uk-margin">
                                    <label>Tên người nhận</label>
                                    <input class="uk-input" type="text" placeholder="Nhập tên người nhận">
                                </div>

                                <div class="uk-margin">
                                    <label>Địa chỉ giao hàng</label>
                                    <input class="uk-input" type="text" placeholder="Nhập địa chỉ">
                                </div>

                                <div class="uk-margin">
                                    <label>Số điện thoại</label>
                                    <input class="uk-input" type="tel" placeholder="Nhập số điện thoại">
                                </div>

                                <button type="button" class="uk-button uk-button-primary">Tiếp tục</button>
                            </fieldset>
                        </form> -->