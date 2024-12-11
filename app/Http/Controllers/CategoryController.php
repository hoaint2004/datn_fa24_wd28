<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories($id)
    {
        
        $data['products'] = Product::with('category', 'variants', 'images')
            ->where('status', 0)  
            ->orderBy('id', 'DESC')
            ->paginate(9);
    
       
        $data['categoryById'] = Category::with([
            'products' => function ($q) {
                $q->with('variants', 'images')
                   ->where('status', 0) 
                   ->paginate(9);
            }
        ])
        ->find($id);
    
        
        $data['categories'] = Category::with(['products' => function ($query) {
            $query->where('status', 0);  
        }])
        ->orderBy('id', 'DESC')
        ->get();
    
        return view('client.product', compact('data'));
    }
    
}