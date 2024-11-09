@extends('Client.layouts.master')

@section('title')
    Sneakers - Thế Giới Giày
@endsection

@section('content')
    <!-- Start of Primary Slider Section -->
    <!-- Start of Primary Slider Section -->
    <section class="primary-slider-section mb0 pos-r">
        <div id="primary_slider"
            class="swiper-container slider-type-1 swiper-container-initialized swiper-container-horizontal">

            <!-- Slides -->
            <div class="swiper-wrapper" style="transform: translate3d(-2306px, 0px, 0px); transition-duration: 0ms;">
                <div class="swiper-slide bg-img-wrapper swiper-slide-duplicate swiper-slide-duplicate-next"
                    data-swiper-slide-index="2" style="width: 1153px; transition: all;">
                    <div class="slide-inner image-placeholder"
                        style="transform: translate3d(1153px, 0px, 0px); transition: all; background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-3.jpg&quot;); background-size: cover; background-position: center center;">
                        <img src="http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-3.jpg"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="height: 540px;">
                                    <div class="slide-content white-scheme layer-animation-3">
                                        <p class="promo-title"><span>
                                                Giảm giá nóng</span>
                                            Ưu đãi giảm giá 60% trong tuần này</p>
                                        <h1 class="main-title"><span>
                                                Giảm giá 20% hàng đầu</span> <span>Tháng lịch sử đen tối</span></h1>
                                        <p class="subtitle">Bộ sưu tập phát triển mỗi năm với những câu chuyện nguyên
                                            bản và
                                            đặc điểm thiết kế chịu ảnh hưởng từ các nhân viên của Abalia.</p>
                                        <div class="slide-button">
                                            <a class="default-btn secondary" href="shop-grid.html" title="Shop Now">Mua
                                                ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div>
                <div class="swiper-slide bg-img-wrapper swiper-slide-prev" data-swiper-slide-index="0"
                    style="width: 1153px; transition: all;">
                    <div class="slide-inner image-placeholder"
                        style="transform: translate3d(576.5px, 0px, 0px); transition: all; background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-1.jpg&quot;); background-size: cover; background-position: center center;">
                        <img src="http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-1.jpg"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="height: 540px;">
                                    <div class="slide-content layer-animation-1">
                                        <p class="promo-title"><span>Giới hạn</span>
                                            Ưu đãi giảm giá 20% trong tuần này</p>
                                        <h1 class="main-title"><span>VanhSneakers</span> <span>Giày Thể Thao 2024</span>
                                        </h1>
                                        <p class="subtitle">Thân giày được dệt kim nhẹ thích ứng với hình dạng bàn chân
                                            của
                                            bạn để chuyển động linh hoạt và tự nhiên.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Mua ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper swiper-slide-active" data-swiper-slide-index="1"
                    style="width: 1153px; transition: all;">
                    <div class="slide-inner image-placeholder"
                        style="transform: translate3d(0px, 0px, 0px); transition: all; background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-2.jpg&quot;); background-size: cover; background-position: center center;">
                        <img src="http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-2.jpg"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="height: 540px;">
                                    <div class="slide-content layer-animation-2">
                                        <p class="promo-title"><span>Giới hạn</span> Ưu đãi giảm giá 20% trong tuần này
                                        </p>
                                        <h1 class="main-title"><span>VanhSneakers</span> <span>Cập Bến Giày Hot</span>
                                        </h1>
                                        <p class="subtitle">
                                            Giày chạy bộ nam Nike Air Zoom Pegasus 34 có chất liệu Flymesh được cập
                                            nhật,
                                            nhẹ hơn giúp giảm nhiệt tích tụ khi bạn chạy.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Mua ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->

                <div class="swiper-slide bg-img-wrapper swiper-slide-next" data-swiper-slide-index="2"
                    style="width: 1153px; transition: all;">
                    <div class="slide-inner image-placeholder"
                        style="transform: translate3d(-576.5px, 0px, 0px); transition: all; background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-3.jpg&quot;); background-size: cover; background-position: center center;">
                        <img src="http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-3.jpg"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="height: 540px;">
                                    <div class="slide-content white-scheme layer-animation-3">
                                        <p class="promo-title"><span>
                                                Giảm giá nóng</span>
                                            Ưu đãi giảm giá 60% trong tuần này</p>
                                        <h1 class="main-title"><span>
                                                Giảm giá 20% hàng đầu</span> <span>Tháng lịch sử đen tối</span></h1>
                                        <p class="subtitle">Bộ sưu tập phát triển mỗi năm với những câu chuyện nguyên
                                            bản và
                                            đặc điểm thiết kế chịu ảnh hưởng từ các nhân viên của Abalia.</p>
                                        <div class="slide-button">
                                            <a class="default-btn secondary" href="shop-grid.html" title="Shop Now">Mua
                                                ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div> <!-- end of swiper-slide -->
                <div class="swiper-slide bg-img-wrapper swiper-slide-duplicate swiper-slide-duplicate-prev"
                    data-swiper-slide-index="0" style="width: 1153px; transition: all;">
                    <div class="slide-inner image-placeholder"
                        style="transform: translate3d(-1153px, 0px, 0px); transition: all; background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-1.jpg&quot;); background-size: cover; background-position: center center;">
                        <img src="http://sneakers.test/assets/sneakers/assets/images/slider/home-1/slide-1.jpg"
                            class="visually-hidden" alt="Slider Image">
                        <div class="slide-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="height: 540px;">
                                    <div class="slide-content layer-animation-1">
                                        <p class="promo-title"><span>Giới hạn</span>
                                            Ưu đãi giảm giá 20% trong tuần này</p>
                                        <h1 class="main-title"><span>VanhSneakers</span> <span>Giày Thể Thao
                                                2024</span>
                                        </h1>
                                        <p class="subtitle">Thân giày được dệt kim nhẹ thích ứng với hình dạng bàn chân
                                            của
                                            bạn để chuyển động linh hoạt và tự nhiên.</p>
                                        <div class="slide-button">
                                            <a class="default-btn" href="shop-grid.html" title="Shop Now">Mua
                                                ngay</a>
                                        </div>
                                    </div> <!-- end of slide-content -->
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of slider-inner -->
                </div>
            </div> <!-- end of swiper-slide -->

            <!-- Slider Navigation -->
            <div class="swiper-arrow next slide" tabindex="0" role="button" aria-label="Next slide"><i
                    class="fa fa-angle-right"></i></div>
            <div class="swiper-arrow prev slide" tabindex="0" role="button" aria-label="Previous slide"><i
                    class="fa fa-angle-left"></i></div>

            <!-- Slider Pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 1"></span><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                    aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                    role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </section>
    <!-- End of Primary Slider Section -->

    <!-- Start of Support Section -->
    <section class="support-section mb0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Miễn phí vận chuyển</h2>
                        <p>Miễn phí vận chuyển cho mọi đơn hàng</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Hoàn tiền</h2>
                        <p>30 ngày đổi trả miễn phí</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Hỗ trợ trực tuyến</h2>
                        <p>Hỗ trợ 24 giờ một ngày</p>
                    </div>
                </div> <!-- end of feaure-box -->

                <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature-box">
                    <div class="feature-content">
                        <h2>Ưu đãi &amp; Khuyến mãi</h2>
                        <p>Tiết kiệm giá, giảm giá, phiếu giảm giá</p>
                    </div>
                </div> <!-- end of feaure-box -->
            </div>
        </div>
    </section>
    <!-- End of Support Section -->

    <!-- Start of Banner Section -->
    <div class="banner-section mb-half">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="http://sneakers.test/assets/sneakers/assets/images/banners/banner-1.jpg"
                                alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="http://sneakers.test/assets/sneakers/assets/images/banners/banner-2.jpg"
                                alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="promo-banner hover-effect-1">
                        <a href="#">
                            <img src="http://sneakers.test/assets/sneakers/assets/images/banners/banner-3.jpg"
                                alt="Promo Banner">
                        </a>
                    </div> <!-- end of promo-banner -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Banner Section -->

    <!-- Start of New Arrivals Section -->
    <section class="new-arrivals-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>SẢN PHẨM MỚI NHẤT</h2>
                        <p class="subtitle">Mọi người có thể tự do chăm sóc bản thân khi tích lũy sự sống dưới chân hồ
                        </p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="new-products pos-r">
                        <div class="element-carousel anime-element instance-0 swiper-container-initialized swiper-container-horizontal"
                            data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                            <!-- Slides -->
                            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-active"
                                    style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/asic-ban-best-quality-likeauth">
                                                    <img src="/storage/products/ju5zGb3BaG00LUUrFCSjRL0ZUk5WaJovfDPK6xpw.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">CAMPUS</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Asic Bản Best
                                                        Quality Likeauth</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">200.000
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                <article class="swiper-slide product-layout swiper-slide-visible swiper-slide-next"
                                    style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/dior-test">
                                                    <img src="/storage/products/i6XItds3STCJcUfJ8NyhEp2AT90rGz1wENYE0j0W.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">CONVES</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">dior test</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">200.000
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                <article class="swiper-slide product-layout swiper-slide-visible" style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/jordan-ban-cao-cap">
                                                    <img src="/storage/products/IYpspxbp8NiPA0vW83tL0cmJjfCk47rxrDkvxA3q.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">CAMPUS</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Jordan Bản Cao
                                                        Cấp</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">500.000
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                <article class="swiper-slide product-layout swiper-slide-visible" style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/samba">
                                                    <img src="/storage/products/HGPxtHnDmvGB1mPU3UyvfFcEjdwMAyGEeV3FJedV.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">DIOR</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Samba</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">34.534.534
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                <article class="swiper-slide product-layout" style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/adidas-samba-den-stussy">
                                                    <img src="/storage/products/n4yLWr4LrbPWvX41P8Cfg0jzz6Ixboq8mdSAGISQ.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">ADIDAS</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Adidas Samba
                                                        Đen Stussy</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">578.000
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                                <article class="swiper-slide product-layout" style="width: 240px;">
                                    <div class="product-thumb">
                                        <div class="product-inner">
                                            <div class="product-image">

                                                <div class="label-product label-new">New</div>
                                                <a href="http://sneakers.test/sneaker/asic-kem-de-nau-ban-cao-cap">
                                                    <img src="http://sneakers.test/storage/products/W8P3gKe5eDV4nbZIaHahV0auNTBzVGAgnliK4WIb.jpg"
                                                        alt="Compete Track Tote" title="Compete Track Tote">
                                                </a>
                                                <div class="action-links">
                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i
                                                            class="pe-7s-shopbag"></i></a>
                                                    <a class="action-btn btn-wishlist" href="#"
                                                        title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                    <a class="action-btn btn-compare" href="#"
                                                        title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                    <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                        data-bs-target="#product_quick_view" href="#"
                                                        title="Quick View"><i class="pe-7s-search"></i></a>
                                                </div>
                                            </div> <!-- end of product-image -->

                                            <div class="product-caption">
                                                <div
                                                    class="product-meta d-flex justify-content-between align-items-center">
                                                    <div class="product-manufacturer">
                                                        <a href="#">ASIC</a>
                                                    </div>
                                                    <div class="product-ratings">
                                                        <div class="rating-box">
                                                            <ul class="rating d-flex">
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline"></i></li>
                                                                <li><i class="ion ion-md-star-outline disabled"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 class="product-name"><a href="single-product.html">Asic Kem Đế Nâu
                                                        Bản Cao Cấp</a>
                                                </h4>
                                                <p class="product-price">

                                                    <span class="price-new">450.000
                                                        VNĐ</span>
                                                </p>
                                            </div><!-- end of product-caption -->
                                        </div><!-- end of product-inner -->
                                    </div><!-- end of product-thumb -->
                                </article> <!-- end of product-layout -->
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Slider Navigation -->
                            <div class="swiper-arrow next next-0" tabindex="0" role="button" aria-label="Next slide"
                                aria-disabled="false" fdprocessedid="9lbqpb"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-arrow prev prev-0 swiper-button-disabled" tabindex="0" role="button"
                                aria-label="Previous slide" aria-disabled="true" fdprocessedid="oxavl"><i
                                    class="fa fa-angle-left"></i></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div> <!-- end of element-carousel -->
                    </div> <!-- end of new-products -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of New Arrivals Section -->

    <!-- Start of Promo Banner Section -->
    <section class="promo-banner-section bg-img-wrapper">
        <div class="image-placeholder pos-r"
            style="background-image: url(&quot;http://sneakers.test/assets/sneakers/assets/images/backgrounds/bg-banner.jpg&quot;); background-size: cover; background-position: center center;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="banner-with-text">
                            <img src="http://sneakers.test/assets/sneakers/assets/images/backgrounds/bg-banner.jpg"
                                class="visually-hidden" alt="Promo Banner">
                            <div class="promo-text">
                                <h1>Hurry Up!</h1>
                                <h2><span>Hurry Up!</span> Daily Deal Of The Day</h2>
                                <p>Abdul, a young, widowed Muslim man, needed to leave Syria and not be delayed by the
                                    authorities in getting to Europe. The best way to do this, he reasoned, was to
                                    acquire
                                    another family as cover, and he found one. It was all a sham, however, just a means
                                    to
                                    an end.</p>
                                <a href="#" class="default-btn large">Discover Now</a>
                            </div>
                        </div> <!-- end of promo-banner -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of image-placeholder -->
    </section>
    <!-- End of Promo Banner Section -->

    <!-- Start of Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title">
                        <h2>DANH MỤC CỦA TÔI</h2>
                        <p class="subtitle">Nếu anh ta có một khối lượng lớn, hoặc nếu anh ta mắc một căn bệnh nào đó ở
                            cổ
                            họng, anh ta sẽ không thể làm được điều đó.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row product-row">
                <div class="col-12 col-sm-12 col-md-12">

                    <!-- Nav Pills -->
                    <ul class="nav nav-pills justify-content-center" id="our_categories" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="nav_shop_82" data-bs-toggle="pill" href="#shop_82"
                                role="tab" aria-controls="shop_82" aria-selected="true">ADIDAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="nav_shop_80" data-bs-toggle="pill" href="#shop_80" role="tab"
                                aria-controls="shop_80" aria-selected="true">ASIC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="nav_shop_77" data-bs-toggle="pill" href="#shop_77" role="tab"
                                aria-controls="shop_77" aria-selected="true">DIOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="nav_shop_73" data-bs-toggle="pill" href="#shop_73" role="tab"
                                aria-controls="shop_73" aria-selected="true">NIKE</a>
                        </li>
                    </ul> <!-- end of nav -->
                    <!-- Tab Contents -->
                    <div class="tab-content" id="our_categories_contents">
                        <div class="tab-pane show active anime-tab" id="shop_82" role="tabpanel"
                            aria-labelledby="nav_shop_82">
                            <div class="new-products pos-r">
                                <div class="element-carousel instance-1 swiper-container-initialized swiper-container-horizontal"
                                    data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <article
                                            class="swiper-slide product-layout swiper-slide-visible swiper-slide-active"
                                            style="width: 240px;">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">

                                                        <div class="label-product label-new">New</div>
                                                        <a href="http://sneakers.test/sneaker/adidas-samba-den-stussy">
                                                            <img src="/storage/products/n4yLWr4LrbPWvX41P8Cfg0jzz6Ixboq8mdSAGISQ.jpg"
                                                                alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#"
                                                                title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                                title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                                title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                                data-bs-target="#product_quick_view" href="#"
                                                                title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div
                                                            class="product-meta d-flex justify-content-between align-items-center">
                                                            <div class="product-manufacturer">
                                                                <a
                                                                    href="http://sneakers.test/sneaker/adidas-samba-den-stussy">ADIDAS</a>
                                                            </div>
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a
                                                                href="http://sneakers.test/sneaker/adidas-samba-den-stussy">Adidas
                                                                Samba Đen Stussy</a></h4>
                                                        <p class="product-price">

                                                            <span class="price-new">578.000 VNĐ</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next next-1 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Next slide" aria-disabled="true"><i
                                            class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev prev-1 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="true"><i
                                            class="fa fa-angle-left"></i></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div> <!-- end of tab-pane -->
                        <div class="tab-pane  anime-tab" id="shop_80" role="tabpanel" aria-labelledby="nav_shop_80">
                            <div class="new-products pos-r">
                                <div class="element-carousel instance-2 swiper-container-initialized swiper-container-horizontal"
                                    data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <article
                                            class="swiper-slide product-layout swiper-slide-visible swiper-slide-active"
                                            style="width: 240px;">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">

                                                        <div class="label-product label-new">New</div>
                                                        <a href="http://sneakers.test/sneaker/asic-kem-de-nau-ban-cao-cap">
                                                            <img src="http://sneakers.test/storage/products/W8P3gKe5eDV4nbZIaHahV0auNTBzVGAgnliK4WIb.jpg"
                                                                alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#"
                                                                title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                                title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                                title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                                data-bs-target="#product_quick_view" href="#"
                                                                title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div
                                                            class="product-meta d-flex justify-content-between align-items-center">
                                                            <div class="product-manufacturer">
                                                                <a
                                                                    href="http://sneakers.test/sneaker/asic-kem-de-nau-ban-cao-cap">ASIC</a>
                                                            </div>
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a
                                                                href="http://sneakers.test/sneaker/asic-kem-de-nau-ban-cao-cap">Asic
                                                                Kem Đế Nâu Bản Cao Cấp</a></h4>
                                                        <p class="product-price">

                                                            <span class="price-new">450.000 VNĐ</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next next-2 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Next slide" aria-disabled="true"><i
                                            class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev prev-2 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="true"><i
                                            class="fa fa-angle-left"></i></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div> <!-- end of tab-pane -->
                        <div class="tab-pane  anime-tab" id="shop_77" role="tabpanel" aria-labelledby="nav_shop_77">
                            <div class="new-products pos-r">
                                <div class="element-carousel instance-3 swiper-container-initialized swiper-container-horizontal"
                                    data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <article
                                            class="swiper-slide product-layout swiper-slide-visible swiper-slide-active"
                                            style="width: 240px;">
                                            <div class="product-thumb">
                                                <div class="product-inner">
                                                    <div class="product-image">

                                                        <div class="label-product label-new">New</div>
                                                        <a href="http://sneakers.test/sneaker/samba">
                                                            <img src="/storage/products/HGPxtHnDmvGB1mPU3UyvfFcEjdwMAyGEeV3FJedV.jpg"
                                                                alt="Strive Shoulder Pack" title="Strive Shoulder Pack">
                                                        </a>
                                                        <div class="action-links">
                                                            <a class="action-btn btn-cart" href="#"
                                                                title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                                                            <a class="action-btn btn-wishlist" href="#"
                                                                title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                            <a class="action-btn btn-compare" href="#"
                                                                title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                            <a class="action-btn btn-quickview" data-bs-toggle="modal"
                                                                data-bs-target="#product_quick_view" href="#"
                                                                title="Quick View"><i class="pe-7s-search"></i></a>
                                                        </div>
                                                    </div> <!-- end of product-image -->

                                                    <div class="product-caption">
                                                        <div
                                                            class="product-meta d-flex justify-content-between align-items-center">
                                                            <div class="product-manufacturer">
                                                                <a href="http://sneakers.test/sneaker/samba">DIOR</a>
                                                            </div>
                                                            <div class="product-ratings">
                                                                <div class="rating-box">
                                                                    <ul class="rating d-flex">
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                        <li><i class="ion ion-md-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h4 class="product-name"><a
                                                                href="http://sneakers.test/sneaker/samba">Samba</a>
                                                        </h4>
                                                        <p class="product-price">

                                                            <span class="price-new">34.534.534 VNĐ</span>
                                                        </p>
                                                    </div><!-- end of product-caption -->
                                                </div><!-- end of product-inner -->
                                            </div><!-- end of product-thumb -->
                                        </article> <!-- end of product-layout -->

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next next-3 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Next slide" aria-disabled="true"><i
                                            class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev prev-3 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="true"><i
                                            class="fa fa-angle-left"></i></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div> <!-- end of tab-pane -->
                        <div class="tab-pane  anime-tab" id="shop_73" role="tabpanel" aria-labelledby="nav_shop_73">
                            <div class="new-products pos-r">
                                <div class="element-carousel instance-4 swiper-container-initialized swiper-container-horizontal"
                                    data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Slider Navigation -->
                                    <div class="swiper-arrow next next-4 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Next slide" aria-disabled="true"><i
                                            class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev prev-4 swiper-button-disabled" tabindex="0"
                                        role="button" aria-label="Previous slide" aria-disabled="true"><i
                                            class="fa fa-angle-left"></i></div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div> <!-- end of element-carousel -->
                            </div> <!-- end of new-products -->
                        </div> <!-- end of tab-pane -->
                    </div> <!-- end of tab-content -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Categories Section -->

    <!-- Start of Instagram Section -->
    <section class="instagram-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="section-title type-2 pt-full top-bordered">
                        <h2>Theo dõi chúng tôi trên Instagram</h2>
                        <p class="subtitle">Điều này giúp bạn có thể sớm biết được những sản phẩm mới về shop.</p>
                    </div>
                </div>
            </div> <!-- end of row -->

            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="instagram-container">
                        <!-- Slides -->
                        <div id="instagram_feed" class="swiper-wrapper image-popup" data-pswp-uid="1">
                        </div>
                        <!-- end of swiper-wrapper -->
                    </div> <!-- end of instagram-carousel -->
                    <div class="follow-link">
                        <a href="https://www.instagram.com/themeitems/" target="_blank">THEO DÕI INSTAGRAM </a>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    <!-- End of Instagram Section -->
@endsection
