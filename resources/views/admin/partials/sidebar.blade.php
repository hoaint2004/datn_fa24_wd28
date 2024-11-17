<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/theme/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/theme/assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/theme/assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/theme/assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.dashboard') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Bảng điều khiển</span>
                    </a>
                </li>

                {{-- Sidebar Danh Mục --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarCategories" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarCategories">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí danh mục</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCategories">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.index') }}" wire:navigate class="nav-link" data-key="t-chat"> Danh
                                    sách danh mục </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.categories.create') }}" wire:navigate class="nav-link" data-key="t-chat">
                                    Thêm mới danh mục </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Sidebar Product --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct_variants">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product_variants.index') }}" wire:navigate class="nav-link" data-key="t-chat"> Danh
                                    sách sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product_variants.create') }}" wire:navigate class="nav-link" data-key="t-chat">
                                    Thêm mới sản phẩm </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Sidebar Product_variants --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProduct_variants" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct_variants">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí biến thể sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProduct_variants">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.product_variants.index') }}" wire:navigate class="nav-link" data-key="t-chat"> Danh
                                    sách biến thể sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.product_variants.create') }}" wire:navigate class="nav-link" data-key="t-chat">
                                    Thêm mới biến thể sản phẩm </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- Sidebar Người dùng --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct_variants">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí người dùng</span>
                    </a>
                </li>

                {{-- Sidebar Đơn hàng --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProduct_variants">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí đơn hàng</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
