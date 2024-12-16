<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    public function productDetail($id)
    {

        $product = Product::with(['category', 'variants', 'images'])
            ->where('id', $id)
            ->where('status', 0)
            ->first();

        if (!$product) {
            abort(404, 'Sản phẩm không tồn tại hoặc không hoạt động');
        }

        // Nhóm các biến thể theo màu và kích thước
        $groupedColors = $product->variants
            ->groupBy('color')
            ->map(function ($items, $color) {
                return [
                    'color' => $color,
                    'sizes' => $items->pluck('size')->unique()->toArray(),
                ];
            });

        $allSizes = $product->variants->pluck('size')->unique();

        $data['product'] = $product;
        $data['groupedColors'] = $groupedColors;
        $data['allSizes'] = $allSizes;


        $data['productRelated'] = Product::with('category')
            ->where('category_id', '=', $product->category_id)
            ->where('id', '!=', $id)
            ->where('status', 0)
            ->limit(20)
            ->get();

        // Lấy các bình luận hoạt động cho sản phẩm
        $comments = Comment::where('product_id', $id)
            ->where('parent_id', 0)
            ->where('status', 1)
            ->orderBy('id', 'DESC')
            ->get();

        return view("client.product-detail", compact('data', 'comments'));
    }



    public function quickView($id)
    {

        $product = Product::with('category', 'images')
            ->where('id', $id)
            ->where('status', 0)
            ->first();

        if ($product) {
            // Nhóm các biến thể theo màu và kích thước
            $groupedVariants = $product->variants
                ->groupBy('color')
                ->map(function ($variants, $color) {
                    return [
                        'color' => $color,
                        'sizes' => $variants->pluck('size')->unique()->values()->toArray()
                    ];
                })
                ->values();

            return response()->json([
                'id' => $product->id,
                'name' => $product->name,
                'price' => number_format($product->price, 0, ',', '.') . ' ₫',
                'image' => $product->image,
                'description' => $product->description,
                'category_name' => $product->category->name,
                'variants' => $groupedVariants,
                'images' => $product->images
            ]);
        } else {
            return response()->json(['error' => 'Sản phẩm không tồn tại hoặc không hoạt động'], 404);
        }
    }

    public function search(Request $request)
    {
        $data['products'] = Product::with('category', 'variants', 'images');

        if (!empty($request->keyword)) {
            $data['products'] = $data['products']->where('name', 'like', '%' . $request->keyword . '%');
        }

        $data['products'] = $data['products']->where('status', 0)
            ->orderBy('id', 'DESC')
            ->paginate(9);


        $data['categories'] = Category::with(['products' => function ($query) {
            $query->where('status', 0);
        }])
            ->orderBy('id', 'DESC')
            ->get();

        return view('client.search', compact('data'));
    }
}
