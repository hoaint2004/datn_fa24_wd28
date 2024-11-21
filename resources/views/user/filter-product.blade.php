<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Hàng</title>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/js/uikit-icons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.21.11/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="uk-container uk-container-large breadcrumb mt-10 mb-10">
        <nav aria-label="Breadcrumb alo">
            <ul class="uk-breadcrumb">
                <li><a href="#" class="breadcrumb-a">Trang chủ</a></li>
                <li><span aria-current="page" class="text-base">Shop</span></li>
            </ul>
        </nav>
    </div>

    <section class="filter-product uk-container uk-container-large">
        <div class="filter-top uk-container uk-container-small">
            <h2 class="title-category">Giày nữ</h2>
            <p class="content-category">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic neque perspiciatis, at voluptatum sapiente maiores doloribus explicabo impedit quis veniam eveniet id beatae magni suscipit quam accusantium! Doloremque, at dolorum. lor</p>
        </div>
        <div class="uk-grid" uk-grid>

            <div class="sidebar uk-width-1-4">
                <ul uk-accordion="multiple: true">

                    <li class="uk-open sidebar-category">
                        <a class="uk-accordion-title" href>Danh mục</a>
                        <div class="uk-accordion-content">
                            <ul>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay1" /><label for="giay1">Giầy nữ</label> <span class="custom-number">(10)</span></li>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay2" /><label for="giay2">Giầy nữ</label> <span class="custom-number">(10)</span></li>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay3" /><label for="giay3">Giầy nữ</label> <span class="custom-number">(10)</span></li>
                            </ul>
                        </div>
                    </li>

                    <li class="uk-open sidebar-size">
                        <a class="uk-accordion-title" href>Kích thước</a>
                        <div class="uk-accordion-content">
                            <ul>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay10" /><label for="giay10">42</label> <span class="custom-number">(10)</span></li>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay11" /><label for="giay11">41</label> <span class="custom-number">(10)</span></li>
                                <li class="sidebar-content-right"><input type="checkbox" id="giay12" /><label for="giay12">40</label> <span class="custom-number">(10)</span></li>
                            </ul>
                        </div>
                    </li>

                    <li class="uk-open sidebar-color">
                        <a class="uk-accordion-title" href>Màu sắc</a>
                        <div class="uk-accordion-content">
                            <ul>
                                <li class="sidebar-content-right">
                                    <div class="sidebar-color-body">
                                        <input type="checkbox" id="giay17" />
                                        <label for="giay17">Xanh</label>
                                        <div class="color-accordion">
                                        </div>
                                    </div>
                                    <span class="custom-number">(10)</span>
                                </li>
                                <li class="sidebar-content-right">
                                    <div class="sidebar-color-body">
                                        <input type="checkbox" id="giay18" />
                                        <label for="giay18">Xanh</label>
                                        <div class="color-accordion">
                                        </div>
                                    </div>
                                    <span class="custom-number">(10)</span>
                                </li>
                                <li class="sidebar-content-right">
                                    <div class="sidebar-color-body">
                                        <input type="checkbox" id="giay19" />
                                        <label for="giay19">Xanh</label>
                                        <div class="color-accordion">
                                        </div>
                                    </div>
                                    <span class="custom-number">(10)</span>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="uk-open sidebar-price">
                        <a class="uk-accordion-title" href="#">Giá</a>
                        <div class="uk-accordion-content sidebar-price-body">
                            <div class="input-container">
                                <span class="label">Từ</span>
                                <input type="text" placeholder="Nhập giá" class="input-field" />

                            </div>
                            <div class="input-container">
                                <span class="label">Đến</span>
                                <input type="text" placeholder="Nhập giá" class="input-field" />

                            </div>

                        </div>
                    </li>

                </ul>
            </div>

            <div class="uk-width-3-4 collection-right">
                <div class="product-list-filter">
                    <div class="show-product">
                        Hiển thị <span class="show-start">1</span> - <span class="show-end">16</span> trong tổng số <span class="shoe-total">642</span> sản phẩm
                    </div>

                    <form class="uk-form-stacked shop-sort-by">
                        <div class="shop-sort-by">
                            <label class="uk-form-label " for="sort-by">Sắp xếp theo:</label>
                            <div class="uk-form-controls">
                                <select class="uk-select" id="sort-by" name="sort-by">
                                    <option class="option-filter" value="">Phổ biến nhất</option>
                                    <option class="option-filter" value="">Giá (Thấp đến cao)</option>
                                    <option class="option-filter" value="">Giá (Cao đến thấp)</option>
                                    <option class="option-filter" value="">Mới nhất</option>
                                    <option class="option-filter" value="">Cũ nhất</option>
                                </select>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="product-list">
                    <div class="home-product-list-wrapper uk-grid " uk-grid>

                        <div class="product-item uk-width-1-4">
                            <div class="product-image">
                                <a href="#">
                                    <img
                                        src="https://img.mwc.com.vn/giay-thoi-trang?w=640&h=640&FileInput=/Resources/Product/2024/08/17/3.png"
                                        alt="" />
                                </a>
                                <span>-10%</span>
                                <i class="fas fa-heart icon-heart" style="color: #c90d0d; font-size: 1.25rem;"></i>
                                <div class="product-button">
                                    <button>Thêm vào giỏ </button>
                                    <button uk-toggle="target: #modal-container">Xem nhanh</button>
                                </div>
                            </div>
                            <div class="product-review">
                                <a href="#">
                                    <span>RIBBON</span>
                                </a>
                                <div class="icon">
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                    <i class="fa-regular fa-star icon-review" style="color: #fdb5b9;"></i>
                                </div>
                            </div>
                            <a href="#" class="product-name">Giày búp bê da</a>
                            <div class="product-price">
                                <strong>2.180.000₫</strong>
                                <del>2.000.000₫</del>
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

                    </div>

                </div>
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

</body>

</html>