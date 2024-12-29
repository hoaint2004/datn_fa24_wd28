<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class FilterController extends Controller
{
    public function filterProducts(Request $request)
    {
        $query = Product::query();
        // $sortBy = $request->get('sortBy'); // Nhận giá trị của sortBy
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

        // Xử lý sắp xếp
        // if (!empty($request->sort_by)) {
        //     switch ($request->sort_by) {
        //         case 'price_asc':
        //             $query->orderBy('price', 'ASC');
        //             break;
        //         case 'price_desc':
        //             $query->orderBy('price', 'DESC');
        //             break;
        //         case 'newest':
        //             $query->orderBy('created_at', 'DESC');
        //             break;
        //         case 'oldest':
        //             $query->orderBy('created_at', 'ASC');
        //             break;
        //         default:
        //             $query->orderBy('id', 'DESC');
        //             break;
        //     }
        // }


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
    public function filterBestSeller(Request $request)
    {
        try {

            // Lấy giá trị từ query string
            $sortBy = $request->get('sortBy'); // Nhận giá trị của sortBy
            $type = $request->get('productType'); // Nhận giá trị của productType

            // Kiểm tra tham số productType hợp lệ
            if (!in_array($type, ['most-purchased', 'latest', 'cheapest'])) {
                return response()->json(['error' => 'Invalid product type'], 400);
            }

            $products = Product::query();

            // Áp dụng bộ lọc theo kiểu sản phẩm
            switch ($type) {
                case 'most-purchased':
                    $products->join('order_details', 'products.id', '=', 'order_details.product_id')
                        ->select('products.*')
                        ->selectRaw('SUM(order_details.quantity) as total_quantity')
                        ->groupBy('products.id');
                    break;

                case 'latest':
                    $sort = 'DESC'; 
                    if ($sortBy === 'price_asc') {
                        $sort = 'ASC'; // 
                    }elseif($sortBy==='newest'){
                        $sort='DESC';
                    }elseif($sortBy==='price_desc'){
                        $sort='DESC';
                    }else{
                        $sort='ASC';
                    }
                     
                    $products->orderByRaw(
                        "CASE 
                            WHEN ? = 'price_asc' THEN products.price
                            WHEN ? = 'price_desc' THEN products.price
                            WHEN ? = 'newest' THEN products.created_at
                            WHEN ? = 'oldest' THEN products.created_at
                        END $sort",
                        [$sortBy, $sortBy, $sortBy, $sortBy]
                    );
                    break;

                    case 'cheapest':
                        $sort = 'ASC'; // Mặc định là tăng dần
                        if ($sortBy === 'price_desc') {
                            $sort = 'DESC'; // Nếu là giảm dần thì đổi sang DESC
                        }
                    
                        $products->orderByRaw(
                            "CASE 
                                WHEN ? = 'price_asc' THEN products.price
                                WHEN ? = 'price_desc' THEN products.price
                                WHEN ? = 'newest' THEN products.created_at
                                WHEN ? = 'oldest' THEN products.created_at
                             END $sort",
                            [$sortBy, $sortBy, $sortBy, $sortBy]
                        );
                        break;
                default:
                    break;
            }

            // Áp dụng bộ lọc theo sắp xếp (sortBy)
            switch ($sortBy) {
                case 'price_asc':
                    $products->orderBy('products.price', 'asc');
                    break;
                case 'price_desc':
                    $products->orderBy('products.price', 'desc');
                    break;
                case 'newest':
                    $products->orderBy('products.created_at', 'desc');
                    break;
                case 'oldest':
                    $products->orderBy('products.created_at', 'asc');
                    break;
                // case 'most-purchased':
                //     // Sắp xếp theo tổng số lượng đã mua (từ phần selectRaw)
                //     $products->orderByRaw('SUM(order_details.quantity) desc');
                //     break;
                default:
                    break;
            }

            // Thêm các mối quan hệ và điều kiện chung
            $products->with(['category', 'variants', 'images'])
                ->where('status', 0);

            // Lấy kết quả cuối cùng
            $products = $products->paginate(5);


            // Trả về kết quả
            return response()->json([
                'products' => $products,
                'pagination' => [
                    'total' => $products->total(), // Tổng số sản phẩm
                    'per_page' => $products->perPage(), // Số sản phẩm trên mỗi trang
                    'current_page' => $products->currentPage(), // Trang hiện tại
                    'last_page' => $products->lastPage(), // Tổng số trang
                    'from' => $products->firstItem(), // Sản phẩm bắt đầu hiển thị
                    'to' => $products->lastItem(), // Sản phẩm kết thúc hiển thị
                ] // Lấy dữ liệu mảng của các sản phẩm
            ]);
        } catch (\Exception $e) {
            \Log::error('Error filtering products: ' . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}