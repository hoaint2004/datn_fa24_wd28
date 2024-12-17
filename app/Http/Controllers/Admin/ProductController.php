<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Lấy tất cả danh mục để hiển thị trong form lọc
        $categories = Category::all();

        // Lọc và phân trang sản phẩm theo danh mục nếu có
        $products = Product::with('category', 'variants' ,'images')
            ->when($request->category_id, function ($query) use ($request) {
                return $query->where('category_id', $request->category_id);
            })
            ->when($request->name, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->name . '%')
                    ->orWhere('name', 'like', '%' . $request->name)
                    ->orWhere('name', 'like', $request->name . '%');
            })
            ->orderBy('id', 'asc')  // Sắp xếp theo ID
            ->paginate(10);  // Phân trang với 10 sản phẩm mỗi trang


        return view('admin.pages.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.products.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->only(['name', 'category_id', 'price', 'description','price_old','status']);

            $data['code'] = 'P' . date('YmdHis') . Str::upper(Str::random(5));

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/products');
                $data['image'] = Storage::url($path);
            }

            $product = Product::create($data);

            // Add variants if present in request
            $this->storeVariants($product, $request);
            // Add image gallery
            $this->storeGallery($product, $request);

            DB::commit();

            return redirect()->route('admin.products.index')->with('status_succeed', 'Sản phẩm đã được thêm thành công');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('status_failed', 'Lỗi: ' . $e->getMessage());
        }
    }

    public function detail($id)
    {
        $product = Product::with('category', 'variants','images')->findOrFail($id);
        return view('admin.pages.products.detail', compact('product'));
    }

    // edit
    public function edit($id)
    {
        $products = Product::with('variants','images')->findOrFail($id);
        $categories = Category::all();
        return view('admin.pages.products.edit', compact('products', 'categories'));
    }

    public function update($id, ProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $products = Product::findOrFail($id);
            $data = $request->only(['name', 'category_id', 'price', 'description','price_old','code','status']);

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/products');
                $data['image'] = Storage::url($path);
            }

            $products->update($data);

            // Update variants
            $this->updateVariants($products, $request);
            // Update image gallery
            $this->updateGallery($products, $request);

            DB::commit();

            return redirect()->route('admin.products.index')->with('status_succeed', 'Sản phẩm đã được cập nhật thành công');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('status_failed', 'Lỗi: ' . $e->getMessage());
        }
    }

    // delete
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);

            // Xóa các biến thể trước
            $product->variants()->delete();
            $product->images()->delete();

            // Sau đó xóa sản phẩm
            $product->delete();

            DB::commit();
            return redirect()->back()->with('status_succeed', 'delete success');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('status_failed', 'delete error');
        }
    }

    // Hàm lưu biến thể sản phẩm
    private function storeVariants($product, $request)
    {
        if ($request->has('variants')) {
            foreach ($request->input('variants') as $variantData) {
                $product->variants()->create($variantData);
            }
        }
    }

    // Hàm cập nhật biến thể sản phẩm
    private function updateVariants($product, $request)
    {
        if ($request->has('variants')) {
            $product->variants()->delete();  // Xóa biến thể cũ
            foreach ($request->input('variants') as $variantData) {
                $product->variants()->create($variantData);
            }
        }
    }

    // Hàm lưu gallery ảnh sản phẩm
    private function storeGallery($product, $request)
    {
        if ($request->hasFile('product_galleries')) {
            foreach ($request->file('product_galleries') as $index => $image) {
                $path = $image->storePublicly('public/product_galleries');
                $product->images()->create([
                    'image_url' => Storage::url($path),
                    'image_order' => $index + 1
                ]);
            }
        }
    }

    // Hàm cập nhật gallery ảnh sản phẩm
    private function updateGallery($product, $request)
    {
        // Kiểm tra xem có ảnh được xóa trong client ko
        if ($request->filled('delete_galleries')) {
            foreach ($request->delete_galleries as $image_id => $image_url) {
                $image = $product->images()->find($image_id);
                if ($image) {
                    // Xóa ảnh khỏi thư mục
                    Storage::disk('public')->delete($image_url);
                    // Xóa ảnh trong cơ sở dữ liệu
                    $image->delete();
                }
            }
        }

        if ($request->hasFile('product_galleries')) {
            foreach ($request->file('product_galleries') as $index => $image) {
                $path = $image->storePublicly('public/product_galleries');
                $product->images()->create([
                    'image_url' => Storage::url($path),
                    'image_order' => $index + 1
                ]);
            }
        }
    }
}