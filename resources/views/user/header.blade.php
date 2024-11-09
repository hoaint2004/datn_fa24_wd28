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
<header uk-sticky="top: 100; animation: uk-animation-slide-top">
      <div class="header-warp uk-container uk-container-large">
        <div class="uk-grid" uk-grid="true">
          <div class="form header-left uk-width-1-3 uk-flex uk-flex-middle ">
            <form action="" class="form-search">
              <input
                type="text"
                name="keyword"
                placeholder="Bạn cần tìm gì..."
              />
              <button>
                <SearchOutlined class="icon-search" />
              </button>
            </form>
          </div>
          <div class="header-center uk-width-1-3 uk-flex uk-flex-center uk-flex-middle">
            <a href="">
              <img
                src="https://bizweb.dktcdn.net/thumb/medium/100/520/624/themes/959507/assets/shop_logo_image.png?1724041824574"
                alt=""
              />
            </a>
          </div>
          <div class="header-right uk-width-1-3 uk-flex uk-flex-right uk-flex-middle">
            <a href="{{ route('account')}}">
              <i class="header-icon fa-regular fa-user"></i>
            </a>
            <a href="#">
              <i class="header-icon fa-regular fa-heart"></i>
            </a>
            <a href="#">
            <i class="header-icon fa-solid fa-cart-shopping"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="header-bot border-b border-gray-300 shadow-md uk-container uk-container-expand">
        <nav class="menu-header" uk-navbar="true">
          <div class="navbar-toggle">
            <button
              class="toggke-navbar"
              type="button"
              uk-toggle="target: #offcanvas-menu"
            >
              <span class="icon-togge" uk-navbar-toggle-icon="true"></span>
            </button>
          </div>

          <div class="navbar-menu alo">
            <ul class="flex justify-center m-0 p-0 gap-8"> 
              <li>
                <a href="#">Trang chủ</a>
              </li>
              <li>
                <a href="#">
                  Danh mục sản phẩm <span>›</span>
                </a>
              </li>
              <li>
                <a href="#">
                  Sản phẩm nổi bật <span>›</span>
                </a>
              </li>
              <li>
                <a href="#">Xu hướng thời trang</a>
              </li>
              <li>
                <a href="#">Liên hệ</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div id="offcanvas-menu" uk-offcanvas="mode: push; overlay: true">
        <div class="uk-offcanvas-bar">
          <button
            class="uk-offcanvas-close"
            type="button"
            uk-close="true"
          ></button>
          <ul class="uk-nav uk-nav-default">
            <li>
              <a href="#">Trang chủ</a>
            </li>
            <li>
              <a href="#">Danh mục sản phẩm</a>
            </li>
            <li>
              <a href="#">Sản phẩm nổi bật</a>
            </li>
            <li>
              <a href="#">Xu hướng thời trang</a>
            </li>
            <li>
              <a href="#">Liên hệ</a>
            </li>
          </ul>
        </div>
      </div>

    </header>
</body>
</html>