<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;


class ProductController extends Controller
{   
    //sản phẩm nổi bật chi tiết
    public function featured_products($id)
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
    
        // Lấy các sản phẩm liên quan trong cùng danh mục
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
    

    // public function product_detail(){
    //     return view('client.product-detail');
    // }

    // public function contact(){

    // }

    // public function cart(){
    //     return view('client.cart');
    // }
    
    // public function order(){
    //     return view('client.order');
    // }

    // public function order_history(){}

    // public function search(){
    //     return view('user.search');
    // }

    // public function notFound(){

    // }


}