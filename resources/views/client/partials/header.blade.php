<header uk-sticky="top: 100; animation: uk-animation-slide-top">
    <div class="header-warp uk-container uk-container-large">
        <div class="uk-grid" uk-grid="true">
            <!-- Phần tìm kiếm bên trái -->
            <div class="form header-left uk-width-1-3 uk-flex uk-flex-middle">
                <form action="" class="form-search">
                    <input type="text" name="keyword" placeholder="Bạn cần tìm gì..." />
                    <button uk-icon="search" class="icon-search">

                    </button>
                </form>
            </div>

            <!-- Phần logo ở giữa -->
            <div class="header-center uk-width-1-3 uk-flex uk-flex-center uk-flex-middle">
                <a href="{{ route('home') }}" class="logo-page">
                    <h1>Wina Shoes</h1>
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
                        @if (Auth::check() && Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="user-header">Trang quản trị</a>
                        @endif
                        <a class="user-header" href="{{ route('logout') }}">Đăng xuất</a>
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
                $cartsAll = \App\Models\Cart::where('user_id', Auth::user()->id ?? 0)
                ->orderBy('id', 'DESC')
                ->get();
                @endphp

                <!-- cart -->
                <div>
                    <a href="#" class="uk-icon-link header-icon" uk-icon="icon: bag"
                        uk-toggle="target: #offcanvas-flip">
                        <span class="cart-counter cartCount">{{ !empty($cartsAll) ? $cartsAll->count() : '' }}</span>
                    </a>
                </div>

                <div class="offcanvas-cart" id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
                    <div class="uk-offcanvas-bar offcanvas-cart-body">
                        <button class="uk-offcanvas-close" type="button" uk-close style="color: red;"></button>
                        <div class="modal-header">
                            <h3 class="modal-title">Giỏ hàng của tôi
                                <span class="cart-panel-counter countCartHeader"
                                    style="opacity: 1;">({{ !empty($cartsAll) ? $cartsAll->count() : '' }})</span>
                            </h3>
                            <a href="#" class="close-account-panel button-close">
                                <i class="fas fa-close"></i>
                            </a>
                        </div>

                        <div class="mini-cart-product sidebarCart">
                            @if (!empty($carts))
                            @php
                            $total = 0;
                            @endphp
                            @foreach ($carts as $item)
                            @php
                            $total += $item->quantity * $item->product->price;
                            @endphp
                            <div class="warp">
                                <a href="{{ route('productDetail', $item->product->id) }}">
                                    <div style="background-image: url({{ $item->product->image }});" class="img-mini-cart"></div>
                                    <div class="warp-body">
                                        <a href="{{ route('productDetail', $item->product->id) }}" class="product-name">{{ $item->product->name }}</a>
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
                                <a href="{{ route('order.create') }}" class="continue-shopping"
                                    title="Thanh toán">Thanh toán</a>
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
                                $categories = \App\Models\Category::where('status', 0)->orderBy('id', 'DESC')->get();
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
                            <div class="uk-child-width-1-3@m" uk-grid>
                                <!-- Nổi bật -->
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-grid uk-grid-medium uk-child-width-1-1 uk-margin-remove">
                                        @php
                                        $data['productFeatured'] = \App\Models\Variants::select('variants.product_id')
                                        ->selectRaw('SUM(variants.quantity) as quan')
                                        ->join('products', 'products.id', '=', 'variants.product_id')
                                        ->where('products.status', 0)
                                        ->groupBy('variants.product_id')
                                        ->orderByDesc('quan')
                                        ->with('product')
                                        ->take(2)
                                        ->get();
                                        @endphp

                                        @foreach($data['productFeatured'] as $item => $product)
                                        <li class="uk-margin-small-bottom">
                                            <a href="{{ route('featured_products', $product->product_id) }}">
                                                {{ $product->product->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>


                                <!-- Giày nam -->
                                {{-- <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Nổi bật 3</a></li>
                                        <li><a href="#">Nổi bật 4</a></li>
                                    </ul>
                                </div> --}}
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
                    this.submit();
                    v
                }
            });
        });
    });
</script>