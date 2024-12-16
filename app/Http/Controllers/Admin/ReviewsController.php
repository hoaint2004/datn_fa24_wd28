<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
// use Log;

class ReviewsController extends Controller
{
    

public function index(Request $request)
{
    $reviews = Reviews::with([
        'order', 
        'order.orderDetails.variant',
        'user'
    ])
    ->when($request->has('rating'), function ($query) use ($request) {
       
        $query->where('reviews.rating', '=', $request->rating);
    })
    ->when($request->has('start_date') || $request->has('end_date'), function ($query) use ($request) {
      
        $start_date = $request->start_date ?: '2020-11-10';
        $end_date = $request->end_date ?: Carbon::now()->toDateTimeString();
        
        $query->whereBetween('reviews.created_at', [$start_date, $end_date]);
    })
    ->orderBy('reviews.rating', 'desc')
    ->get();

    return view('admin.pages.reviews.index', compact('reviews'));
}



 

    // Dành cho Client
    public function store(Request $request)
    { 
        // Log::info('Received data for review: ', $request->all());
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();    
            $imagePath = null; 
            if ($request->hasFile('image')) {
                $imagePath = Storage::url($request->file('image')->storePublicly('public/reviews'));
            } 
            $user = Auth::user()->id;
            Reviews::create([
                'user_id' => $user,
                'order_id' => $request->order_id,
                'rating' => $request->rating,
                'content' => $request->content,
                'image' => $imagePath ?? 'rỗng',
            ]);
            DB::commit(); 
            return response()->json([
                'status' => 'success',
                'message' => 'Đánh giá thành công!',
            ], 200);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Error while creating review: ' . $e->getMessage());
            return response()->json([
                'status' => 'failed',
                'message' => 'Đánh giá không thành công.',
                'error' => $e->getMessage(), 
            ], 500);
        }
    }
}