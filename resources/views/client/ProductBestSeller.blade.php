@extends('Client.layouts.master')

@section('title')
    Sneakers - Thế Giới Giày
@endsection

@section('content')
    @include('client.components.breadcrumb', [
        'title' => 'Sản phẩm',
    ])
   

    <section class="filter-product uk-container uk-container-large">
        <div class="filter-top uk-container uk-container-small">
            {{-- <h2 class="title-category">{{ $data['categoryById']->name }}</h2> --}}
            {{-- <p class="content-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic neque perspiciatis, at voluptatum sapiente maiores doloribus explicabo impedit quis veniam eveniet id beatae magni suscipit quam accusantium! Doloremque, at dolorum. lor</p> --}}
        </div>
        <div class="uk-grid" uk-grid>

            <div class="sidebar uk-width-1-4">
                {{-- start filler --}}
                {{-- <form action="" class=""> 
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
                    
                    
                </form> --}}
                {{-- end filler --}}
            </div>

            <div class="uk-width-3-4 collection-right">
                <div class="product-list-filter">
                    <h1>
                        <div id="product_type" class="{{ $type }}">
                            @if($type == 'most-purchased')
                                Bán chạy nhất
                            @elseif($type == 'latest')
                                Sản phẩm mới
                            @elseif($type == 'cheapest')
                                Giá rẻ
                            @endif
                        </div>
                    </h1>


                    <form class="uk-form-stacked shop-sort-by">
                        <div class="shop-sort-by">
                            <label class="uk-form-label" for="sort-by">Sắp xếp theo:</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" id="sort-by" name="sort-by">
                                    <option class="option-filter" value="popular">Phổ biến nhất</option>
                                    <option class="option-filter" value="price_asc">Giá (Thấp đến cao)</option>
                                    <option class="option-filter" value="price_desc">Giá (Cao đến thấp)</option>
                                    <option class="option-filter" value="newest">Mới nhất</option>
                                    <option class="option-filter" value="oldest">Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                    </form>

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
                        @if (!empty($data['products']))
                            @foreach ($data['products'] as $key => $item)
                                <div class="product-item uk-width-1-4">
                                    <div class="product-image">
                                        <a href="{{ route('productDetail', $item->id) }}">
                                            <img src="{{ $item->image }}"  />
                                        </a>
                                        <span>-10%</span>
                                        <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                                        <div class="product-button">
                                            <!-- Modal Content -->

                                            <button type="button" uk-toggle="target: #modal-container" class="quick-view-button" data-id="{{ $item->id }}">Xem nhanh</button>
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
                                    <a href="{{ route('productDetail', $item->id) }}" class="product-name">{{ $item->name }}</a>
                                    <div class="product-price">
                                        <strong>{{ number_format($item->price, 0, ',', '.') }} ₫</strong>
                                        @if (!empty($item->price_old))
                                            <del>{{ number_format($item->price_old, 0, ',', '.') }} ₫</del>
                                        @endif
                                    </div>
                                    <div class="product-item-detail-gallery-items">
                                        @foreach ($item->images as $image) <!-- Assuming 'images' is an array of product images -->
                                            <div class="product-item-detail-gallery-item">
                                                <img src="{{ $image->url }}" alt="Product image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Pagination -->
                    {{-- <div class="uk-container uk-container-small">
                        {{ $data['products']->links() }} <!-- Pagination links -->
                    </div> --}}

                   

                </div>
                <div class="product-list">
                    <div class="home-product-list-wrapper uk-grid" uk-grid>
                        <div id="filter-id"></div>
                    </div>
                </div>
                {{-- test --}}
                              
                {{-- end test --}}
                <!-- Phân trang gốc -->
                {{-- <nav aria-label="Pagination" id="original-pagination">
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

                <!-- Phân trang khi lọc (ẩn mặc định, hiển thị qua JavaScript khi có kết quả lọc) -->
                <nav aria-label="Pagination" id="filtered-pagination" style="display: none;">
                    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                        <!-- Nội dung sẽ được thêm động qua AJAX -->
                    </ul>
                </nav> --}}

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
            $(document).on('click', '.quick-view-button', function (e) {
                e.preventDefault();
                e.stopPropagation(); 

                let productId = $(this).data('id');

                $.ajax({
                    url: `/quick-view/${productId}`,
                    type: 'GET',
                    success: function (response) {
                        // Đổ dữ liệu vào modal
                        console.log("Dữ liệu nhận được:", response); 
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
                            $('.box-color').append(
                                `<label>
                                    <input type="radio" name="product-choose-color" value="${variant.color}" class="product-choose-color" />
                                    <span class="bg-gray-300 px-4 py-2 rounded-lg">${variant.color}</span>
                                </label>`
                            );

                            $(`input[name="product-choose-color"][value="${variant.color}"]`).on('change', function () {
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
                            $(`input[name="product-choose-color"][value="${firstColor.color}"]`).prop('checked', false);
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
                    error: function (xhr, status, error) {
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
        $(document).ready(function() {
            $('#sort-by').on('change', function() {
                // Lấy giá trị bộ lọc
                var sortBy = $(this).val();
                var productType = $('#product_type').attr('class');
                // Ẩn danh sách sản phẩm hiện tại
 

                $('#product_main .home-product-list-wrapper').fadeOut(300);
                // Gửi yêu cầu AJAX để lọc sản phẩm
                $.ajax({
                    url: '{{ route('filterBestSeller') }}', // Route xử lý AJAX lọc sản phẩm
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    data: {
                        sortBy: sortBy,
                        productType : productType,
                    },
                    success: function(response) {
                        
                        // Cập nhật lại HTML của danh sách sản phẩm
                        console.log(response.products.data)
                        var productsHTML = '';
                        response.products.data.forEach(function(item) {
                            productsHTML += `
                                <div class="product-item uk-width-1-4">
                                    <div class="product-image">
                                        <a href="/product-detail/${item.id}">
                                            <img src="${item.image}" />
                                        </a>
                                        <span>-10%</span>
                                        <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                                        <div class="product-button">
                                            <button type="button" uk-toggle="target: #modal-container" class="quick-view-button" data-id="${item.id}">Xem nhanh</button>
                                        </div>
                                    </div>
                                    <div class="product-review">
                                        <a href="/categories/${item.category.id}">
                                            <span>${item.category.name}</span>
                                        </a>
                                        <div class="icon">
                                            <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                            <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                            <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                            <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                            <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                        </div>
                                    </div>
                                    <a href="/product-detail/${item.id}" class="product-name">${item.name}</a>
                                    <div class="product-price">
                                        <strong>${item.price} ₫</strong>
                                        ${item.price_old ? `<del>${item.price_old} ₫</del>` : ''}
                                    </div>
                                </div>`;

                        });

                        // Cập nhật lại HTML của sản phẩm
                        $('#product_main .home-product-list-wrapper').html(productsHTML);

                        // Cập nhật lại phân trang
                        $('#product_main .pagination-container').html(response.pagination);

                        // Hiển thị lại sản phẩm với hiệu ứng fadeIn
                        $('#product_main .home-product-list-wrapper').fadeIn(300);


                        // document.querySelector('.home-product-list-wrapper').innerHTML = productsHTML;

                        // // Cập nhật phân trang
                        // var paginationHTML = '';

                        // // Nút trang trước
                        // if (response.pagination.current_page > 1) {
                        //     paginationHTML += `
                        //         <li>
                        //             <a href="#" onclick="goToPage(${response.pagination.current_page - 1})">
                        //                 <span uk-pagination-previous></span>
                        //             </a>
                        //         </li>`;
                        // } else {
                        //     paginationHTML += `
                        //         <li class="uk-disabled">
                        //             <span uk-pagination-previous></span>
                        //         </li>`;
                        // }

                        // // Số trang
                        // for (var i = 1; i <= response.pagination.last_page; i++) {
                        //     if (i === response.pagination.current_page) {
                        //         paginationHTML += `<li class="uk-active"><span>${i}</span></li>`;
                        //     } else {
                        //         paginationHTML += `
                        //             <li>
                        //                 <a href="#" onclick="goToPage(${i})">${i}</a>
                        //             </li>`;
                        //     }
                        // }

                        // // Nút trang tiếp theo
                        // if (response.pagination.current_page < response.pagination.last_page) {
                        //     paginationHTML += `
                        //         <li>
                        //             <a href="#" onclick="goToPage(${response.pagination.current_page + 1})">
                        //                 <span uk-pagination-next></span>
                        //             </a>
                        //         </li>`;
                        // } else {
                        //     paginationHTML += `
                        //         <li class="uk-disabled">
                        //             <span uk-pagination-next></span>
                        //         </li>`;
                        // }

                        // document.getElementById('filtered-pagination').innerHTML = paginationHTML;
                        // document.getElementById('filtered-pagination').style.display = 'block';
                        // document.getElementById('original-pagination').style.display = 'none';
                    },
                    error: function(xhr, status, error) {
                        console.error("Lỗi khi lọc sản phẩm:", error);

                        // Nếu có lỗi trong quá trình AJAX, vẫn hiển thị lại sản phẩm
                        $('#product_main .home-product-list-wrapper').fadeIn(300);
                    }
                });
            });
        });


    </script>
    {{-- end filter --}}
@endsection

