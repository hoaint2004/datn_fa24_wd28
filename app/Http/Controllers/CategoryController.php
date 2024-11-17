<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories($id)
    {
        $data['products'] = Product::with('category', 'variants', 'images')->orderBy('id', 'DESC')->paginate(9);

        $data['categoryById'] = Category::with([
            'products' => function ($q) {
                $q->with('variants', 'images')->paginate(9);
            }
        ])->find($id);

        $data['categories'] = Category::with('products')->orderBy('id', 'DESC')->get();

        return view('client.product', compact('data'));
    }
}
