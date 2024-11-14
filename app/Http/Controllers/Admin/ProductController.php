<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // Lấy tất cả danh mục để hiển thị trong form lọc
        $categories = Category::all();

        // Lọc và phân trang sản phẩm theo danh mục nếu có
        $products = Product::with('category', 'variants')
            ->when($request->category_id, function ($query) use ($request) {
                return $query->where('category_id', $request->category_id);
            })
            ->when($request->name, function ($query) use ($request) {
                return $query->where('name', 'like', '%' . $request->name . '%')
                    ->orWhere('name', 'like', '%' . $request->name)
                    ->orWhere('name', 'like', $request->name . '%');
            })
            ->orderBy('id', 'asc')  // Sắp xếp theo ID, bạn có thể thay đổi nếu cần
            ->paginate(10);  // Phân trang với 10 sản phẩm mỗi trang


        return view('admin.pages.products.index', compact('products', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.products.create', compact('categories'));
         }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = $request->only(['name', 'category_id', 'price', 'description']);

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/products');
                $data['image'] = Storage::url($path);
            }

            $product = Product::create($data);

            // Add variants if present in request
            if ($request->has('variants')) {
                foreach ($request->input('variants') as $variantData) {
                    $product->variants()->create($variantData);
                }
            }

            DB::commit();

            return redirect()->route('admin.products.index')->with('messages', 'Sản phẩm đã được thêm thành công');
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    public function detail($id)
    {
        $product = Product::with('category', 'variants')->findOrFail($id);
        return view('admin.pages.products.dentail', compact('product'));
    }
    // edit
    public function edit($id)
        {
        return view('admin.pages.products.edit');
    }

    public function update($id, Request $request)
    {
        DB::beginTransaction();
        try {
            $products = Product::findOrFail($id);
            $data = $request->only(['name', 'category_id', 'price', 'description']);

            if ($request->hasFile('image')) {
                $path = $request->file('image')->storePublicly('public/products');
                $data['image'] = Storage::url($path);
            }

            $products->update($data);

            // Update variants
            $products->variants()->delete();
            if ($request->has('variants')) {
                foreach ($request->input('variants') as $variantData) {
                    $products->variants()->create($variantData);
                }
            }

            DB::commit();

            return redirect()->route('admin.products.index')->with('messages', 'Sản phẩm đã được cập nhật thành công');
   } catch (Exception $e) {
            DB::rollBack();
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

            // Sau đó xóa sản phẩm
            $product->delete();

            DB::commit();
            // return response()->json(['message' => 'Xóa sản phẩm thành công.'], 200);
            return redirect()->back()->with('messages', 'delete success');
        } catch (Exception $e) {
            DB::rollBack();

            // Ghi lại lỗi nếu cần hoặc trả về lỗi
            // return response()->json(['message' => 'Xóa sản phẩm thất bại.', 'error' => $e->getMessage()], 500);
            return redirect()->back()->with('messages', 'delete error');
        }
    }


    // public function topSellers()
    // {
    //     $topSellers = OrderDetail::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
    //         ->groupBy('product_id')
    //         ->orderByDesc('total_quantity')
    //         ->limit(5)
    //         ->get();

    //     $products = $topSellers->map(function ($orderDetail) {
    //         return Product::find($orderDetail->product_id);
    //     });
    
    //     return view('dashboard', compact('products'));
    // }
}
