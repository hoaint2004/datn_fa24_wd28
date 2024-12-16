@extends('Admin.layouts.master')

@section('title')
    Thêm mới sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Thêm mới sản phẩm</h4>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="live-preview">
                                @if(session('messages'))
                                <div class="alert alert-success">
                                    {{ session('messages') }}
                                </div>
                                @endif
                                <!-- Tên sản phẩm -->
                                <div class="col-md-12">
                                    <label for="productName" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name"
                                        id="productName" value="{{ old('name') }}" placeholder="Nhập tên sản phẩm...">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                {{-- Trạng thái sản phẩm --}}
                                <div class="col-md-12 mt-2">
                                    <label for="productInput" class="form-label">Trạng thái</label><br>
                                    <input type="radio" class="btn-check statusProduct" value="0" name="status"
                                        id="success-outlined" autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="success-outlined">Hiện</label>
    
                                    <input type="radio" class="btn-check statusProduct" value="1" name="status"
                                        id="danger-outlined" autocomplete="off">
                                    <label class="btn btn-outline-danger" for="danger-outlined">Ẩn</label>
                                </div>
                            
                                <!-- Ảnh sản phẩm -->
                                <div class="col-md-12 mt-3">
                                    <label for="productImage" class="form-label">Ảnh</label>
                                    <input type="file" class="form-control" id="productImage" name="image" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Preview ảnh -->
                                <div class="col-md-12 mt-3">
                                    <div id="imagePreview" style="max-width: 300px; max-height: 300px;"></div>
                                </div>

                                <!-- Danh mục -->
                                <div class="col-md-12 mt-3">
                                    <label for="categorySelect" class="form-label">Danh mục</label>
                                    <select name="category_id" id="categorySelect" class="form-select">
                                        @foreach($categories as $cate)
                                            <option value="{{ $cate->id }}">{{ $cate->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- Description --}}
                                <div class="col-md-12 mt-3">
                                    <label for="productDescript" class="form-label">Description</label>
<<<<<<< HEAD
                                    <textarea class="form-control" name="description"
                                    id="productDescript" placeholder="Nhập giới thiệu sản phẩm..." cols="30" rows="10">{{ old('description') }}</textarea>
=======
                                    <textarea name="" class="form-control" name="description"
                                    id="productDescript" value="{{ old('description') }}" placeholder="Nhập giới thiệu sản phẩm..." cols="30" rows="10"></textarea>
