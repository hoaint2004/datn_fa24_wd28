@extends('Client.layouts.master')

@section('title')
    Wina Shoes - Thế Giới Giày
@endsection

@section('content')
    @include('client.components.breadcrumb', [
        'title' => 'Sản phẩm',
    ])

    <section class="filter-product uk-container uk-container-large">
        <div class="filter-top uk-container uk-container-small">
            <h2 class="title-category">{{ $data['categoryById']->name }}</h2>
            {{-- <p class="content-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic neque perspiciatis, at voluptatum sapiente maiores doloribus explicabo impedit quis veniam eveniet id beatae magni suscipit quam accusantium! Doloremque, at dolorum. lor</p> --}}
        </div>
        <div class="uk-grid" uk-grid>

            <div class="sidebar uk-width-1-4">
                {{-- start filler --}}
                {{-- <form action="" class=""> --}}
                    <ul uk-accordion="multiple: true">
                        <!-- Danh mục -->
                        <li class="uk-open sidebar-category">
                            <a class="uk-accordion-title" href="#">Danh mục</a>
                            <div class="uk-accordion-content">
                                <ul>
                                    @if (!empty($data['categories']))
                                        @foreach ($data['categories'] as $item)
                                            <li class="sidebar-content-right padding">
                                                <input type="checkbox" name="category[]" id="category-{{ $item->id }}" value="{{ $item->id }}" />
                                                <label for="category-{{ $item->id }}">{{ $item->name }}</label>
                                                <span class="custom-number">({{ $item->products->count() }})</span>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Kích thước -->
                        <li class="uk-open sidebar-size">
                            <a class="uk-accordion-title" href="#">Kích thước</a>
                            <div class="uk-accordion-content ">
                                <ul class="uk-grid uk-grid-small uk-child-width-1-3@m" uk-grid>
                                    @foreach (range(20, 50) as $size)
                                        <li class="sidebar-content-right">
                                            <input type="checkbox" name="size[]" id="size-{{ $size }}" value="{{ $size }}" />
                                            <label for="size-{{ $size }}">{{ $size }}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Màu sắc -->
                        <li class="uk-open sidebar-color">
                            <a class="uk-accordion-title" href="#">Màu sắc</a>
                            <div class="uk-accordion-content">
                                <ul>
                                    @foreach (['Trắng', 'Đỏ', 'Xanh', 'Hồng', 'Đen','Tím','Vàng','Cam'] as $color)
                                        <li class="sidebar-content-right">
                                            <input type="checkbox" name="color[]" id="color-{{ strtolower($color) }}" value="{{ $color }}" />
                                            <label for="color-{{ strtolower($color) }}">{{ $color }}</label>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        
                        <!-- Giá -->
                        <li class="uk-open sidebar-price">
                            <a class="uk-accordion-title" href="#">Giá</a>
                            <div class="uk-accordion-content sidebar-price-body">
                                <div class="input-container">
                                    <span class="label">Từ</span>
                                    <input type="number" name="price_from" placeholder="Nhập giá" class="input-field" />
                                </div>
                                <div class="input-container">
                                    <span class="label">Đến</span>
                                    <input type="number" name="price_to" placeholder="Nhập giá" class="input-field" />
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    
                {{-- </form> --}}
                {{-- end filler --}}
            </div>

            <div class="uk-width-3-4 collection-right">
                <div class="product-list-filter">
                    <div class="show-product">
                       
                    </div>


                </div>

                <div class="product-list" id="product_main">
                    @if(!empty($data['paginate']))
                    <div class="show-product">
                        Hiển thị 
                        <span class="show-start">{{ $data['paginate']['from'] }}</span> - 
                        <span class="show-end">{{ $data['paginate']['to'] }}</span> 
                        trong tổng số 
                        <span class="shoe-total">{{ $data['paginate']['total'] }}</span> sản phẩm
                    </div>
                    @endif
                    <div class="home-product-list-wrapper uk-grid " uk-grid>

                        @if (!empty($data['categoryById']->products))
                            @foreach ($data['categoryById']->products as $key => $item)
                                @php
                                    if ($item->price_old > 0) { 
                                        $discountPercentage = floor((($item->price_old - $item->price) / $item->price_old) * 100);
                                    } else {
                                        $discountPercentage = 0;
                                    }
                                @endphp
                                <div class="product-item uk-width-1-4">
                                    <div class="product-image">
                                        <a href="{{ route('productDetail', $item->id) }}">
                                            <img src="" style="background-image: url({{ $item->image }})" />
                                        </a>
                                        <span>
                                          @if ($discountPercentage > 0)
                                            {{ $discountPercentage }}%
                                          @endif
                                        </span>
                                        <i class="fas fa-heart icon-heart"
                                            style="color: #c90d0d; font-size: 1.25rem;"></i>
                                        <div class="product-button">
                                            <button>Thêm vào giỏ </button>
                                            <button type="button" uk-toggle="target: #modal-container-{{$item->id}}"
                                                class="quick-view-button" data-id="{{ $item->id }}">Xem
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
                                        @if (!empty($item->images))
                                            @foreach ($item->images as $image)
                                                <div class="product-item-detail-gallery-item">
                                                    <img src="{{ $image->image_url }}"
                                                        alt="">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                   

                </div>
                <div class="product-list">
                    <div class="home-product-list-wrapper uk-grid" uk-grid>
                        <div id="filter-id"></div>
                    </div>
                </div>
                {{-- test --}}
               
                

                {{-- <div class="product-list">
                    <div class="home-product-list-wrapper uk-grid " uk-grid>
                        @if (!empty($products))
                            @foreach ($products as $key => $item)
                                <div class="product-item uk-width-1-4">
                                    <div class="product-image">
                                        <a href="{{ route('productDetail', $item->id) }}">
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}" />
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
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div> --}}
                
                {{-- end test --}}
                <nav aria-label="Pagination" id="original-pagination">
                    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                        <li><a href="{{ $data['products']->previousPageUrl() }}"><span uk-pagination-previous></span></a></li>
                        @for ($i = 1; $i <= $data['products']->lastPage(); $i++)
                            <li class="{{ $data['products']->currentPage() == $i ? 'uk-active' : '' }}">
                                <a href="{{ $data['products']->url($i) }}">{{ $i }}</a>
                            </li>
                        @endfor
                        <li><a href="{{ $data['products']->nextPageUrl() }}"><span uk-pagination-next></span></a></li>
                    </ul>
                </nav>

                
                <nav aria-label="Pagination" id="filtered-pagination" style="display: none;">
                    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                    
                    </ul>
                </nav>
            </div>

        </div>
    </section>
    
    <!-- Modal xem nhanh-->
    <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-width-large" style="max-width: 90vw; max-height: 95vh;">
            <input type="hidden" value="" class="modal-product-id">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body uk-grid" uk-grid>
                <div class="uk-width-1-2">
                    <img alt="" class="w-full rounded-lg" src=""
                        style="width: 100%; max-height: 70vh; object-fit: cover;" />
                    <div class="flex mt-4 space-x-2 box-image-url">
                    </div>
                </div>

                <div class="uk-width-1-2" style="overflow-y: hidden;">
                    <h1 class="text-3xl font-bold"></h1>
                    <p class="text-xl text-gray-600"></p>
                    <div class="flex items-center mt-2">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                        <p class="ml-2 text-gray-600">(121 Đánh giá)</p>
                    </div>
                    <div class="mt-4">
                        <span class="text-2xl font-bold modal-price"></span>
                        <span class="text-xl line-through text-gray-500 ml-2 modal-price-old"></span>
                    </div>
                    <p class="mt-4 text-gray-600 modal-description">

                    </p>
                    <form action="{{ route('addToCart') }}" class="form-modal-addToCart" method="post">
                        <div class="mt-4">
                            <p class="font-bold">Màu sắc</p>
                            <div class="flex space-x-2 mt-2 box-color">

                            </div>
                        </div>
                        <div class="mt-4">
                            <p class="font-bold">Size</p>
                            <div class="flex space-x-2 mt-2 box-size">

                            </div>
                        </div>
                        <div class="mt-4 flex items-center space-x-4">
                            <div class="flex items-center border border-gray-300 rounded-lg">
                                <button class="w-10 h-10 text-gray-600 quantity-selector-button-minus btn-minus">-</button>
                                <input name="quantity" class="w-12 input-quantity-modal h-10 text-center border-none quantity-selector-input"
                                    type="text" value="1" />
                                <button class="w-10 h-10 text-gray-600 quantity-selector-button-plus btn-plus">+</button>
                            </div>
                            <button type="button" class="bg-black text-white px-6 py-2 rounded-lg btnAddToCart">Thêm giỏ
                                hàng</button>
                            <button class="border border-gray-300 rounded-lg p-2">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                        </div>
                    </form>
                    <div class="mt-4">
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-lg">Còn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- call api HTML xem nhanh --}}

@endsection


@section('js')
    {{-- xem nhanh them gio hang --}}
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
                        $('#modal-container p.text-xl').text(response.category_name);
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

                            firstImage.forEach(image => {
                                $('.box-image-url').append(
                                    `<img alt="Thumbnail 1" class="w-20 h-20 rounded-lg"
                                    src="${image.image_url}"
                                    style="width: 80px; height: 80px; object-fit: cover;" />`
                                );
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
                                    <img src="${response.product.image}" alt="" width="120px"></a>
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
    {{-- end xem nhanh --}}

    {{-- filter--}}
    <script>
        $(document).ready(function () {
            function getFilterData() { 
                let selectedCategories = [];
                let selectedSizes = [];
                let selectedColors = [];
                let priceRange = {};
                // Lấy các danh mục được chọn
                $('.sidebar-category input:checked').each(function () {
                    selectedCategories.push($(this).val());
                });
                // Lấy các kích thước được chọn
                $('.sidebar-size input:checked').each(function () {
                    selectedSizes.push($(this).val());
                });
                // Lấy các màu sắc được chọn
                $('.sidebar-color input:checked').each(function () {
                    selectedColors.push($(this).val());
                });
                // Lấy khoảng giá
                priceRange.from = $('.sidebar-price-body input:first').val();
                priceRange.to = $('.sidebar-price-body input:last').val();
                // Trả về dữ liệu lọc, chỉ gửi các giá trị đã được chọn
                let filterData = {};
                if (selectedCategories.length > 0) filterData.categories = selectedCategories;
                if (selectedSizes.length > 0) filterData.sizes = selectedSizes;
                if (selectedColors.length > 0) filterData.colors = selectedColors;
                if (priceRange.from && priceRange.to) filterData.price = priceRange;
                
                return filterData;
            }
    
            function renderProducts(products) {
                const productList = $('#filter-id'); // Phần chứa danh sách sản phẩm
                const productXem = $('#xem-nhanh');
                // khởi tạo UIkit-gird toàn cục
                // sử dụng 2 cái UIkit này dễ xung đột cần kiểm tra khi lỗi ko filter đc
                    UIkit.grid(productList);
                    // UIkit.modal(productXem);
   
                if (products.length === 0) {
                 
                    productList.empty(); // Xóa nội dung cũ trước khi thêm thông báo
                    // productXem.empty();
                    productList.append('<p>Không tìm thấy sản phẩm nào.</p>');
                    return; // Dừng lại ở đây nếu không có sản phẩm
                }
                // Xóa nội dung cũ
                productList.empty();
                productXem.empty();

                // Lặp qua các sản phẩm và tạo HTML cho từng sản phẩm
                products.forEach(product => {
                    const productHTML = `
                        <div class="product-item uk-width-1-4">
                            <div class="product-image">
                                <a href="${product.productDetailUrl}">
                                    <img src="${product.image}" alt="error" />
                                </a>
                                <span>-10%</span>
                                <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                                <div class="product-button">
                                    <button>Thêm vào giỏ </button>
                                    <button type="button" uk-toggle="target: #modal-container-${product.id}" class="quick-view-button" data-id="${product.id}">Xem nhanh</button>
                                </div>
                            </div>
                            <div class="product-review">
                                <a href="${product.categoryUrl}">
                                    <span>${product.category.name}</span>
                                </a>
                                <div class="icon">
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                </div>
                            </div>
                            <a href="${product.productDetailUrl}" class="product-name">${product.name}</a>
                            <div class="product-price">
                                <strong>${product.price.toLocaleString()} ₫</strong>
                                <del>${product.price_old.toLocaleString()} ₫</del>
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
                    `;
                    // Thêm sản phẩm vào danh sách
                    productList.append(productHTML);

                }); 
                // let html = '';
                    products.forEach(product => {
                        // Tạo HTML cho từng sản phẩm
                        let thumbnailsHTML = '';
                        product.images.forEach(image => {
                            thumbnailsHTML += `<img alt="Thumbnail" class="w-20 h-20 rounded-lg" src="${image}" style="width: 80px; height: 80px; object-fit: cover;" />`;
                        });

                        let colorsHTML = '';
                        product.variants.forEach(variant => {
                            colorsHTML += `<div class="w-8 h-8" style="background-color: ${variant.color}; border-radius: 50%; cursor: pointer;"></div>`;
                        });

                        let sizesHTML = '';
                        product.variants.forEach(variant => {
                            sizesHTML += `<button class="w-10 h-10 border border-gray-300 rounded-lg">${variant.size}</button>`;
                        });

                        html += `
                            <div id="modal-container-${product.id}" class="uk-modal-container" uk-modal>
                                <div class="uk-modal-dialog uk-width-large" style="max-width: 90vw; max-height: 95vh;">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-modal-body uk-grid" uk-grid>
                                        <div class="uk-width-1-2">
                                            <img alt="${product.name}" class="w-full rounded-lg" src="${product.images}" style="width: 100%; max-height: 70vh; object-fit: cover;" />
                                            <div class="flex mt-4 space-x-2">${thumbnailsHTML}</div>
                                        </div>
                                        <div class="uk-width-1-2" style="overflow-y: hidden;">
                                            <h1 class="text-3xl font-bold">${product.description}</h1>
                                            <p class="text-xl text-gray-600">${product.name}</p>
                                            <div class="mt-4">
                                                <span class="text-2xl font-bold">$${product.price.toFixed(2)}</span>
                                                <span class="text-xl line-through text-gray-500 ml-2">$${product.old_price.toFixed(2)}</span>
                                            </div>
                                            <div class="mt-4">
                                                <p class="font-bold">Color</p>
                                                <div class="flex space-x-2 mt-2">${colorsHTML}</div>
                                            </div>
                                            <div class="mt-4">
                                                <p class="font-bold">Size</p>
                                                <div class="flex space-x-2 mt-2">${sizesHTML}</div>
                                            </div>
                                            <div class="mt-4 flex items-center space-x-4">
                                                <div class="flex items-center border border-gray-300 rounded-lg">
                                                    <button class="w-10 h-10 text-gray-600">-</button>
                                                    <input class="w-12 h-10 text-center border-none" type="text" value="1" />
                                                    <button class="w-10 h-10 text-gray-600">+</button>
                                                </div>
                                                <button class="bg-black text-white px-6 py-2 rounded-lg">Add to Cart</button>
                                                <button class="border border-gray-300 rounded-lg p-2">
                                                    <i class="far fa-heart text-gray-600"></i>
                                                </button>
                                            </div>
                                            <div class="mt-4">
                                                <span class="bg-green-100 text-green-600 px-2 py-1 rounded-lg">${product.code ? "In Stock" : "Out of Stock"}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                       // Gán toàn bộ HTML vào productXem
                        productXem.append(html);
                        const modal = document.getElementById(`modal-container-${product.id}`);

                            // Khởi tạo và hiển thị modal
                            UIkit.modal(modal).show();
                    });

            }
    
            // Bắt sự kiện của các nút và call dữ liệu
              $('input[type="checkbox"], .sidebar-price-body input').on('change', function () {
                const filterData = getFilterData();
                // $('#product_main').hide();
                document.getElementById('product_main').style.display = 'none';
                // kiểm tra khi user nhân mũi tên quay lại trang 
                localStorage.setItem('filterData', JSON.stringify(filterData));
              
                if (Object.keys(filterData).length !== 0) {
                    $.ajax({
                        url: '/filter',
                        method: 'POST',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        data: filterData,
                        success: function (products) {
                            renderProducts(products); 
                        },
                        error: function (xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                }

                // Kiểm tra nếu không có bộ lọc nào được chọn thì không gửi yêu cầu AJAX
                if (Object.keys(filterData).length == 0) {
                    window.location.reload();
                    return; 
                }
                $.ajax({
                    url: '/filter', 
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: filterData,
                    success: function (products) {
                        renderProducts(products); 
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    },
                });
            });
        });
    </script>
    {{-- end filter --}}
@endsection
