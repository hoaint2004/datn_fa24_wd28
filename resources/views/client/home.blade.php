@extends('Client.layouts.master')

@section('title')
Sneakers - Thế Giới Giày
@endsection

@section('content')
<div class="banner uk-position-relative uk-visible-toggle uk-light" tabIndex={-1}
    uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3000">
    <div class="uk-slideshow-items">
        @if (!empty($data['banners']))
        @foreach ($data['banners'] as $item)
        <div>
            <img src="{{ $item->image }}"
                alt="{{ $item->name }}" uk-cover="true" />
        </div>
        @endforeach
        @endif
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
            <img class="large-image"
                src="https://img.lazcdn.com/g/p/e42e02a29380f6e1233c97f64de96aa3.png_720x720q80.png" alt="" />
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
        @foreach($data['categoryLimit3'] as $category3)
        <a class="collection-list-item " href="#" title="Flash Sale">
            <div class="home-collection-list-item-image">
                <img src="{{$category3->image}}"
                    alt="Flash Sale" title="Flash Sale" width="480" height="480" decoding="async"
                    fetchpriority="auto">
            </div>
            <span>{{$category3->name}}</span>
        </a>
        @endforeach


    </div>
</section>

<section class="date-time-sale uk-container uk-container-large ">
    <div class="uk-grid" uk-grid="true">
        <div class="home-sale-left uk-width-1-3">

            <div class="date-time-image">
                <img src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_flashsale_d_img__1.jpg?1724041824574"
                    alt="" />
            </div>

            <div class="date-time-info">
                <div class="countdown">
                    <span class="days">
                        <b>020</b>
                        <br />
                        <div class="days-content">Ngày</div>
                    </span>
                    <span class="hours">
                        <b>07</b>
                        <br />
                        <div class="hours-content">Giờ</div>
                    </span>
                    <span class="minutes">
                        <b>004</b>
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

        <div class="uk-width-2-3 sale-product-right">   
            <div class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light"
                uk-slider="autoplay: false; autoplay-interval: 3000;">
                <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
                        @if (!empty($data['productNews']))
                        @foreach ($data['productNews'] as $key => $item)
                        <div class="product-item uk-width-1-4@m">
                            <div class="product-image">
                                <a href="{{ route('productDetail', $item->id) }}">
                                    <img src="" style="background-image: url({{ $item->image }}); padding: 110px 0" />
                                </a>
                                <span>-10%</span>
                                <i class="fas fa-heart icon-heart"
                                    style="color: #c90d0d; font-size: 1.25rem;"></i>
                                <div class="product-button">
                                    <button type="button" uk-toggle="target: #modal-container"
                                        class="quick-view-button" data-id="{{ $item->id }}">Xem
                                        nhanh</button>
                                </div>
                            </div>
                            <div class="product-review">
                                <a href="{{ route('categories', !empty($item->category->id) ? $item->category->id : '') }}">
                                    <span>{{ !empty($item->category->name) ? $item->category->name : '' }}</span>
                                </a>
                                <div class="icon text-[10px]">
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                </div>
                            </div>
                            <a href="{{ route('productDetail', !empty($item->id) ? $item->id : '') }}"
                                class="product-name">{{ !empty($item->name) ? $item->name :'' }}</a>
                            <div class="product-price">
                                <strong>{{ number_format($item->price, 0, ',', '.') }} ₫</strong>
                                @if (!empty($item->price_old))
                                <del>{{ number_format($item->price_old, 0, ',', '.') }} ₫</del>
                                @endif
                            </div>
                            <div class="product-item-detail-gallery-items">
                                <div class="product-item-detail-gallery-item">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                        alt="">
                                </div>
                                <div class="product-item-detail-gallery-item">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                        alt="">
                                </div>
                                <div class="product-item-detail-gallery-item">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                        alt="">
                                </div>
                                <div class="product-item-detail-gallery-item">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <button class="icon-left-product-date-time uk-position-center-left uk-position-small uk-hidden-hover" href
                        uk-slider-item="previous">
                        <i>‹</i>
                    </button>
                    <button class="icon-right-product-date-time uk-position-center-right uk-position-small uk-hidden-hover" href
                        uk-slider-item="next">
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
                <img src="//bizweb.dktcdn.net/thumb/2048x2048/100/520/624/themes/959507/assets/home_banner_lg_image_d.jpg?1724041824574"
                    alt="">
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