>>>>>>> fb13817d6b0caba2ec0e5cd84c09ec5e84b4c929
                                    {{-- <input type="text" class="form-control" name="description"
                                        id="productDescript" value="{{ old('description') }}" placeholder="Nhập giới thiệu sản phẩm..."> --}}
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <!-- Giá sản phẩm cũ-->
                                <div class="col-md-12 mt-3">
                                    <label for="productPrice" class="form-label">Giá cũ</label>
                                    <input type="number" class="form-control" name="price_old"
                                        id="productPrice" value="{{ old('price_old') }}" placeholder="Nhập giá sản phẩm old...">
                                    @error('price_old')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- Giá sản phẩm mới -->
                                <div class="col-md-12 mt-3">
                                    <label for="productPrice" class="form-label">Giá mới</label>
                                    <input type="number" class="form-control" name="price"
                                        id="productPrice" value="{{ old('price') }}" placeholder="Nhập giá sản phẩm...">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <!-- Product Image Gallery -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header align-items-center d-flex">
                                                <h4 class="card-title mb-0 flex-grow-1">Ảnh phụ</h4>
                                                <button type="button" class="btn btn-primary" onclick="addImageGallery()">Thêm ảnh</button>
                                            </div>
                                            <div class="card-body">
                                                <div class="live-preview">
                                                    <div class="row gy-4" id="gallery_list">
                                                        <div class="col-md-4" id="gallery_default_item">
                                                            <label for="gallery_default" class="form-label">Ảnh sản phẩm</label>
                                                            <div class="d-flex">
                                                                <input type="file" class="form-control" name="product_galleries[]" id="gallery_default" onchange="previewImage(this)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               {{-- Biến thể sản phẩm --}}
                                <div class="form-group mt-4">
                                    <label class="form-label">Biến thể sản phẩm</label>
                                    {{-- biến thể cũ --}}
                                        @foreach (old('variants', []) as $index => $variant)
                                        <div class="variant-item row g-3 align-items-center mb-2" id="variant_{{ $index }}">
                                            <div class="col-md-3">
                                                <label for="variantSize_{{ $index }}" class="form-label">Kích cỡ</label>
                                                <input type="text" id="variantSize_{{ $index }}" name="variants[{{ $index }}][size]" placeholder="Size" class="form-control" value="{{ old('variants.' . $index . '.size', $variant['size'] ?? '') }}" />
                                                @error('variants.' . $index . '.size')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantColor_{{ $index }}" class="form-label">Màu</label>
                                                <input type="text" id="variantColor_{{ $index }}" name="variants[{{ $index }}][color]" placeholder="Color" class="form-control" value="{{ old('variants.' . $index . '.color', $variant['color'] ?? '') }}" />
                                                @error('variants.' . $index . '.color')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantQuantity_{{ $index }}" class="form-label">Số lượng</label>
                                                <input type="number" id="variantQuantity_{{ $index }}" name="variants[{{ $index }}][quantity]" placeholder="Quantity" class="form-control" value="{{ old('variants.' . $index . '.quantity', $variant['quantity'] ?? '') }}" />
                                                @error('variants.' . $index . '.quantity')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger btn-sm" onclick="removeVariant('variant_{{ $index }}')">Xóa</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{-- end biến thế cũ --}}
                                    <div id="variant-container" class="border p-3 rounded bg-light">
                                        <div class="variant-item row g-3 align-items-center mb-2" id="variant_0">
                                            {{-- <div class="col-md-3">
                                                <label for="variantSize_0" class="form-label">Size</label>
                                                <input type="text" id="variantSize_0" name="variants[0][size]" placeholder="Size" class="form-control" />
                                                @error('variants.0.size')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantColor_0" class="form-label">Color</label>
                                                <input type="text" id="variantColor_0" name="variants[0][color]" placeholder="Color" class="form-control" />
                                                @error('variants.0.color')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantQuantity_0" class="form-label">Quantity</label>
                                                <input type="number" id="variantQuantity_0" name="variants[0][quantity]" placeholder="Quantity" class="form-control" />
                                                @error('variants.0.quantity')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div> --}}
                                            {{-- <div class="col-md-3 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger btn-sm" onclick="removeVariant('variant_0')">Xóa</button>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-secondary mt-3" onclick="addVariant()">Thêm biến thể mới</button>
                                </div>
                                {{-- biến thể cũ  --}}
                                  <!-- Các variant sẽ được thêm vào đây bằng JavaScript -->
 
                                

                                <!-- Nút hành động -->
                                <div class="col-12 mt-4">
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
                                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-warning">Quay lại</a>
                                    </div>
                                </div>

                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
    <script>
       let variantIndex = 0;

        function addVariant() {
            const container = document.getElementById('variant-container');
            const newItem = document.createElement('div');
            newItem.classList.add('variant-item', 'row', 'g-3', 'align-items-center', 'mb-2');
            newItem.id = `variant_${variantIndex}`;
            newItem.innerHTML = `
                <div class="col-md-3">
                    <label for="variantSize_${variantIndex}" class="form-label">Size</label>
                    <input type="text" id="variantSize_${variantIndex}" name="variants[${variantIndex}][size]" placeholder="Size" class="form-control" />
                        @error('variants.${variantIndex}.size')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-3">
                    <label for="variantColor_${variantIndex}" class="form-label">Color</label>
                    <input type="text" id="variantColor_${variantIndex}" name="variants[${variantIndex}][color]" placeholder="Color" class="form-control" />
                       @error('variants.${variantIndex}.color')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-3">
                    <label for="variantQuantity_${variantIndex}" class="form-label">Quantity</label>
                    <input type="number" id="variantQuantity_${variantIndex}" name="variants[${variantIndex}][quantity]" placeholder="Quantity" class="form-control" />
                       @error('variants.${variantIndex}.quantity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeVariant('variant_${variantIndex}')">Xóa</button>
                </div>
            `;
            container.appendChild(newItem);
            variantIndex++;
        }

        function removeVariant(variantId) {
            const variantElement = document.getElementById(variantId);
            if (variantElement) {
                variantElement.remove();
                reIndexVariants();
            }
        }

        function reIndexVariants() {
            const variants = document.querySelectorAll('.variant-item');
            variants.forEach((variant, index) => {
                variant.id = `variant_${index}`;
                variant.querySelector('input[name*="[size]"]').name = `variants[${index}][size]`;
                variant.querySelector('input[name*="[color]"]').name = `variants[${index}][color]`;
                variant.querySelector('input[name*="[quantity]"]').name = `variants[${index}][quantity]`;

                // Update the button's onclick function to remove the correct variant
                variant.querySelector('button').setAttribute('onclick', `removeVariant('variant_${index}')`);
            });
            // Reset variantIndex to match the number of items to ensure new items are added sequentially
            variantIndex = variants.length;
        }


        // image gallier
        // CKEDITOR.replace('detailed_description');

        function previewImage(input) {
            var file = input.files[0];
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).closest('.form-group').find('.image-preview').html('<img src="' + e.target.result + '" class="img-fluid">');
            }
            reader.readAsDataURL(file);
        }

        function addImageGallery() {
            let id = 'gen_' + Math.random().toString(36).substring(2, 15).toLowerCase();
            let html = `
                <div class="col-md-4" id="${id}_item">
                    <label for="${id}" class="form-label">Ảnh sản phẩm</label>
                    <div class="d-flex">
                        <input type="file" class="form-control" name="product_galleries[]" id="${id}" onchange="previewImage(this)">
                        <button type="button" class="btn btn-danger ms-2" onclick="removeImageGallery('${id}_item')">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;
            $('#gallery_list').append(html);
        }

        function removeImageGallery(id) {
            if (confirm('Chắc chắn xóa không?')) {
                $('#' + id).remove();
            }
        }
    
    </script>
@endsection