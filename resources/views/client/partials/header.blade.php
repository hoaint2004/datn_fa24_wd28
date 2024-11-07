<header class="header bgc-white header-type-1">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 order-2 col-sm-12 order-sm-2 col-md-8 order-md-1 align-self-center">
                    <p>GIẢM GIÁ giữa mùa lên tới 20%. Sử dụng mã "SALEOFF20"</p>
                </div>
                <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2">
                    <ul class="list-inline">
                        <li class="currency list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle"> USD $<i class="fa fa-angle-down"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#">Euro €</a></li>
                                        <li><a href="#" class="current">USD $</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="language list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle">English <i
                                        class="fa fa-angle-down"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#" class="current"><img src="{{ asset('assets/sneakers/assets/images/icons/en-gb.jpg') }}"
                                                    alt="Icons"> English</a></li>
                                        <li><a href="#"><img src="{{ asset('assets/sneakers/assets/images/icons/fr-fr.jpg') }}" alt="Icons">
                                                Việt Nam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of top-bar -->

    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                    <div class="header-search-area">
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Tìm kiếm ở đây ...">
                                <div class="input-group-append">
                                    <button class="header-search-btn" type="submit"><i
                                            class="pe-7s-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets/sneakers/assets/images/logo.png') }}" alt="Logo" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                    <div class="header-cart-area">
                        <div class="header-cart">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle icon-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="count-style">2</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="shopping-cart-content">
                                        <ul class="list-unstyled">
                                            <li class="single-cart-item media">
                                                <div class="shopping-cart-img me-4">
                                                    <a href="#">
                                                        <img class="img-fluid" alt="Cart Item"
                                                            src="{{ asset('assets/sneakers/assets/images/cart/cart-1.jpg') }}">
                                                        <span class="product-quantity">1x</span>
                                                    </a>
                                                </div>
                                                <div class="shopping-cart-title flex-grow-1">
                                                    <h4><a href="#">Rival Field Messenger</a></h4>
                                                    <p class="cart-price">$120.00</p>
                                                    <div class="product-attr">
                                                        <span>Size: S</span>
                                                        <span>Color: Black</span>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-md-close"></i></a>
                                                </div>
                                            </li>
                                            <li class="single-cart-item media">
                                                <div class="shopping-cart-img me-4">
                                                    <a href="#">
                                                        <img class="img-fluid" alt="Cart Item"
                                                            src="{{ asset('assets/sneakers/assets/images/cart/cart-2.jpg') }}">
                                                        <span class="product-quantity">2x</span>
                                                    </a>
                                                </div>
                                                <div class="shopping-cart-title flex-grow-1">
                                                    <h4><a href="#">Fusion Backpack</a></h4>
                                                    <p class="cart-price">$200.00</p>
                                                    <div class="product-attr">
                                                        <span>Color: White</span>
                                                        <span>Accessories: Yes</span>
                                                    </div>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="ion ion-md-close"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-total">
                                            <h4>Sub-Total : <span>$320.00</span></h4>
                                            <h4>Total : <span>$320.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-btn">
                                            <a class="default-btn" href="cart.html">view cart</a>
                                            <a class="default-btn" href="checkout.html">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-inline">
                            <li class="top-links list-inline-item">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a href="{{ route('register.form') }}">Đăng ký</a></li>
                                            <li><a href="{{ route('login.form') }}">Đăng nhập</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- end of header-cart-area -->
                </div>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of header-top -->



    <!-- Start of Main and Mobile Navigation -->
    <div class="main-nav-area bgc-white">
        <div class="container">
            <nav id="main_nav" class="stellarnav">
                <ul>
                    <li><a href="/"><span>Trang chủ</span></a></li>
                    <li class="mega" data-columns="4"><a href="/collections/sneakers"><span>Sản phẩm</span></a>
                        <ul class="mega-container">
                            <li><a href="#" class="mega-menu-title">
                                    <h3>Shop pages 01</h3>
                                </a>
                                <ul>
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="mega-menu-title">
                                    <h3>Shop pages 02</h3>
                                </a>
                                <ul>
                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                    <li><a href="single-product.html">Single Product Page</a></li>
                                    <li><a href="compare.html">Product Compare</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="mega-menu-title">
                                    <h3>Shop pages 03</h3>
                                </a>
                                <ul>
                                    <li><a href="cart.html">Cart Page</a>
                                    <li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                </ul>
                            </li>
                            <li class="last"><a href="#" class="mega-menu-title">
                                    <h3>Shop pages 04</h3>
                                </a>
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="{{ route('register.form') }}">Register</a></li>
                                </ul>
                            </li>
                            <li class="fullwidth-banner">
                                <a href="#"><img src="{{ asset('assets/sneakers/assets/images/banners/menu-banner.jpg') }}"
                                        alt="Menu Banner"></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/collections/sneakers"><span>Danh mục</span></a>
                        <ul>
                            <li><a href="">ADIDAS</a></li>
                            <li><a href="">AF1</a></li>
                        </ul>
                    </li>
                    <li><a href="/blog"><span>Tin tức</span></a>
                        <ul>
                            <li><a href="faqs.html">FAQs Page</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html"><span>Giới thiệu</span></a></li>
                    <li><a href="contact.html"><span>Liên hệ</span></a></li>
                </ul>
            </nav>
        </div> <!-- end of container -->
    </div>
    <!-- End of Main and Mobile Navigation -->
</header>
