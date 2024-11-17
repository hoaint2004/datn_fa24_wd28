<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SneakerController extends Controller
{
    public function productDetail($id)
    {
        $product = Product::with(['category', 'variants', 'images'])->find($id);

        if (!$product) {
            abort(404, 'Product not found');
        }

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
            ->where('id', '!=', $id)->limit(20)->get();

        return view("client.product-detail", compact('data'));
    }



    public function quickView($id)
    {
        $product = Product::with('category', 'images')->find($id);

        if ($product) {
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
            return response()->json(['error' => 'Product not found'], 404);
        }
    }
}
