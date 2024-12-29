<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Comment;

// controller dành cho sản phẩm best seller
class ProductController extends Controller
{   
    //Đây là Controller phần sản phẩm nổi bật
    public function featured_products($type)
    {
        $data = [];
        
        // Sản phẩm bán chạy nhất
        if ($type == 'most-purchased') {
            $data['products'] = Product::select('products.*')
                ->join('order_details', 'products.id', '=', 'order_details.product_id')
                ->selectRaw('SUM(order_details.quantity) as total_quantity')
                ->groupBy('products.id')
                ->orderByDesc('total_quantity')
                ->with(['category', 'variants', 'images'])
                ->where('status', 0)
                ->limit(5)->get();
                // ->paginate(9);
        }
    
        // Sản phẩm mới
        elseif ($type == 'latest') {
            $data['products'] = Product::orderBy('created_at', 'desc')
                ->with(['category', 'variants', 'images'])
                ->where('status', 0)
                ->limit(5)->get();
                // ->paginate(9);
        }
    
        // Sản phẩm giá rẻ
        elseif ($type == 'cheapest') {
            $data['products'] = Product::orderBy('price', 'asc')
                ->with(['category', 'variants', 'images'])
                ->where('status', 0)
                ->limit(5)->get();
                // ->paginate(9);
        }
    
    
        // Lấy tất cả các danh mục sản phẩm
        $data['categories'] = Category::with(['products' => function ($query) {
            $query->where('status', 0);
        }])
        ->orderBy('id', 'DESC')
        ->get();

        // $data['paginate']=[
        //     'total' => $data['products']->total(), // Tổng số sản phẩm
        //     'per_page' => $data['products']->perPage(), // Số sản phẩm trên mỗi trang
        //     'current_page' => $data['products']->currentPage(), // Trang hiện tại
        //     'last_page' => $data['products']->lastPage(), // Tổng số trang
        //     'from' => $data['products']->firstItem(), // Sản phẩm bắt đầu hiển thị
        //     'to' => $data['products']->lastItem(), // Sản phẩm kết thúc hiển thị
        // ];
        return view('client.ProductBestSeller', compact('data','type'));
    }
    

    public function product_detail(){
        return view('client.product-detail');
    }

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