<section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light"
    uk-slider="autoplay: true; autoplay-interval: 3000;">
    <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <div class="title">
            <hr />
            <a href="#">
                <h2>SẢN PHẨM MỚI CẬP NHẬT</h2>
            </a>
            <hr />
        </div>
        <span class="sub-span-title">
            Top sản phẩm mới cập nhật
        </span>

        <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
            @if (!empty($data['productUpdateNews']))
            @foreach ($data['productUpdateNews'] as $key => $item)
            <div class="product-item uk-width-1-4@m">
                <div class="product-image">
                    <a href="{{ route('productDetail', $item->id) }}">
                        <img src="" style="background-image: url({{ $item->image }})" />
                    </a>
                    <span>-10%</span>
                    <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                    <div class="product-button">
                        {{-- <button>Thêm vào giỏ </button> --}}
                        <button type="button" uk-toggle="target: #modal-container" class="quick-view-button"
                            data-id="{{ $item->id }}">Xem
                            nhanh</button>
                    </div>
                </div>
                <div class="product-review">
                    <a href="{{ route('categories', !empty($item->category->id) ? $item->category->id : '') }}">
                        <span>{{ !empty($item->category->name) ? $item->category->name : '' }}</span>
                    </a>
                    <div class="icon">
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                    </div>
                </div>
                <a href="{{ route('productDetail', !empty($item->id) ? $item->id : '') }}"
                    class="product-name">{{ !empty($item->name) ?$item->name : '' }}</a>
                <div class="product-price">
                    <strong>{{ number_format($item->price, 0, ',', '.') }} ₫</strong>
                    @if (!empty($item->price_old))
                    <del>{{ number_format($item->price_old, 0, ',', '.') }} ₫</del>
                    @endif
                </div>
                <div class="product-item-detail-gallery-items">
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href
            uk-slider-item="previous">
            <i>‹</i>
        </button>
        <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href
            uk-slider-item="next">
            <i>›</i>
        </button>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</section>

<section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light"
    uk-slider="autoplay: true; autoplay-interval: 3000;">
    <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <div class="title">
            <hr />
            <a href="#">
                <h2>SẢN PHẨM PHỔ BIẾN</h2>
            </a>
            <hr />
        </div>
        <span class="sub-span-title">
            Top các sản phẩm phổ biển nhất
        </span>

        <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
            @if (!empty($data['productPopulars']))
            @foreach ($data['productPopulars'] as $key => $item)
            <div class="product-item uk-width-1-4@m">
                <div class="product-image">
                    <a href="{{ route('productDetail', $item->id) }}">
                        <img src="" style="background-image: url({{ $item->image }})" />
                    </a>
                    <span>-10%</span>
                    <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                    <div class="product-button">
                        {{-- <button>Thêm vào giỏ </button> --}}
                        <button type="button" uk-toggle="target: #modal-container" class="quick-view-button"
                            data-id="{{ $item->id }}">Xem
                            nhanh</button>
                    </div>
                </div>
                <div class="product-review">
                    <a href="{{ route('categories', $item->category->id) }}">
                        <span>{{ $item->category->name }}</span>
                    </a>
                    <div class="icon">
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                    </div>
                </div>
                <a href="{{ route('productDetail', $item->id) }}"
                    class="product-name">{{ $item->name }}</a>
                <div class="product-price">
                    <strong>{{ number_format($item->price, 0, ',', '.') }} ₫</strong>
                    @if (!empty($item->price_old))
                    <del>{{ number_format($item->price_old, 0, ',', '.') }} ₫</del>
                    @endif
                </div>
                <div class="product-item-detail-gallery-items">
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href
            uk-slider-item="previous">
            <i>‹</i>
        </button>
        <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href
            uk-slider-item="next">
            <i>›</i>
        </button>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</section>

