@extends('client.layouts.master')
@section('title', 'HomePage')
@section('content')
    <div class="banner uk-position-relative uk-visible-toggle uk-light" tabIndex={-1} uk-slideshow="animation: fade">
      <div class="uk-slideshow-items">
        <div>
        <img
           src="{{ url('storage/images/Banner/2.png') }}"
            alt="Slide 1"
            uk-cover="true"
        />
        </div>
        <div>
          <img
           src="{{ url('storage/images/Banner/1.png') }}"
            alt="Slide 2"
            uk-cover="true"
          />
        </div>
        <div>
          <img
           src="{{ url('storage/images/Banner/3.png') }}"
            alt="Slide 3"
            uk-cover="true"
          />
        </div>
        <div>
          <img
           src="{{ url('storage/images/Banner/4.png') }}"
            alt="Slide 4"
            uk-cover="true"
          />
        </div>
        <div>
          <img
           src="{{ url('storage/images/Banner/5.png') }}"
            alt="Slide 5"
            uk-cover="true"
          />
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
                    alt=""
                />
                <!-- <img class="small-image" src="https://bizweb.dktcdn.net/100/062/136/products/gta49-2.jpg?v=1711008704143" alt="" /> -->
            </div>
        </div>
    </section>

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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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

    <section class="date-time-sale uk-container uk-container-large">
        <div class="uk-grid" uk-grid="true">

          <div class="home-sale-left uk-width-1-3">

            <div class="date-time-image">
              <img src="https://bizweb.dktcdn.net/thumb/grande/100/520/624/themes/959507/assets/home_flashsale_d_img__1.jpg?1724041824574" alt="" />
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

          <div class="uk-width-2-3">
            <div class="home-product-list-wrapper uk-grid" uk-grid="true">
            <div class="product-item uk-width-1-4@m">
            <div class="product-image">
              <a href="#">
                <img
                  src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
          </div>
        </div>
    </section>

    <section class="brand uk-container uk-container-large">
        <div class="title">
          <hr />
          <a href="#">
            <h2>Thương Hiệu</h2>
          </a>
          <hr />
        </div>
        <span class="sub-span-title">
        Các thương hiệu tin dùng chúng tôi
        </span>
        <div class="uk-grid" uk-grid="true" >
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/jordan.jpeg') }}" alt="" />
          </a>
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/adidas.png') }}" alt="" />
          </a>
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/alexsander.png') }}" alt="" />
          </a>
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/gucci.jpg') }}" alt="" />
          </a>
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/nike.jpg') }}" alt="" />
          </a>
          <a href="#" class="uk-width-1-6 uk-transition-toggle" tabIndex={0}>
            <img class="uk-transition-scale-up uk-transition-opaque" src="{{ url('storage/images/Brand/puma.jpg') }}" alt="" />
          </a> 
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
                  alt=""
                />
              </a>
              <span>-10%</span>
              <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
              <div class="product-button">
                <button>Thêm vào giỏ </button>
                <button>Xem nhanh</button>
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
</body>
</html>

@endsection()