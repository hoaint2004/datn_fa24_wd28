@extends('client.layouts.master')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../src/styles/css/uikit-rtl.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="uk-container uk-container-large breadcrumb mt-10 mb-10">
        <nav aria-label="Breadcrumb">
            <ul class="uk-breadcrumb">
                <li><a href="#" class="breadcrumb-a">Trang chủ</a></li>
                <li><a href="#" class="breadcrumb-a">Danh mục</a></li>
                <li><span aria-current="page" class="text-base">Sản phẩm</span></li>
            </ul>
        </nav>
    </div>

    <section class="product-detail uk-container uk-container-large">
        <div class="product-detail-body uk-grid" uk-grid>
            <div class="product-detail-left uk-width-1-2">
                <img alt="" class="w-full mb-4" height="500" src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" width="500" />
                <div class="product-detail-image-slide">
                    <img class="swiper-slide" alt="" src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" />
                    <img class="swiper-slide" src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" />
                    <img class="swiper-slide" alt="" src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" />
                    <img class="swiper-slide" alt="" src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" />
                </div>
            </div>

            <div class="product-detail-right uk-width-1-2">
                <div class="product-detail-right-top">
                    <h3 class="text-3xl">
                        Giày nữ
                    </h3>
                    <div class="stock">
                        <span class="bg-green-100 text-green-700 px-2 py-1 rounded">
                            Còn hàng
                        </span>
                    </div>
                </div>

                <div class="flex items-center my-2 review">
                    <div class="flex items-center gap-1">
                        <i class="fas fa-star text-yellow-400">
                        </i>
                        <i class="fas fa-star text-yellow-400">
                        </i>
                        <i class="fas fa-star text-yellow-400">
                        </i>
                        <i class="fas fa-star text-yellow-400">
                        </i>
                        <i class="fas fa-star text-yellow-400">
                        </i>
                    </div>
                    <p class="text-sm ml-2">
                        5.0 (121 Reviews)
                    </p>
                </div>

                <div class="flex items-center my-4 price">
                    <span class="text-2xl font-bold text-red-500">
                        2.180.000₫
                    </span>
                    <span class="text-base text-gray-500 line-through ml-2">
                        2.980.000₫
                    </span>
                </div>

                <div class="product-info">
                    <p class="text-gray-600 mb-2 product-info-sku">
                        <strong>Mã sản phẩm:</strong>
                        <a href="#" id="sku">Muckbang</a>
                    </p>
                    <p class="text-gray-600 mb-2 product-info-category">
                        <strong>Danh mục:</strong>
                        <a href="#" id="category">Đớp, Bú, Ăn</a>
                    </p>
                    <p class="text-gray-600 mb-4 product-info-tag">
                        <strong>Tags:</strong>
                        <a href="#" id="tags">Mucbang ASMR, Mucbang</a>
                    </p>
                    <p class="text-gray-600 mb-4 product-info-vendor">
                        <strong>Thương hiệu:</strong>
                        <a href="#" id="vendor">Jordan</a>
                    </p>

                </div>

                <p class=" mb-4 desc">
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
                </p>

                <div class="mb-4 color">
                    <p class="text-lg font-bold ">
                        Color
                    </p>
                    <div class="flex space-x-2">
                        <div class="product-color-options">
                            <span class="product-sw-select-item">
                                <input type="radio" name="product-choose-color" value="xanh" id="xanh" class="trigger-option-sw">
                                <label for="xanh" class="sw-color-label"></label>
                            </span>
                            <span class="product-sw-select-item">
                                <input type="radio" name="product-choose-color" value="xanh" id="tim" class="trigger-option-sw">
                                <label for="tim" class="sw-color-label"></label>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mb-14 size">
                    <p class="text-lg font-semibold mb-2 text-[#222]">
                        Size
                    </p>
                    <div class="flex space-x-2 product-size-options">
                        <span class="product-sw-select-item">
                            <input type="radio" data-value="36" name="product-choose-size" data-name="option2" value="36" class="trigger-option-sw d-none" id="product-choose-size-1">
                            <label for="product-choose-size-1" class="sw-size-label">36</label>
                        </span>
                        <span class="product-sw-select-item">
                            <input type="radio" data-value="38" name="product-choose-size" data-name="option2" value="38" class="trigger-option-sw d-none" id="product-choose-size-2">
                            <label for="product-choose-size-2" class="sw-size-label">38</label>
                        </span>
                    </div>
                </div>


                <div class="product-detail-add">
                    <div class="quantity">
                        <div class="quantity-selector">
                            <button aria-label="Giảm số lượng" class="quantity-selector-button-minus">-</button>
                            <input class="quantity-selector-input" type="number" step="1" min="1" max="9999" aria-label="Số lượng sản phẩm" value="1" readonly="">
                            <button aria-label="Tăng số lượng" class="quantity-selector-button-plus">+</button>
                        </div>
                    </div>
                    <div class="add-cart">
                        <p class="mini-cart-button">
                            <a href="#" class="pay-money" title="Tiếp tục mua hàng">Thêm Vào Giỏ Hàng</a>
                        </p>
                    </div>
                    <div class="icon-heart-detail">
                        <input type="checkbox" id="hong" class="icon-toggle-checkbox">
                        <label for="hong" uk-icon="heart" class="sw-icon-heart-color"></label>
                    </div>


                </div>

                <div class="mb-4 product-extra-content">
                    <p class="mb-1 free-deliver">
                        Miễn phí vận chuyển trên toàn thế giới cho tất cả các đơn hàng của Hiếu
                    </p>
                    <p class=" mb-1 date-time-extra">
                        <i class="fas fa-check-circle fa-sm text-red-500">
                        </i>
                        30 ngày trả hàng dễ dàng
                    </p>
                    <p class="date-time-extra">
                        <i class="fas fa-check-circle fa-sm text-red-500">
                        </i>
                        Đặt hàng trước 00:00 khuya để được giao hàng trong ngày
                    </p>
                </div>
            </div>
        </div>

        <div class="tab-product-detail">
            <ul class="uk-flex-center tab-product-detail-top" uk-tab>
                <li class="uk-active"><a class="tab-product-detail-title" href="#">Description</a></li>
                <li><a class="tab-product-detail-title" href="#">Additional Information</a></li>
                <li><a class="tab-product-detail-title" href="#">Reviews (1)</a></li>
            </ul>

            <!-- Nội dung của tab -->
            <ul class="uk-switcher uk-margin tab-product-detail-bt">
                <!-- Tab des -->
                <div class="tab-des">
                    <p class="text-[#222]">This is the description of the product. It includes details about the product's features, materials, and usage. Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quas commodi doloremque vitae a accusantium facere, delectus id consectetur quis nobis repudiandae blanditiis obcaecati ipsa harum tenetur neque minima reiciendis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis assumenda, odit consequatur unde laboriosam voluptates nostrum voluptatem debitis adipisci nisi deleniti ut cumque voluptatibus sapiente atque cum ratione praesentium blanditiis.</p>
                </div>

                <!-- Tab Info -->
                <div class="tab-info">
                    <div class="flex gap-10 pb-4">
                        <span class="text-[#222] font-bold text-lg">Color</span>
                        <p class="text-[#555]"> voluptatum ullam fugit, atque vitae assumenda maxime voluptatem ipsam ad! Molestias enim dolorem ipsa neque sunt repellat!</p>
                    </div>
                    <div class="flex gap-10 pb-4">
                        <span class="text-[#222] font-bold text-lg">Size</span>
                        <p class="text-[#555]"> voluptatum ullam fugit, atque vitae assumenda maxime voluptatem ipsam ad! Molestias enim dolorem ipsa neque sunt repellat!</p>
                    </div>
                </div>

                <!-- Tab review -->
                <div class="tab-review">

                    <div class="flex items-start gap-x-8 pb-8 pt-8 tab-review-warp">
                        <img alt="" class="w-16 h-16 rounded-full" height="60" src="https://storage.googleapis.com/a1aa/image/O7wLlOJVDnb5LBKc40Mw6jm10eUtoOpXp3VAMcG01y7e8ZwTA.jpg" width="60" />
                        <div class="tab-review-body">
                            <div class="tab-review-meta">
                                <div>
                                    <div class="text-sm text-gray-500">
                                        02/07/2004
                                    </div>
                                    <div class="text-lg font-semibold pt-1 mb-1 text-[#222]">
                                        Nguyễn Minh Hiếu
                                    </div>
                                </div>

                                <div class="ml-auto flex items-center adfadf">
                                    <div class="text-yellow-400">
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-review-desc">
                                <div class="mt-2 text-[#555]">
                                    Hayflower blends with fresh moss on this wine’s gentle nose. The palate adds a ripe lemon freshness that is mouth-filling, smooth, and textured with the yeasty richness that is aligned to chalky depth.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-x-8 pb-8 pt-8 tab-review-warp">
                        <img alt="" class="w-16 h-16 rounded-full" height="60" src="https://storage.googleapis.com/a1aa/image/O7wLlOJVDnb5LBKc40Mw6jm10eUtoOpXp3VAMcG01y7e8ZwTA.jpg" width="60" />
                        <div class="tab-review-body">
                            <div class="tab-review-meta">
                                <div>
                                    <div class="text-sm text-gray-500">
                                        02/07/2004
                                    </div>
                                    <div class="text-lg font-semibold pt-1 mb-1 text-[#222]">
                                        Nguyễn Minh Hiếu
                                    </div>
                                </div>

                                <div class="ml-auto flex items-center adfadf">
                                    <div class="text-yellow-400">
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                        <i class="fas fa-star ">
                                        </i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-review-desc">
                                <div class="mt-2 text-[#555]">
                                    Hayflower blends with fresh moss on this wine’s gentle nose. The palate adds a ripe lemon freshness that is mouth-filling, smooth, and textured with the yeasty richness that is aligned to chalky depth.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 comment-reply">
                        <h2 class="text-[28px] font-semibold mt-16 comment-reply-title">
                            Thêm đánh giá
                        </h2>
                        <form action="" class="mt-4 space-y-4">

                            <div class="rating">
                                <label class="block text-base font-medium text-[#555] ">
                                    Your rating
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="flex gap-2 items-center mt-1">
                                    <a href="#" class="star" data-value="1"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                    <a href="#" class="star" data-value="2"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                    <a href="#" class="star" data-value="3"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                    <a href="#" class="star" data-value="4"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                    <a href="#" class="star" data-value="5"><i class="fa-solid fa-star text-gray-400 text-lg"></i></a>
                                </div>
                            </div>

                            <div class="comment-reply-review pb-10">
                                <label class="block text-base font-medium text-[#555] pb-3 pt-3">
                                    Your review
                                    <span class="text-red-500">
                                        *
                                    </span>
                                </label>
                                <textarea class="mt-1 block w-full h-32 p-2 input-info"></textarea>
                            </div>

                            <div class="uk-grid comment-reply-review-info pb-5" uk-grid>
                                <div class="comment-reply-name uk-width-1-2">
                                    <label class="block text-base font-medium text-[#555] pb-3">
                                        Name
                                        <span class="text-red-500">
                                            *
                                        </span>
                                    </label>
                                    <input class="mt-1 block w-full p-2 input-info" type="text" />
                                </div>
                                <div class="comment-reply-email uk-width-1-2">
                                    <label class="block text-base font-medium text-[#555] pb-3">
                                        Email
                                        <span class="text-red-500">
                                            *
                                        </span>
                                    </label>
                                    <input class="mt-1 block w-full p-2 input-info" type="email" />
                                </div>
                            </div>

                            <div class="flex items-center pb-8">
                                <input class="h-4 w-4 text-red-500 border-gray-300 rounded" id="save-info" type="checkbox" />
                                <label class="ml-2 block text-base text-[#555]" for="save-info">
                                    Lưu tên, email và trang web của tôi trên trình duyệt này cho lần bình luận kế tiếp.
                                </label>
                            </div>

                            <button class="comment-reply-button " type="submit">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
            </ul>
        </div>

        <div class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
            <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <div class="title-related">
                    <h2>Sản phẩm liên quan</h2>
                </div>

                <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
                    <div class="product-item uk-width-1-4@m">
                        <div class="product-image">
                            <a href="#">
                                <img
                                    src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                    alt="" />
                            </a>
                            <span>-10%</span>
                            <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                            <div class="product-button">
                                <button>Thêm vào giỏ </button>
                                <button uk-toggle="target: #modal-container">Xem nhanh</button>
                            </div>
                        </div>
                        <div class="product-review">
                            <a href="#">
                                <span>RIBBON</span>
                            </a>
                            <div class="icon">
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                            </div>
                        </div>
                        <a href="#" class="product-name">Giày búp bê da</a>
                        <div class="product-price">
                            <strong>2.180.000₫</strong>
                            <del>2.000.000₫</del>
                        </div>
                        <div class="product-item-detail-gallery-items">
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="product-item uk-width-1-4@m">
                        <div class="product-image">
                            <a href="#">
                                <img
                                    src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                    alt="" />
                            </a>
                            <span>-10%</span>
                            <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                            <div class="product-button">
                                <button>Thêm vào giỏ </button>
                                <button uk-toggle="target: #modal-container">Xem nhanh</button>
                            </div>
                        </div>
                        <div class="product-review">
                            <a href="#">
                                <span>RIBBON</span>
                            </a>
                            <div class="icon">
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                            </div>
                        </div>
                        <a href="#" class="product-name">Giày búp bê da</a>
                        <div class="product-price">
                            <strong>2.180.000₫</strong>
                            <del>2.000.000₫</del>
                        </div>
                        <div class="product-item-detail-gallery-items">
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="product-item uk-width-1-4@m">
                        <div class="product-image">
                            <a href="#">
                                <img
                                    src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                    alt="" />
                            </a>
                            <span>-10%</span>
                            <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                            <div class="product-button">
                                <button>Thêm vào giỏ </button>
                                <button uk-toggle="target: #modal-container">Xem nhanh</button>
                            </div>
                        </div>
                        <div class="product-review">
                            <a href="#">
                                <span>RIBBON</span>
                            </a>
                            <div class="icon">
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                            </div>
                        </div>
                        <a href="#" class="product-name">Giày búp bê da</a>
                        <div class="product-price">
                            <strong>2.180.000₫</strong>
                            <del>2.000.000₫</del>
                        </div>
                        <div class="product-item-detail-gallery-items">
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="product-item uk-width-1-4@m">
                        <div class="product-image">
                            <a href="#">
                                <img
                                    src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                    alt="" />
                            </a>
                            <span>-10%</span>
                            <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                            <div class="product-button">
                                <button>Thêm vào giỏ </button>
                                <button uk-toggle="target: #modal-container">Xem nhanh</button>
                            </div>
                        </div>
                        <div class="product-review">
                            <a href="#">
                                <span>RIBBON</span>
                            </a>
                            <div class="icon">
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                            </div>
                        </div>
                        <a href="#" class="product-name">Giày búp bê da</a>
                        <div class="product-price">
                            <strong>2.180.000₫</strong>
                            <del>2.000.000₫</del>
                        </div>
                        <div class="product-item-detail-gallery-items">
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="product-item uk-width-1-4@m">
                        <div class="product-image">
                            <a href="#">
                                <img
                                    src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                    alt="" />
                            </a>
                            <span>-10%</span>
                            <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                            <div class="product-button">
                                <button>Thêm vào giỏ </button>
                                <button uk-toggle="target: #modal-container">Xem nhanh</button>
                            </div>
                        </div>
                        <div class="product-review">
                            <a href="#">
                                <span>RIBBON</span>
                            </a>
                            <div class="icon">
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                            </div>
                        </div>
                        <a href="#" class="product-name">Giày búp bê da</a>
                        <div class="product-price">
                            <strong>2.180.000₫</strong>
                            <del>2.000.000₫</del>
                        </div>
                        <div class="product-item-detail-gallery-items">
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                            <div class="product-item-detail-gallery-item">
                                <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="icon-left-product-detail uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                    <i>‹</i>
                </button>
                <button class="icon-right-product-detail uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                    <i>›</i>
                </button>
            </div>
            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
        </div>

    </section>

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


        const minusButton = document.querySelector('.quantity-selector-button-minus');
        const plusButton = document.querySelector('.quantity-selector-button-plus');
        const quantityInput = document.querySelector('.quantity-selector-input');

        //giảm số lượng
        minusButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        //tăng số lượng
        plusButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue < 9999) {
                quantityInput.value = currentValue + 1;
            }
        });
    </script>
</body>

</html>

@endsection