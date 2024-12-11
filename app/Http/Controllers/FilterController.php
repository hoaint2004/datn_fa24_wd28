<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FilterController extends Controller
{
     public function filterProducts(Request $request)
    {
        $query = Product::query();
        
        // Lọc theo danh mục
        if (!empty($request->categories)) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->whereIn('id', $request->categories);
            });
        }
    
        // Lọc theo kích thước
        if (!empty($request->sizes)) {
            $query->whereHas('variants', function ($q) use ($request) {
                $q->whereIn('size', $request->sizes);
            });
        }
    
        // Lọc theo màu sắc
        if (!empty($request->colors)) {
            $colors = $request->colors;

            $query->whereHas('variants', function ($q) use ($colors) {
                $q->where(function ($subQuery) use ($colors) {
                    foreach ($colors as $color) {
                        $subQuery->orWhere('color', 'LIKE', "%$color%");
                    }
                });
            });
        }
    
        // Lọc theo khoảng giá
        if (!empty($request->price['from']) && !empty($request->price['to'])) {
            $query->whereBetween('price', [$request->price['from'], $request->price['to']]);
        }
        // Nếu ko click qq gì thì trả về cái nịt
        // if (empty($request->categories) && empty($request->sizes) && empty($request->colors) && empty($request->price)) {
        //     return response()->json([]); 
        // }
    
        $products = $query->with('category')->get(); 
       
        $products = $products->map(function ($product) {
            $productArray = $product->toArray();
            $productArray['productDetailUrl'] = route('productDetail', ['id' => $product->id]);
            $productArray['categoryUrl'] = route('categories', ['id' => $product->category->id]);
            return $productArray;
        });
        return response()->json($products);
    }
    
}