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
        $data['paginate']=[
            'total' => $data['products']->total(), // Tổng số sản phẩm
            'per_page' => $data['products']->perPage(), // Số sản phẩm trên mỗi trang
            'current_page' => $data['products']->currentPage(), // Trang hiện tại
            'last_page' => $data['products']->lastPage(), // Tổng số trang
            'from' => $data['products']->firstItem(), // Sản phẩm bắt đầu hiển thị
            'to' => $data['products']->lastItem(), // Sản phẩm kết thúc hiển thị
        ];
    
        return view('client.product', compact('data'));
    }
    
}