<section class="product-list uk-container uk-container-large uk-position-relative uk-visible-toggle uk-light"
    uk-slider="autoplay: true; autoplay-interval: 3000;">
    <div class=" uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
        <div class="title">
            <hr />
            <a href="#">

                <h2>{{ !empty($data['categoryNewOne']->name) ? $data['categoryNewOne']->name : '' }}</h2>

            </a>
            <hr />
        </div>
        <span class="sub-span-title">
            Sản phẩm mới nhất của danh mục
        </span>

        <div class="home-product-list-wrapper uk-grid uk-slider-items" uk-grid="true">
            @if (!empty($data['categoryNewOne']->products))
            @foreach ($data['categoryNewOne']->products as $key => $item)
            <div class="product-item uk-width-1-4@m">
                <div class="product-image">
                    <a href="{{ route('productDetail', $item->id) }}">
                        <img src="" style="background-image: url({{ $item->image }})" />
                    </a>
                    <span>-10%</span>
                    <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                    <div class="product-button">
                        {{-- <button>Thêm vào giỏ </button> --}}
                        <button type="button" uk-toggle="target: #modal-container" class="quick-view-button"
                            data-id="{{ $item->id }}">Xem
                            nhanh</button>
                    </div>
                </div>
                <div class="product-review">
                    <a href="{{ route('categories', $item->category->id) }}">
                        <span>{{ $item->category->name }}</span>
                    </a>
                    <div class="icon">
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                        <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                    </div>
                </div>
                <a href="{{ route('productDetail', $item->id) }}"
                    class="product-name">{{ $item->name }}</a>
                <div class="product-price">
                    <strong>{{ number_format($item->price, 0, ',', '.') }} ₫</strong>
                    @if (!empty($item->price_old))
                    <del>{{ number_format($item->price_old, 0, ',', '.') }} ₫</del>
                    @endif
                </div>
                <div class="product-item-detail-gallery-items">
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                    <div class="product-item-detail-gallery-item">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                            alt="">
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <button class="icon-left-product uk-position-center-left uk-position-small uk-hidden-hover" href
            uk-slider-item="previous">
            <i>‹</i>
        </button>
        <button class="icon-right-product uk-position-center-right uk-position-small uk-hidden-hover" href
            uk-slider-item="next">
            <i>›</i>
        </button>
    </div>
    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
</section>

