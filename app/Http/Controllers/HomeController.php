<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
    
        $data['banners'] = Banner::where('status', 1)->limit(5)->get();
        
       
        $data['productNews'] = Product::with('category', 'variants', 'images')
            ->where('status', 0) 
            ->orderBy('id', 'DESC')
            ->limit(8)
            ->get();
    

        $data['productUpdateNews'] = Product::with('category', 'variants', 'images')
            ->where('status', 0)  
            ->orderBy('updated_at', 'DESC')
            ->limit(8)
            ->get();
        
     
        $data['productPopulars'] = Product::with('category', 'variants', 'images')
            ->where('status', 0)  
            ->limit(8)
            ->get();
    

        $data['categoryLimit3'] = Category::with('products')
            ->whereHas('products', function ($query) {
                $query->where('status', 0);  
            })
            ->orderBy('id', 'DESC')
            ->limit(3)
            ->get();
    
      
        $data['categoryNewOne'] = Category::with([
            'products' => function ($query) {
                $query->with('category', 'images', 'variants')
                    ->where('status', 0) 
                    ->orderBy('id', 'DESC')
                    ->limit(20);
            }
        ])
        ->orderBy('id', 'DESC')
        ->limit(1)
        ->first();
            
       
        return view('client.home', compact('data'));
    }
    

    public function about(){
        return view('client.about');
    }

    
}
