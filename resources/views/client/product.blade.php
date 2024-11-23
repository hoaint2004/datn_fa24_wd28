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
                            <div class="uk-accordion-content">
                                <ul>
                                    @foreach ([40, 42, 44, 46] as $size)
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
                                    @foreach (['Trắng', 'Đỏ', 'Xanh', 'Hồng'] as $color)
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
                        Hiển thị <span class="show-start">1</span> - <span class="show-end">16</span> trong tổng số <span class="shoe-total">642</span> sản phẩm
                    </div>
                    <div class="product-list-filter">
                        <span class="">sản phẩm chính của danh mục</span>
                    </div>

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

                <div class="product-list">
                   
                    <div class="home-product-list-wrapper uk-grid " uk-grid>

                        @if (!empty($data['categoryById']->products))
                            @foreach ($data['categoryById']->products as $key => $item)
                                <div class="product-item uk-width-1-4">
                                    <div class="product-image">
                                        <a href="{{ route('productDetail', $item->id) }}">
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}" />
                                        </a>
                                        <span>-10%</span>
                                        <i class="fas fa-heart icon-heart"
                                            style="color: #c90d0d; font-size: 1.25rem;"></i>
                                        <div class="product-button">
                                            <button>Thêm vào giỏ </button>
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
                                    <div class="product-item-detail-gallery-items">
                                        <div class="product-item-detail-gallery-item">
                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                                alt="">
                                        </div>
                                        <div class="product-item-detail-gallery-item">
                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                                alt="">
                                        </div>
                                        <div class="product-item-detail-gallery-item">
                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                                alt="">
                                        </div>
                                        <div class="product-item-detail-gallery-item">
                                            <img src="https://bizweb.dktcdn.net/thumb/large/100/041/044/products/b396909d-5313-452d-9cdf-499890ef67b6-jpeg.jpg?v=1697789268097"
                                                alt="">
                                        </div>
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
                <nav aria-label="Pagination">
                    <ul class="uk-pagination uk-flex-right uk-margin-medium-top" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li class="uk-active"><span aria-current="page">1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="uk-disabled"><span>…</span></li>
                        <li><a href="#">7</a></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </section>

    <!-- Modal xem nhanh-->
    <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-width-large" style="max-width: 90vw; max-height: 95vh;">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-body uk-grid" uk-grid>
                <div class="uk-width-1-2">
                    <img alt="Girls Pink Moana Printed Dress" class="w-full rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 100%; max-height: 70vh; object-fit: cover;" />
                    <div class="flex mt-4 space-x-2">
                        <img alt="Thumbnail 1" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 2" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 3" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                        <img alt="Thumbnail 4" class="w-20 h-20 rounded-lg" src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png" style="width: 80px; height: 80px; object-fit: cover;" />
                    </div>
                </div>

                <div class="uk-width-1-2" style="overflow-y: hidden;">
                    <h1 class="text-3xl font-bold">YK Disney</h1>
                    <p class="text-xl text-gray-600">Giày búp bê da</p>
                    <div class="flex items-center mt-2">
                        <div class="flex items-center">
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                            <i class="fas fa-star text-yellow-500"></i>
                        </div>
                        <p class="ml-2 text-gray-600">(121 Reviews)</p>
                    </div>
                    <div class="mt-4">
                        <span class="text-2xl font-bold">$80.00</span>
                        <span class="text-xl line-through text-gray-500 ml-2">$100.00</span>
                    </div>
                    <p class="mt-4 text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                    <div class="mt-4">
                        <p class="font-bold">Color</p>
                        <div class="flex space-x-2 mt-2">
                            <div class="w-8 h-8 bg-blue-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-red-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-black rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-yellow-600 rounded-full cursor-pointer"></div>
                            <div class="w-8 h-8 bg-green-600 rounded-full cursor-pointer"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="font-bold">Size</p>
                        <div class="flex space-x-2 mt-2">
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">S</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">M</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">L</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">XL</button>
                            <button class="w-10 h-10 border border-gray-300 rounded-lg">XXL</button>
                        </div>
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
                        <span class="bg-green-100 text-green-600 px-2 py-1 rounded-lg">In Stock</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    {{-- <script>
        $(document).ready(function() {
            $('.quantity-selector-button-minus').on('click', function() {
                var currentValue = parseInt($('.quantity-selector-input').val());
                if (currentValue > 1) {
                    $('.quantity-selector-input').val(currentValue - 1);
                }
            });

            $('.quantity-selector-button-plus').on('click', function() {
                var currentValue = parseInt($('.quantity-selector-input').val());
                $('.quantity-selector-input').val(currentValue + 1);
            });

            $('.quantity-selector-input').on('input', function() {
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
                                .prop('checked', true);
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
                if(color == null) {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Vui lòng chọn màu sắc',
                        showConfirmButton: true,
                    })

                    return false;
                }

                if(size == null) {
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
                        if(response.status) {
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
    </script> --}}
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

                // khởi tạo UIkit-gird toàn cục
                    UIkit.grid(productList);

                if (products.length === 0) {
                 
                    productList.empty(); // Xóa nội dung cũ trước khi thêm thông báo
                    productList.append('<p>Không tìm thấy sản phẩm nào.</p>');
                    return; // Dừng lại ở đây nếu không có sản phẩm
                }

                // Xóa nội dung cũ
                productList.empty();

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
                                    <button type="button" uk-toggle="target: #modal-container" class="quick-view-button" data-id="${product.id}">Xem nhanh</button>
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
            }
    
            // Bắt sự kiện của các nút và call dữ liệu
             
              $('input[type="checkbox"], .sidebar-price-body input').on('change', function () {
                const filterData = getFilterData();
                
                // kiểm tra khi quay lại trang 
               
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