<!-- Modal xem nhanh-->
<div id="modal-container" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-width-large" style="max-width: 100vw; max-height: 100vh;">
        <input type="hidden" value="" class="modal-product-id">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-body uk-grid" uk-grid>
            <div class="uk-width-1-2">
                <img alt="" class="w-full rounded-lg" src=""
                    style="width: 100%; height: 70vh; object-fit: cover;  object-position: center" />
                <div class="flex mt-4 space-x-2 box-image-url uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                    <div class="uk-slider-container">
                        <ul class="uk-slider-items uk-child-width-1-5 uk-grid">
                            <!-- Ảnh thumbnail sẽ được append vào đây -->
                        </ul>
                    </div>

                    <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>
            </div>

            <div class="uk-width-1-2" style="overflow-y: hidden;">
                <h1 class="text-2xl font-bold text-[#222] title-model-detail"></h1>

                <div class="flex items-center mt-2 mb-3">
                    <div class="flex items-center">
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="ml-2 text-gray-600">(121 Đánh giá)</p>
                </div>

                <div class="flex items-center my-3 price">
                    <span class="text-2xl font-bold text-red-500 modal-price">

                    </span>

                    <span class="text-base text-gray-500 line-through ml-2">

                    </span>

                </div>
                
                <div class="flex items-center">
                    <span class="text-[#222] font-semibold">Danh mục:</span>
                    <p class="text-sm text-[#333] ml-2"></p>
                </div>
                <!-- <div class="mt-4">
                        <span class="text-2xl font-bold modal-price"></span>
                        <span class="text-xl line-through text-gray-500 ml-2 modal-price-old"></span>
                    </div> -->
                <p class="mt-4  mb-4 desc text-gray-600 modal-description">

                </p>
                <form action="{{ route('addToCart') }}" class="form-modal-addToCart" method="post">
                    <div class="color ">
                        <p class="text-lg font-bold mb-1">Màu sắc</p>
                        <div class="flex space-x-2 box-color">

                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="font-bold text-lg text-[#222] mb-1">Size</p>
                        <div class="flex space-x-2 box-size">

                        </div>
                    </div>
                    <div class="mt-7 flex items-center space-x-4">
                        <div class="flex items-center border border-gray-300 rounded-lg">
                            <button class="w-10 h-10 text-gray-600 quantity-selector-button-minus btn-minus">-</button>
                            <input name="quantity" class="w-12 input-quantity-modal h-10 text-center border-none quantity-selector-input"
                                type="text" value="1" />
                            <button class="w-10 h-10 text-gray-600 quantity-selector-button-plus btn-plus">+</button>
                        </div>
                        <button type="button" class="bt-add-cart-modal rounded-lg btnAddToCart">Thêm giỏ
                            hàng</button>
                        <button class="border border-gray-300 rounded-lg p-2">
                            <i class="far fa-heart text-gray-600"></i>
                        </button>
                    </div>
                </form>
                <div class="mt-7">
                    <span class="bg-green-100 text-green-600 px-2 py-1 rounded-lg">Còn hàng</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.btn-minus').on('click', function() {
            var currentValue = parseInt($('.input-quantity-modal').val());
            if (currentValue > 1) {
                $('.input-quantity-modal').val(currentValue - 1);
            }
        });

        $('.btn-plus').on('click', function() {
            var currentValue = parseInt($('.input-quantity-modal').val());
            $('.input-quantity-modal').val(currentValue + 1);
        });

        $('.input-quantity-modal').on('input', function() {
            var value = parseInt($(this).val());
            if (isNaN(value) || value < 1) {
                $(this).val(1);
            } else if (value > 9999) {
                $(this).val(9999);
            }
        });

        // Đảm bảo rằng bạn sử dụng .on('click') để cập nhật khi người dùng chọn màu và size
        $('.quick-view-button').on('click', function(e) {
            e.preventDefault();

            let productId = $(this).data('id');

            $.ajax({
                url: `/quick-view/${productId}`,
                type: 'GET',
                success: function(response) {

                    // Đổ dữ liệu vào modal
                    $('#modal-container .uk-width-1-2 img').attr('src', response.image);
                    $('#modal-container .modal-url').text(response.url);
                    $('#modal-container .modal-product-id').val(response.id);
                    $('#modal-container h1').text(response.name);
                    $('#modal-container p.text-sm').text(response.category_name);
                    $('#modal-container .product-price strong').text(response.price);
                    $('#modal-container .modal-description').text(response.description);
                    $('#modal-container .modal-price').text(response.price);
                    $('#modal-container .modal-price-old').text(response.price_old);

                    // Xóa các nội dung cũ
                    $('.box-color').empty();
                    $('.box-size').empty();

                    // Cập nhật danh sách màu sắc và size
                    response.variants.forEach(variant => {
                        // Tạo nút màu sắc, thêm checkbox cho mỗi màu
                        $('.box-color').append(
                            `<label>
                        <input type="radio" name="product-choose-color" value="${variant.color}" class="product-choose-color" />
                        <span class="bg-gray-300 px-4 py-2 rounded-lg">${variant.color}</span>
                    </label>`
                        );

                        // Cập nhật size theo màu khi nhấp nút màu
                        $(`input[name="product-choose-color"][value="${variant.color}"]`)
                            .on('change', function() {
                                $('.box-size').empty();
                                variant.sizes.forEach(size => {
                                    $('.box-size').append(
                                        `<label>
                                <input type="radio" name="product-choose-size" value="${size}" class="product-choose-size" />
                                <span class="bg-gray-200 px-4 py-2 rounded-lg">${size}</span>
                            </label>`
                                    );
                                });
                            });
                    });

                    // Kích hoạt màu đầu tiên mặc định
                    if (response.variants.length > 0) {
                        const firstColor = response.variants[0];
                        $(`input[name="product-choose-color"][value="${firstColor.color}"]`)
                            .prop('checked', false);
                        firstColor.sizes.forEach(size => {
                            $('.box-size').append(
                                `<label>
                                        <input type="radio" name="product-choose-size" value="${size}" class="product-choose-size" />
                                        <span class="bg-gray-200 px-4 py-2 rounded-lg">${size}</span>
                                    </label>`
                            );
                        });
                    }

                    if (response.images.length > 0) {
                        const firstImage = response.images;
                        let html = '<ul class="uk-slider-items uk-child-width-1-5 uk-grid-small uk-grid">';

                        firstImage.forEach(image => {
                            html += `
                                <li>
                                    <img alt="Thumbnail" class="thumbnail-image w-20 h-20 rounded-lg cursor-pointer" 
                                        src="${image.image_url}"
                                        style="width: 100px; height: 100px; object-fit: cover;" 
                                        onclick="changeMainImage('${image.image_url}')" />
                                </li>
                            `;
                        });
                        html += '</ul>';
                        $('.box-image-url .uk-slider-container').html(html);

                        $(document).on('click', '.thumbnail-image', function() {
                            let imageUrl = $(this).attr('src');
                            $('.uk-width-1-2 img:first').attr('src', imageUrl);
                        });
                    }


                    // Hiển thị modal
                    UIkit.modal('#modal-container').show();
                },
                error: function(xhr, status, error) {
                    console.error("Đã xảy ra lỗi khi tải sản phẩm:", error);
                }
            });
        });


        $('#modal-container .form-modal-addToCart').on('submit', function(e) {
            e.preventDefault();
            return false;
        });

        $('#modal-container .btnAddToCart').on('click', function(e) {
            e.preventDefault(); // Ngừng hành động mặc định của nút

            // Lấy giá trị từ form
            var form = $('#modal-container .form-modal-addToCart');
            var productId = $('#modal-container .modal-product-id').val();
            var color = $('#modal-container input[name="product-choose-color"]:checked').val();
            var size = $('#modal-container input[name="product-choose-size"]:checked').val();
            var quantity = $('#modal-container input[name="quantity"]').val();

            // Gửi dữ liệu qua AJAX
            if (color == null) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Vui lòng chọn màu sắc',
                    showConfirmButton: true,
                })

                return false;
            }

            if (size == null) {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Vui lòng chọn size',
                    showConfirmButton: true,
                })

                return false;
            }

            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: productId,
                    color: color,
                    size: size,
                    quantity: quantity
                },
                success: function(response) {
                    var cartCount = response.cartCount;
                    $('.cartCount').text(cartCount)
                    $('.countCartHeader').text('(' + cartCount + ')')
                    let html = `
                            <div class="warp">
                                <a href="${response.urlProduct}">
                                    <div style="background-image: url(${response.product.image});" class="img-mini-cart"> </div></a>
                                <div class="warp-body">
                                    <a href="${response.urlProduct}" class="product-name">${response.product.name}</a>
                                    <div class="price">
                                        <span><strong>${response.product.price}đ</strong></span>
                                    </div>
                                    <div class="data-size">
                                        <span>${response.data.color} / ${response.data.size}</span>
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-selector">
                                            <button aria-label="Giảm số lượng"
                                                data-cart-id="${response.data.id}"
                                                class="quantity-selector-button-minus btn-minus-header">
                                                -
                                            </button>
                                            <input class="quantity-selector-input input-cart-header"
                                                type="number" step="1" min="1" max="9999"
                                                aria-label="Số lượng sản phẩm"
                                                data-cart-id="${response.data.id}"
                                                value="${response.data.quantity}" readonly="">
                                            <button aria-label="Tăng số lượng"
                                                data-cart-id="${response.data.id}"
                                                class="quantity-selector-button-plus btn-plus-header">+
                                            </button>
                                        </div>
                                        <form data-product-id="${response.data.id}" class="form-deleteCart"
                                            action="${response.url}" method="post">
                                            @csrf
                                            <button class="cart-item-remove"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        `;
                    $('.sidebarCart').append(html);
                    if (response.status) {
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: response.message,
                            showConfirmButton: true,
                        })
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: response.message,
                            showConfirmButton: true,
                        })
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Lỗi khi thêm vào giỏ hàng:", error);
                }
            });
        });
    });

    // Thực hiện khi nhấn nút giảm số lượng
    $('.btn-minus-header').on('click', function() {
        var cartId = $(this).data('cart-id'); // Lấy ID sản phẩm trong giỏ hàng
        var quantityInput = $(this).siblings('.input-cart-header'); // Tìm input số lượng
        var quantity = parseInt(quantityInput.val()); // Lấy giá trị số lượng hiện tại

        // Giảm số lượng nếu > 1
        if (quantity > 1) {
            quantity--;
            quantityInput.val(quantity); // Cập nhật lại giá trị input
            updateQuantity(cartId, quantity); // Gửi yêu cầu AJAX để cập nhật số lượng
        }
    });

    // Thực hiện khi nhấn nút tăng số lượng
    $('.btn-plus-header').on('click', function() {
        var cartId = $(this).data('cart-id'); // Lấy ID sản phẩm trong giỏ hàng
        var quantityInput = $(this).siblings('.input-cart-header'); // Tìm input số lượng
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