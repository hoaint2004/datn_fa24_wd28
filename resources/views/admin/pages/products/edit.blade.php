@extends('Admin.layouts.master')

@section('title')
    Cập nhật sản phẩm
@endsection

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Cập nhật sản phẩm</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="gutters-showcode" class="form-label text-muted">Xem Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="gutters-showcode">
                            </div>
                        </div>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admin.products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="live-preview">
                                <!-- Tên sản phẩm -->
                                <div class="col-md-12">
                                    <label for="productName" class="form-label">Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="name"
                                        id="productName" value="{{ old('name', $products->name) }}" placeholder="Nhập tên sản phẩm...">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Ảnh sản phẩm -->
                                <div class="col-md-12 mt-3">
                                    <label for="inputImage" class="form-label">Ảnh sản phẩm</label>
                                    <input type="file" class="form-control" id="inputImage" name="image" onchange="previewImage(event)">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Preview ảnh cũ và mới -->
                                <div class="col-md-12 mt-3">
                                    <div id="imagePreview">
                                        <label>Ảnh hiện tại:</label><br>
                                        <img src="{{ asset($products->image) }}" alt="Ảnh hiện tại" class="img-fluid" style="max-width: 200px;">
                                    </div>
                                    <div id="newImagePreview" class="mt-3"></div>
                                </div>  
                                
                                <!-- Giá sản phẩm -->
                                <div class="col-md-12 mt-3">
                                    <label for="productPrice" class="form-label">Giá sản phẩm</label>
                                    <input type="number" class="form-control" name="price" id="productPrice" value="{{ old('price', $products->price) }}" placeholder="Nhập giá sản phẩm...">
                                    @error('price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                {{-- chú thích --}}
                                <div class="col-md-12 mt-3">
                                    <label for="productDescription" class="form-label">Description</label>
                                    <input type="text" class="form-control" name="description" id="productDescription" value="{{ old('description', $products->description) }}" placeholder="Nhập chú thích...">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Danh mục -->
                                <div class="col-md-12 mt-3">
                                    <label for="categoryInput" class="form-label">Danh mục</label>
                                    <select name="category_id" id="categoryInput" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id', $products->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Variants -->
                                <div class="col-md-12 mt-3">
                                    <label class="form-label">Biến thể sản phẩm</label>
                                    @error("variants")

                                    @enderror
                                    <div id="variant-container">
                                        @foreach (old('variants', $products->variants) as $index => $variant)
                                        <div class="variant-item row g-3 align-items-center mb-2" id="variant_{{ $index }}">
                                            <input type="hidden" name="variants[{{ $index }}][id]" value="{{ $variant->id ?? '' }}">
                                            <div class="col-md-3">
                                                <label for="variantSize_{{ $index }}" class="form-label">Size</label>
                                                <input type="text" id="variantSize_{{ $index }}" name="variants[{{ $index }}][size]" 
                                                       value="{{ old("variants.{$index}.size", $variant['size'] ?? '') }}" class="form-control" required>
                                                       @error("variants.{$index}.size")
                                                       <span class="text-danger">{{ $message }}</span>
                                                   @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantColor_{{ $index }}" class="form-label">Color</label>
                                                <input type="text" id="variantColor_{{ $index }}" name="variants[{{ $index }}][color]" 
                                                       value="{{ old("variants.{$index}.color", $variant['color'] ?? '') }}" class="form-control" required>
                                                       @error("variants.{$index}.color")
                                                       <span class="text-danger">{{ $message }}</span>
                                                   @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <label for="variantQuantity_{{ $index }}" class="form-label">Quantity</label>
                                                <input type="number" id="variantQuantity_{{ $index }}" name="variants[{{ $index }}][quantity]" 
                                                       value="{{ old("variants.{$index}.quantity", $variant['quantity'] ?? '') }}" class="form-control" required>
                                                       @error("variants.{$index}.quantity")
                                                       <span class="text-danger">{{ $message }}</span>
                                                   @enderror
                                            </div>
                                            <div class="col-md-3 d-flex align-items-end">
                                                <button type="button" class="btn btn-danger btn-sm" onclick="removeVariant('{{ $index }}')">Xóa</button>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    </div>
                                    <button type="button" class="btn btn-primary mt-3" onclick="addVariant()">Thêm biến thể</button>
                                </div>


                                <!-- Trạng thái -->
                               

                                <!-- Nút hành động -->
                                <div class="col-12 mt-4">
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
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
@endsection

@section('script')
<script>
    // Function để preview ảnh mới
    function previewImage(event) {
        var newImagePreview = document.getElementById('newImagePreview');
        newImagePreview.innerHTML = '';
        var file = event.target.files[0];
        if (file) {
            var img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.style.maxWidth = '200px';
            img.style.height = 'auto';
            img.classList.add('img-fluid');
            newImagePreview.appendChild(img);
        }
    }


    let variantIndex = {{ count($products->variants) }}; // Bắt đầu index từ số biến thể hiện tại

            function addVariant() {
                const container = document.getElementById('variant-container');
                const newItem = document.createElement('div');
                newItem.classList.add('variant-item', 'row', 'g-3', 'align-items-center', 'mb-2');
                newItem.id = `variant_${variantIndex}`;
                newItem.innerHTML = `
                    <div class="col-md-3">
                        <label for="variantSize_${variantIndex}" class="form-label">Size</label>
                        <input type="text" id="variantSize_${variantIndex}" name="variants[${variantIndex}][size]" class="form-control" placeholder="Size">
                    </div>
                    <div class="col-md-3">
                        <label for="variantColor_${variantIndex}" class="form-label">Color</label>
                        <input type="text" id="variantColor_${variantIndex}" name="variants[${variantIndex}][color]" class="form-control" placeholder="Color">
                    </div>
                    <div class="col-md-3">
                        <label for="variantQuantity_${variantIndex}" class="form-label">Quantity</label>
                        <input type="number" id="variantQuantity_${variantIndex}" name="variants[${variantIndex}][quantity]" class="form-control" placeholder="Quantity">
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeVariant('variant_${variantIndex}')">Xóa</button>
                    </div>
                `;
                container.appendChild(newItem);
                variantIndex++;
            }

            function removeVariant(id) {
                const variant = document.getElementById(id);
                if (variant) {
                    variant.remove();
                }
            }

</script>
@endsection
