<header uk-sticky="top: 100; animation: uk-animation-slide-top">
    <div class="header-warp uk-container uk-container-large">
        <div class="uk-grid" uk-grid="true">
            <!-- Phần tìm kiếm bên trái -->
            <div class="form header-left uk-width-1-3 uk-flex uk-flex-middle">
                <form action="" class="form-search">
                    <input type="text" name="keyword" placeholder="Bạn cần tìm gì..." />
                    <button>
                        <SearchOutlined class="icon-search" />
                    </button>
                </form>
            </div>

            <!-- Phần logo ở giữa -->
            <!-- Phần logo ở giữa -->
            <div class="header-center uk-width-1-3 uk-flex uk-flex-center uk-flex-middle">
                <a href="{{ route('home') }}">
                    <h1 style="font-size: 35px;">Wina Shoes</h1>
                    {{-- <img src="https://bizweb.dktcdn.net/thumb/medium/100/520/624/themes/959507/assets/shop_logo_image.png?1724041824574"
                        alt="" /> --}}
                </a>
            </div>

            <!-- Phần icon bên phải -->
            <div class="header-right uk-width-1-3 uk-flex uk-flex-right uk-flex-middle">
                <!-- Dropnav cho biểu tượng user -->
                <div>
                    <a href="#" class="uk-icon-link header-icon" uk-icon="icon: user"
                        uk-toggle="target: #dropnav-user"></a>
                </div>

                <!-- Dropnav hiện ra khi nhấn vào icon user -->
                <div id="dropnav-user"
                    uk-drop="mode: click; pos: bottom-center; offset: 10; animation: reveal-top; animate-out: true; duration: 700"
                    class="uk-card uk-card-body uk-card-default uk-background-default uk-box-shadow-small uk-padding-small">
                    <ul class="uk-nav uk-dropdown-nav dropnav-user-header">
                        @if (Auth::check())
                            <li><a class="user-header" href="{{ route('account') }}">Thông tin tài khoản</a></li>
                            <a class="user-header" href="{{ route('logout') }}">Logout</a>
                        @else
                            <li><a class="user-header" href="{{ route('register.form') }}">Đăng ký</a></li>
                            <li><a class="user-header" href="{{ route('login.form') }}">Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>

                <div>
                    <a href="#" class="uk-icon-link header-icon" uk-icon="icon: heart"></a>
                </div>

                @php
                    $carts = \App\Models\Cart::where('user_id', Auth::user()->id ?? 0)
                        ->orderBy('id', 'DESC')
                        ->limit(5)
                        ->get();
                @endphp

                <!-- cart -->
                <div>
                    <a href="#" class="uk-icon-link header-icon" uk-icon="icon: bag"
                        uk-toggle="target: #offcanvas-flip">
                        <span class="cart-counter">{{ !empty($carts) ? $carts->count() : '' }}</span>
                    </a>
                </div>

                <div class="offcanvas-cart" id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar offcanvas-cart-body">
                        <button class="uk-offcanvas-close" type="button" uk-close style="color: red;"></button>
                        <div class="modal-header">
                            <h3 class="modal-title">Giỏ hàng của tôi
                                <span class="cart-panel-counter"
                                    style="opacity: 1;">({{ !empty($carts) ? $carts->count() : '' }})</span>
                            </h3>
                            <a href="#" class="close-account-panel button-close">
                                <i class="fas fa-close"></i>
                            </a>
                        </div>

                        <div class="mini-cart-product">
                            @if (!empty($carts))
                                @php
                                    $total = 0;
                                @endphp
                                @foreach ($carts as $item)
                                    @php
                                        $total += $item->quantity * $item->product->price;
                                    @endphp
                                    <div class="warp">
                                        <a href="#">
                                            <img src="{{ $item->product->image }}" alt="" width="120px"></a>
                                        <div class="warp-body">
                                            <a href="#" class="product-name">{{ $item->name }}</a>
                                            <div class="price">
                                                <span><strong>{{ number_format($item->product->price, 0, ',', '.') }}đ</strong></span>
                                            </div>
                                            <div class="data-size">
                                                <span>{{ $item->color }} / {{ $item->size }}</span>
                                            </div>
                                            <div class="quantity">
                                                <div class="quantity-selector">
                                                    <button aria-label="Giảm số lượng"
                                                        data-cart-id="{{ $item->id }}"
                                                        class="quantity-selector-button-minus btn-minus-header">
                                                        -
                                                    </button>
                                                    <input class="quantity-selector-input input-cart-header"
                                                        type="number" step="1" min="1" max="9999"
                                                        aria-label="Số lượng sản phẩm"
                                                        data-cart-id="{{ $item->id }}"
                                                        value="{{ $item->quantity }}" readonly="">
                                                    <button aria-label="Tăng số lượng"
                                                        data-cart-id="{{ $item->id }}"
                                                        class="quantity-selector-button-plus btn-plus-header">+
                                                    </button>
                                                </div>
                                                <form data-product-id="{{ $item->id }}" class="form-deleteCart"
                                                    action="{{ route('cart.delete', $item->id) }}" method="post">
                                                    @csrf
                                                    <button class="cart-item-remove"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="total-action">
                            <p class="mini-cart-total ">
                                <span class="subtotal">Tổng tiền:</span>
                                <bdi class="currencysymbol">
                                    <span class="currencysymbol">{{ number_format($total, 0, ',', '.') }}đ</span>

                                </bdi>
                            </p>
                            <p class="mini-cart-button">
                                <a href="{{ route('showCart') }}" class="pay-money" title="Tiếp tục mua hàng">Giỏ
                                    Hàng</a>
                                <a href="#" class="continue-shopping" title="Thanh toán">Thanh toán</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bot border-b border-gray-300 shadow-md uk-container uk-container-expand">
        <nav class="menu-header" uk-navbar uk-dropnav="dropbar: true">
            <!-- Nút toggle cho menu trên thiết bị di động -->
            <div class="navbar-toggle">
                <button class="toggle-navbar" type="button" uk-toggle="target: #offcanvas-menu">
                    <span class="icon-toggle" uk-navbar-toggle-icon></span>
                </button>
            </div>

            <!-- Menu chính -->
            <div class="navbar-menu alo">
                <ul class="flex justify-center m-0 p-0 gap-8 uk-subnav">
                    <li><a href="{{ route('home') }}">Trang chủ</a></li>

                    <!-- Danh mục sản phẩm với menu con và dropbar -->
                    <li class="uk-parent">
                        <a href="{{ route('category') }}" class="">Danh mục sản phẩm <span>›</span></a>
                        <div class="uk-dropdown uk-width-2xlarge">
                            <div class="uk-child-width-1-3@m aloo11" uk-grid>
                                <!-- Nổi bật -->
                                @php
                                    $categories = \App\Models\Category::orderBy('id', 'DESC')->get();
                                @endphp
                                @if (!empty($categories))
                                    <div>
                                        <ul class="uk-nav uk-dropdown-nav">
                                            @foreach ($categories as $item)
                                                <li class="uk-nav-header">
                                                    <a
                                                        href="{{ route('categories', $item->id) }}">{{ $item->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </li>

                    <!-- Sản phẩm nổi bật với menu con và dropbar -->
                    <li class="uk-parent">
                        <a href="#">Sản phẩm nổi bật <span>›</span></a>
                        <div class="uk-dropdown uk-width-2xlarge">
                            <div class="uk-child-width-1-4@m" uk-grid>
                                <!-- Nổi bật -->
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Nổi bật 1</a></li>
                                        <li><a href="#">Nổi bật 2</a></li>
                                    </ul>
                                </div>

                                <!-- Giày nam -->
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Nổi bật 3</a></li>
                                        <li><a href="#">Nổi bật 4</a></li>
                                    </ul>
                                </div>
                                <!-- Giày nam -->

                            </div>
                        </div>
                    </li>
                        <li><a href="#">Xu hướng thời trang</a></li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id="offcanvas-menu" uk-offcanvas="mode: push; overlay: true">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close="true"></button>
                <ul class="uk-nav uk-nav-default">
                    <li>
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ route('category') }}">Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="#">Sản phẩm nổi bật</a>
                    </li>
                    <li>
                        <a href="#">Xu hướng thời trang</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </header>
</body>

</html>
<script>
    $(document).ready(function() {
        $(document).on('submit', '.form-deleteCart', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'warning',
                title: 'Bạn có muốn xóa sản phẩm này không?',
                showDenyButton: true,
                confirmButtonText: 'Xóa',
                denyButtonText: `Hủy`,
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();v
                }
            });
        });
    });
</script>
