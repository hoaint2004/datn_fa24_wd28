@extends('client.layouts.master')
@section('title', 'HomePage')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="banner uk-position-relative uk-visible-toggle uk-light" tabIndex={-1} uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3000">
        <div class="uk-slideshow-items">
            <div>
                <img
                    src="{{ url('storage/images/Banner/2.png') }}"
                    alt="Slide 1"
                    uk-cover="true" />
            </div>
            <div>
                <img
                    src="{{ url('storage/images/Banner/1.png') }}"
                    alt="Slide 2"
                    uk-cover="true" />
            </div>
            <div>
                <img
                    src="{{ url('storage/images/Banner/3.png') }}"
                    alt="Slide 3"
                    uk-cover="true" />
            </div>
            <div>
                <img
                    src="{{ url('storage/images/Banner/4.png') }}"
                    alt="Slide 4"
                    uk-cover="true" />
            </div>
            <div>
                <img
                    src="{{ url('storage/images/Banner/5.png') }}"
                    alt="Slide 5"
                    uk-cover="true" />
            </div>
        </div>

        <button class="icon-left uk-position-center-left uk-position-small uk-hidden-hover" uk-slideshow-item="previous">
            <i>‹</i>
        </button>
        <button class="icon-right uk-position-center-right uk-position-small uk-hidden-hover" uk-slideshow-item="next">
            <i>›</i>
        </button>
    </div>

    <section class="about-us uk-container uk-container-large">
        <div class="about-us-container uk-grid" uk-grid="true">
            <div class="content uk-width-1-2@m uk-width-1-2@s">
                <div class="title">
                    <a href="#">
                        <h2>Về chúng tôi</h2>
                    </a>
                    <hr />
                </div>
                <span class="sub-span-title">Artisanal Nomad</span>
                <p>
                    Chủ đề này khám phá các loại vải sáng tạo, thiết kế tương lai và
                    kiểu dáng đẹp mắt lấy cảm hứng từ thời đại kỹ thuật số. Quần áo
                    kết hợp các yếu tố công nghệ có thể mặc, điểm nhấn sáng và tính
                    thẩm mỹ hiện đại, phản ánh sự kết hợp giữa phong cách và chức năng
                    dành cho tín đồ thời trang am hiểu công nghệ.
                    <br /><br />
                    Chủ đề này trưng bày các kết cấu phong phú, các chi tiết trang trí
                    xa hoa và bảng màu lấy cảm hứng từ đồ trang sức hoàng gia. Những
                    hình bóng toát lên sự tinh tế đồng thời kết hợp các họa tiết ma
                    thuật, đưa người mặc đến một thế giới hùng vĩ và quyến rũ.
                </p>
                <div class="shopping">
                    <a href="#">
                        Men shoes
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="#">
                        Women shoes <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
            <div class="image-about-us uk-width-1-2@m uk-width-1-2@s">
                <img
                    class="large-image"
                    src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png"
                    alt="" />
                <!-- <img class="small-image" src="https://bizweb.dktcdn.net/100/062/136/products/gta49-2.jpg?v=1711008704143" alt="" /> -->
            </div>
        </div>
    </section>

    <section class="collection uk-container uk-container-large">
        <div class="title">
            <hr />
            <a href="#">
                <h2>Danh mục nổi bật</h2>
            </a>
            <hr />
        </div>
        <span class="sub-span-title">
            List các nhóm sản phẩm nổi bật nhất
        </span>
        <div class="collection-list uk-grid" uk-grid>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
            <a class="collection-list-item " href="#" title="Flash Sale">
                <div class="home-collection-list-item-image">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/520/624/themes/959507/assets/home_collection_list_item_image__1.jpg?1724041824574" alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async" fetchpriority="auto">
                </div>
                <span>Flash Sale</span>
            </a>
        </div>
    </section>

    <section class="date-time-sale uk-container uk-container-large ">
        <div class="uk-grid" uk-grid="true">
            <div class="home-sale-left uk-width-1-3">

                <div class="date-time-image">
                    <img src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_flashsale_d_img__1.jpg?1724041824574" alt="" />
                </div>

                <div class="date-time-info">
                    <div class="countdown">
                        <span class="days">
                            <b>20</b>
                            <br />
                            <div class="days-content">Ngày</div>
                        </span>
                        <span class="hours">
                            <b>07</b>
                            <br />
                            <div class="hours-content">Giờ</div>
                        </span>
                        <span class="minutes">
                            <b>04</b>
                            <br />
                            <div class="minutes-content">Phút</div>
                        </span>
                        <span class="seconds">
                            <b>01</b>
                            <br />
                            <div class="seconds-content">Giây</div>
                        </span>
                    </div>
                </div>

            </div>

            <div class="uk-width-2-3">
                <div class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
                    <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
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
                        <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                            <i>‹</i>
                        </button>
                        <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                            <i>›</i>
                        </button>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>

            </div>

        </div>
    </section>

    <section class="banner2-home ">
        <div class="home-banner2-wrapper">
            <div class="home-banner-item">
                <a href="#" title="" class="home-banner2-image-holder ">
                    <img src="//bizweb.dktcdn.net/thumb/2048x2048/100/520/624/themes/959507/assets/home_banner_lg_image_d.jpg?1724041824574" alt="">
                </a>
                <div class="home-banner2-item-info">
                    <div class="title">
                        <a href="#">
                            <h2>Bộ sưu tập mùa hè</h2>
                        </a>
                        <hr />
                        <span class="sub-span-title">
                            Vẻ Đẹp Trường Tồn Được Tái Tạo: Nghiên Cứu Sự Đối Lập trong Xu Hướng Thời Trang Mùa Hè 2024
                        </span>
                    </div>
                    <a href="#" title="Khám phá ngay " class="home-banner2-button">
                        <p>Khám phá ngay</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="name-shoes uk-container uk-container-large">
        <div class="uk-grid" uk-grid="true">

            <div class="name-shoes-item uk-width-1-3">
                <div class="name-shoes-image">
                    <a href="#" class="a-img uk-inline-clip uk-transition-toggle" tabIndex={0}><img class="uk-transition-scale-up uk-transition-opaque" src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_banner_stylist_image_d__1.jpg?1724041824574" alt="" /></a>
                </div>
                <div class="name-shoes-body">
                    <a href="#" class="a-body">
                        <p>Giày Nữ</p>
                    </a>
                </div>
            </div>
            <div class="name-shoes-item uk-width-1-3">
                <div class="name-shoes-image">
                    <a href="#" class="a-img uk-inline-clip uk-transition-toggle" tabIndex={0}><img class="uk-transition-scale-up uk-transition-opaque" src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_banner_stylist_image_d__2.jpg?1724041824574" alt="" /></a>
                </div>
                <div class="name-shoes-body">
                    <a href="#" class="a-body">
                        <p>Giày Nữ</p>
                    </a>
                </div>
            </div>
            <div class="name-shoes-item uk-width-1-3">
                <div class="name-shoes-image">
                    <a href="#" class="a-img uk-inline-clip uk-transition-toggle" tabIndex={0}><img class="uk-transition-scale-up uk-transition-opaque" src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_banner_stylist_image_d__3.jpg?1724041824574" alt="" /></a>
                </div>
                <div class="name-shoes-body">
                    <a href="#" class="a-body">
                        <p>Giày Nữ </p>
                    </a>
                </div>
            </div>

        </div>

    </section>

    <!-- <section class="trending uk-container uk-container-xlarge ">
        <div class="title">
            <hr />
            <a href="#">
                <h2>Top trending</h2>
            </a>
            <hr />
        </div>
        <span class="sub-span-title">
            Bộ sưu tập nổi bật nhất tuần
        </span>
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-5">
                <img class="alofdfsd" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/520/624/themes/959507/assets/home_product_new_image_d__1.jpg?1724041824574" alt="">
            </div>

            <div class="uk-width-3-5">
                <section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
                    <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                        <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
                            <div class="product-item uk-width-1-3@m">
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

                            <div class="product-item uk-width-1-3@m">
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

                            <div class="product-item uk-width-1-3@m">
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

                            <div class="product-item uk-width-1-3@m">
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
                        <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                            <i>‹</i>
                        </button>
                        <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                            <i>›</i>
                        </button>
                    </div>
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </section>
            </div>

            <div class="uk-width-1-5">
                <img class="alofdfsd" src="https://bizweb.dktcdn.net/thumb/1024x1024/100/520/624/themes/959507/assets/home_product_new_image_d__2.jpg?1724041824574" alt="">
            </div>
        </div>
    </section> -->

    <section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
        <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <div class="title">
                <hr />
                <a href="#">
                    <h2>Best Seller</h2>
                </a>
                <hr />
            </div>
            <span class="sub-span-title">
                Top các sản phẩm bán chạy nhất tuần
            </span>

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
            <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                <i>‹</i>
            </button>
            <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                <i>›</i>
            </button>
        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </section>

    <section class="brand uk-container uk-container-large">
        <div class="uk-grid brand-body" uk-grid>
            <div class="uk-width-2-5 brand-left">
                <div class="brand-left-image">
                    <div class="title">
                        <a href="#">
                            <h2>Thương Hiệu</h2>
                        </a>
                        <hr />
                    </div>
                    <span class="sub-span-title">
                        Các thương hiệu tin dùng chúng tôi
                    </span>
                </div>
            </div>

            <div class="uk-width-3-5 ">
                <div class="uk-grid" uk-grid="true">
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/jordan.jpeg') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/adidas.png') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/alexsander.png') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/gucci.jpg') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/nike.jpg') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/puma.jpg') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/puma.jpg') }}" alt="" />
                    </a>
                    <a href="#" class="uk-width-1-4 uk-transition-toggle" tabIndex={0}>
                        <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/puma.jpg') }}" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
        <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <div class="title">
                <hr />
                <a href="#">
                    <h2>Women Shoes</h2>
                </a>
                <hr />
            </div>
            <span class="sub-span-title">
                Top các sản phẩm bán chạy nhất tuần
            </span>

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
            <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                <i>‹</i>
            </button>
            <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                <i>›</i>
            </button>
        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </section>

    <section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light" uk-slider="autoplay: true; autoplay-interval: 3000;">
        <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
            <div class="title">
                <hr />
                <a href="#">
                    <h2>Man Shoes</h2>
                </a>
                <hr />
            </div>
            <span class="sub-span-title">
                Top các sản phẩm bán chạy nhất tuần
            </span>

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
            <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href uk-slider-item="previous">
                <i>‹</i>
            </button>
            <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href uk-slider-item="next">
                <i>›</i>
            </button>
        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </section>


    <!-- Modal xem nhanh-->
    <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-width-large" style="max-width: 90vw; max-height: 95vh;">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body uk-grid" uk-grid>
                <div class="uk-width-1-2">
                    <img alt="Girls Pink Moana Printed Dress" class="w-full rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 100%; max-height: 70vh; object-fit: cover;" />
                    <div class="flex mt-4 space-x-2">
                        <img alt="Thumbnail 1" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 2" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 3" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 4" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                    </div>
                </div>

                <div class="uk-width-1-2" style="overflow-y: hidden;">
                    <h1 class="text-3xl font-bold">YK Disney</h1>
                    <p class="text-xl text-gray-600">Giày búp bê da</p>
                    <div class="flex items-center mt-2">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                        <p class="ml-2 text-gray-600">(121 Reviews)</p>
                    </div>
                    <div class="mt-4">
                        <span class="text-2xl font-bold">$80.00</span>
                        <span class="text-xl line-through text-gray-500 ml-2">$100.00</span>
                    </div>
                    <p class="mt-4 text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                    <div class="mt-4">
                        <p class="font-bold">Color</p>
                        <div class="flex space-x-2 mt-2">
                            <div class="w-8 h-8 bg-blue-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-red-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-black rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-yellow-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-green-600 rounded-full cursor-pointer"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold">Size</p>
                        <div class="flex space-x-2 mt-2">
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">S</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">M</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">L</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">XL</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">XXL</button>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center space-x-4">
                        <div class="flex items-center border border-gray-300 rounded-lg">
                            <button class="w-10 h-10 text-gray-600">-</button>
                            <input class="w-12 h-10 text-center border-none" type="text" value="1" />
                            <button class="w-10 h-10 text-gray-600">+</button>
                        </div>
                        <button class="bg-black text-white px-6 py-2 rounded-lg">Add to Cart</button>
                        <button class="border border-gray-300 rounded-lg p-2">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                    </div>
                    <div class="mt-4">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-lg">In Stock</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal giảm giá -->
    <div id="discount-modal" uk-modal>
        <button class="uk-modal-close-default" type="button">
            <i class="fa-solid fa-xmark fa-2xl close-modal" style="color: #ffffff;"></i>
        </button>
        <div class="uk-modal-dialog">
            <img src="https://theme.hstatic.net/1000312752/1001099452/14/campaign-popup_grande.jpg?v=884" alt="">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            UIkit.modal("#discount-modal").show();
        });
    </script>



</body>

</html>

@endsection()