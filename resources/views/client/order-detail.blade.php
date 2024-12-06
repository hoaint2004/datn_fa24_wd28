<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> detail</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])

</head>

<body>

    <div class="uk-container uk-container-large" style="padding: 54px 0px; margin-bottom: 120px;">

        <div class="status-order">
            <div class="status-body">
                <h4>Chờ xác nhận</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Đã xác nhận</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Đang giao</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Giao hàng thành công</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Giao hàng thất bại</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Đã hủy</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
            </div>

            <div class="status-body">
                <h4>Hoàn thành</h4>
                <span>Thnh toán bằng hình thức thanh toán khi nhận hàng. Chúng tôi sẽ sớm đóng gói hàng của bạn!</span>
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

                        <tr class="tr-order-detail">
                            <td class="tbody-td-order-detail">
                                <div class="product-row">
                                    <img alt="" class="product-image" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" />
                                    <div class="product-row-body ml-2">
                                        <span class="text-[#222] font-semibold text-[16px">Áo thun cotton trắng</span>

                                        <span class="text-[#222] font-semibold">
                                            Color:
                                            <span class="pl-1 font-light">
                                                red
                                            </span>

                                        </span>
                                        <span class="text-[#222] font-semibold">
                                            Size:
                                            <span class=" pl-1 font-light">
                                                42
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                500.0 VNĐ
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                1500.0 VNĐ
                            </td>
                            <td>
                                <button class="review-button" data-uk-toggle="target: #modal-review-1">
                                    Viết đánh giá
                                </button>
                            </td>
                        </tr>

                        <tr class="tr-order-detail">
                            <td class="tbody-td-order-detail">
                                <div class="product-row">
                                    <img alt="" class="product-image" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" />
                                    <div class="product-row-body ml-2">
                                        <span class="text-[#222] font-semibold text-[16px">Áo thun cotton trắng</span>

                                        <span class="text-[#222] font-semibold">
                                            Color:
                                            <span class="pl-1 font-light">
                                                red
                                            </span>

                                        </span>
                                        <span class="text-[#222] font-semibold">
                                            Size:
                                            <span class=" pl-1 font-light">
                                                42
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                500.0 VNĐ
                            </td>
                            <td>
                                3
                            </td>
                            <td>
                                1500.0 VNĐ
                            </td>
                            <td>
                                <button class="review-button" data-uk-toggle="target: #modal-review-1">
                                    Viết đánh giá
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="uk-width-1-3 order-detail-right">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title-order">Nguyễn Minh Hiếu</h5>
                        <p class="card-text">Ba Vì-Hà Nội</p>

                    </div>
                </div>

                <!-- Thông tin thanh toán -->
                <div class="payment-summary">
                    <div class="summary-item ">
                        <span class="label text-[#222] font-semibold">Mã đơn hàng:</span>
                        <span class="value text-[#222] font-semibold" id="grand-total">SW-1-1733470236</span>
                    </div>
                    <div class="summary-item ">
                        <span class="label text-[#222] font-semibold">Tổng cộng:</span>
                        <span class="value text-[#222] font-semibold" id="grand-total">100.00</span>
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
                        <span class="value text-[#222] font-semibold" id="shipping-fee">30.000</span>
                    </div>
                    <hr class="divider">
                    <div class="summary-item total">
                        <span class="label text-[#222] font-bold text-[18px]">Tổng thanh toán:</span>
                        <span class="value text-[#222] font-semibold" id="final-total">1110.00</span>
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
                        <textarea id="review-content" class=" mt-2 block w-full h-32 p-2 input-info" rows="5" placeholder="Viết đánh giá của bạn về sản phẩm..."></textarea>
                    </div>


                    <button type="submit" class="bt-review">Gửi đánh giá</button>
                </form>
            </div>
        </div>

        <script>
             document.querySelectorAll('.star').forEach(star => {
        star.addEventListener('click', (event) => {
            event.preventDefault(); // k chuyển trang click vào sao
            //lấy giá trị rating data-value
            const ratingValue = parseInt(star.dataset.value);
            //update màu sắc
            document.querySelectorAll('.star').forEach((s) => {
                const currentValue = parseInt(s.dataset.value);
                const icon = s.querySelector('i');
                // sửa màu
                icon.classList.toggle('text-yellow-400', currentValue <= ratingValue);
                icon.classList.toggle('text-gray-400', currentValue > ratingValue);
            });

            //lưu vào ứng dụng, gửi lên backend
            console.log("Rating value:", ratingValue);

        });
    });
        </script>


    </div>
    </div>



</body>

</html>