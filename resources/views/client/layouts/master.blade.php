<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/sneakers/assets/images/favicon.ico') }}">

    <!-- CSS files
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/account.css') }}">
    
    <!-- Boostrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/pe-icon-7-stroke.css') }}">

    <!-- Plugins stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/plugins.css') }}">

    <!-- Master stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/style.css') }}">

    {{-- Account stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/account.css') }}">

    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/sneakers/assets/css/responsive.css') }}">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{ asset('assets/sneakers/assets/js/modernizr-2.8.3.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @yield('styleRegister')
</head>

<body>
    <!-- Start of Whole Site Wrapper with mobile menu support -->
    <div id="whole" class="whole-site-wrapper">

        <!-- Start of Header -->
        @include('client.partials.header')
        <!-- End of Header -->

        <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
			@yield('content')
        </main>
        <!-- End of Main Content Wrapper -->


        @include('Client.partials.footer')

        <!-- Start of Scroll to Top -->
        <div id="to_top">
            <i class="ion ion-ios-arrow-forward"></i>
            <i class="ion ion-ios-arrow-forward"></i>
        </div>
        <!-- End of Scroll to Top -->
    </div>
    <!-- End of Whole Site Wrapper -->

    <!-- Initializing Photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Photoswipe -->

    @yield('script')
    <!-- JS
    ============================================ -->
    {{-- JS index --}}
    {{-- <script src="{{ asset('assets/sneakers/assets/js/index.js') }}"></script> --}}

    <!-- jQuery JS -->
    <script src="{{ asset('assets/sneakers/assets/js/jquery.1.12.4.min.js') }}"></script>

    <!-- Popper JS -->
    <script src="{{ asset('assets/sneakers/assets/js/popper.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/sneakers/assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('assets/sneakers/assets/js/plugins.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/sneakers/assets/js/main.js') }}"></script>

</body>

</html>
