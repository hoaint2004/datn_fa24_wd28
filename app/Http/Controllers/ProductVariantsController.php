<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

class ProductVariantsController extends Controller
{
    public function index()
    {
        // Lấy toàn bộ dữ liệu từ bảng `variants`
        $product_variants = ProductVariant::with('product')->get();

        // Truyền dữ liệu vào view
        return view('admin.pages.product_variants.index', compact('product_variants'));
    }

    public function create()
    {
        // Lấy tất cả sản phẩm để hiển thị trong dropdown
        $products = Product::all();
        return view('admin.pages.product_variants.create', compact('products'));
    }

    public function store(Request $request)
    {
        // Tạo mới một biến thể sản phẩm
        ProductVariant::create($request->all());
    
        // Lấy lại danh sách biến thể sản phẩm mới nhất
        $product_variants = ProductVariant::with('product')->get();
    
        // Trả về view và truyền kèm thông báo thành công
        return view('admin.pages.product_variants.index', compact('product_variants'))->with('message', 'Thêm mới biến thể thành công!');
    }
    

    public function edit($id)
    {
        $product = Product::all();

        // Tìm biến thể sản phẩm theo ID và truyền vào view chỉnh sửa
        $product_variant = ProductVariant::findOrFail($id);
        return view('admin.pages.product_variants.edit', compact('product_variant' , 'product'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        // Cập nhật thông tin biến thể sản phẩm theo ID
        $product_variant = ProductVariant::findOrFail($id);
        $product_variant->update($request->all());

        return redirect()->route('admin.product_variants.index')->with('message', 'Đã cập nhật biến thể sản phẩm thành công!');
    }

    public function delete($id)
    {
        // Xóa biến thể sản phẩm theo ID
        $product_variant = ProductVariant::findOrFail($id);
        $product_variant->delete();

        return redirect()->route('admin.product_variants.index')->with('message', 'Biến thể sản phẩm đã được xóa thành công.');
    }
}