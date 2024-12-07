<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
// use Log;

class ReviewsController extends Controller
{
    public function index(){
        $reviews_order = Reviews::with('order')
        ->when(function($query) {
            $query->whereNotNull('order_id')
                ->join('orders', 'reviews.order_id', '=', 'orders.id')
                ->join('order_detail', 'orders.id', '=', 'order_detail.order_id')
                ->where('orders.status', 'Hoàn thành')->where('orders.payment_status','Đã thanh toán') 
                ->join('variants', 'order_details.variant_id', '=', 'variants.id');
        }, function($query) {
            $query->orWhereNull('order_id');
        })
        ->orderBy('rating', 'desc') 
        ->get();
    

        return view('admin.pages.reviews.index',compact('reviews_order'));
    }

    public function edit($id){
        $review = Reviews::find($id);
        return view('admin.pages.reviews.edit',compact('review'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'content' => 'required|string|max:500',
        ]);
        try{
            DB::beginTransaction();
            $review = Reviews::findOrFail($id);
            $review->update($validatedData);
            DB::commit();
            return redirect()->route('admin.reviews.index')->with('status_succeed','Cập nhật thành công');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->route('admin.reviews.index')->with('status_failed','cập nhật ko thành công'.$e->getMessage());
        } 
    }


    public function destroy($id){
        DB::beginTransaction();
        try{
            Reviews::find($id)->delete();
            DB::commit();
            return redirect()->route('admin.reviews.index')->with('status_succeed','xóa thành công');
        }catch(Exception $e){
            DB::rollBack();
            return redirect()->back()->with('status_failed','xóa không thành công');
        }
        
    }

    // client
    public function store(Request $request)
    {
        
        Log::info('Received data for review: ', $request->all());
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
