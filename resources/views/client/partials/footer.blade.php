<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
   
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

  <footer >
      <section class="uk-container uk-container-large section-ft pt-[38px]">  
        <div class="container">
          <h2 class="text-3xl mb-[10px] m-0">Nhận ưu đãi và coupon mới nhất!</h2>
          <p class="m-0 text-[15px] mb-[20px]">Chúng tôi cam kết bảo mật thông tin của bạn.</p>
          <form action="">
            <input class="input-ft focus:outline-none" type="email" placeholder="Nhập địa chỉ email của bạn" />
            <button class="button-ft" type="submit" aria-label="Đăng ký nhận tin">
              Đăng ký
            </button>
          </form>
          <p class="text-[15px] m-0 mt-[10px] mb-[15px]">
              Nhận ngay coupon giảm <b class="font-bold text-black">15%</b> khi đăng ký ngay
            </p>
        </div>
      </section>

      <section class="uk-container uk-container-large ft-copyright"> 
        <div class="ft-warp pt-[5rem]">
            <div class="ft-top uk-grid " uk-grid="true">
            <div class="ft-top-item-one uk-width-1-4 uk-width-1-4@l uk-width-1-2@s uk-width-1-4@m">
              <a href="#">
                <img height={29} width={160} 
                  src="https://bizweb.dktcdn.net/thumb/medium/100/520/624/themes/959507/assets/shop_logo_image.png?1724041824574"
                  alt=""
                />
              </a>
              <p class="m-0 mt-4 mb-1 leading-7 text-[15px]">
                Minh Hiếu luôn cam kết, đảm bảo bàn giao sản phẩm đạt chất lượng
                tối ưu nhất đến tay người dùng.
                <br />
                Mã số thuế: 01234567891 do Sở Kế hoạch và Đầu tư Tp Hà Nội cấp
                ngày 13/02/2024
              </p>
              <p class="ft-top-info">
                <a href="#">
                  <i class="fas fa-location-dot" style="color: black; margin-right: 10px;"></i>
                  Chi Phú, Sơn Đà, Ba Vì,TP Hà Nội
                </a>
              </p>
              <p class="ft-top-info">
                <a href="#">
                  <i class="fas fa-envelope" style="color: black; margin-right: 10px;"></i>
                  hieunm@sieunhan.vn
                </a>
              </p>
              <p class="ft-top-info">
                <a href="#">
                  <i class="fas fa-phone-volume" style="color: black; margin-right: 10px;"></i>
                  0988697904
                </a>
              </p>
            </div>
            <div class="ft-top-item-two uk-width-1-5 uk-width-1-5@l uk-width-1-2@s uk-width-1-4@m">
              <h4>Liên hệ</h4>
              <div class="ft-top-item-content">
                <p class="text text-[15px] leading-7">
                  Tư vấn dịch vụ: <a href="#">0988697904</a>
                  <br />
                  Hỗ trợ dịch vụ: <a href="#">0988697904</a>
                  <br />
                  Hỗ trợ vận chuyển: <a href="#">0988697904</a>
                  <br />
                  Email: <a href="#">hieunm@sieunhan.vn</a>
                  <br />
                  Từ 7h00 - 22h00 các ngày từ thứ 2 đến Chủ nhật
                </p>
              </div>
            </div>
            <div class="ft-top-item-three uk-width-1-6 uk-width-1-6@l uk-width-1-2@s uk-width-1-4@m">
              <h4>Về chúng tôi</h4>
              <div class="ft-top-item-content">
                <ul class="p-0 text-[15px] leading-[34px]">
                  <li><a href="#">Giới thiệu</a></li>
                  <li><a href="#">Chính sách bảo mật</a></li>
                  <li><a href="#">Chinh sách đổi trả</a></li>
                  <li><a href="#">Điều khoản dịch vụ</a></li>
                  <li><a href="#">Trang chủ</a></li>
                </ul>
              </div>
            </div>
            <div class="ft-top-item-four uk-width-1-6 uk-width-1-6@l uk-width-1-2@s uk-width-1-4@m">
              <h4>Danh mục</h4>
              <div class="ft-top-item-content">
                <ul class="p-0 text-[15px] leading-[34px]">
                  <li><a href="#">Giày nam</a></li>
                  <li><a href="#">Giày nữ</a></li>
                  <li><a href="#">Giày siêu nhân</a></li>
                  <li><a href="#">Giày đá bóng</a></li>
                  <li><a href="#">Giày thể thao</a></li>
                </ul>
              </div>
            </div>
            <div class="ft-top-item-five uk-width-1-5 uk-width-1-5@l uk-width-1-1@s uk-width-1-1@m">
              <h4>Liên hệ chúng tôi</h4>
              <div class="ft-top-item-content text-[15px] leading-[34px]">
                <p>Luôn cập nhật tất cả các hành động mà chúng tôi đã lưu cho tất cả khách hàng của mình.</p>
                <ul class="flex pt-5">
                  <li class=" text-[30px] leading-7"><a href=""><i class="fab fa-facebook" style="color: #3A559F;"></i></a></li>
                  <li class="pl-4 text-[30px] leading-7"><a href=""><i class="fab fa-youtube" style="color: #FF0000;"></i></a></li>
                  <li class="pl-4 text-[30px] leading-7"><a href=""><i class="fab fa-pinterest" style="color: #CB2027;"></i></a></li>
                  <li class="pl-4 text-[30px] leading-7"><a href=""><i class="fab fa-tiktok" style="color: #010101;"></i></a></li>
                  <li class="pl-4 text-[30px] leading-7"><a href=""><i class="fab fa-instagram" style="color: #C13584;"></i></a></li>
                </ul>
              </div>
            </div>
            </div>
            <div class="ft-bot pt-[42px] pb-[30px] flex justify-between items-center border-t-2 border-t-red-500">
            <p class="m-0 text-[15px] leading-7">
              © 2024 - Bản quyền thuộc về
              <a href="#">
                <strong> F1GENZ TECHNOLOGY CO., LTD. </strong>
              </a>
              <a href="#">
                Cung cấp bởi <strong>Sapo</strong>
              </a>
            </p>
            <ul class="flex leading-7">
                  <li class="px-3"><a href=""><i class="fab fa-facebook fa-lg" style="color: #3A559F;"></i></a></li>
                  <li class="px-3"><a href=""><i class="fab fa-youtube fa-lg" style="color: #FF0000;"></i></a></li>
                  <li class="px-3"><a href=""><i class="fab fa-pinterest fa-lg" style="color: #CB2027;"></i></a></li>
                  <li class="px-3"><a href=""><i class="fab fa-tiktok fa-lg" style="color: #010101;"></i></a></li>
                  <li class="px-3"><a href=""><i class="fab fa-instagram fa-lg" style="color: #C13584;"></i></a></li>
              </ul>
            </div>
        </div>
      </section>

  </footer>

</body>
</html>