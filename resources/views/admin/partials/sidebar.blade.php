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
                </li> <!-- end Dashboard Menu -->

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

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarProducts">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí sản phẩm</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProducts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.products.index') }}" wire:navigate class="nav-link" data-key="t-chat"> Danh
                                    sách sản phẩm </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.products.create') }}" wire:navigate class="nav-link" data-key="t-chat">
                                    Thêm mới sản phẩm </a>
                            </li>
                        </ul>
                    </div>
                </li>
{{-- voucher --}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarVoucher" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarVoucher">
                        <i class="ri-stack-line"></i> <span data-key="t-apps">Quản lí discount</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarVoucher">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.discounts.index') }}" wire:navigate class="nav-link" data-key="t-chat"> Danh
                                    sách discount</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.discounts.create') }}" wire:navigate class="nav-link" data-key="t-chat">
                                    Thêm mới discount</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#comments" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="comments">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Quản lí bình luận</span>
                    </a>
                    <div class="collapse menu-dropdown" id="comments">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('admin.comments.index') }}" class="nav-link" data-key="t-chat"> Danh sách bình luận
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
