<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        $total = 0;
        $subTotal = 0;
        $shipping = 30000;
        foreach($carts as $item) {
            $subTotal += ($item->product->price ? $item->product->price : $item->product->price_old) * $item->quantity;
        }

        $total = $subTotal  + $shipping;
        return view('client.order', compact('carts', 'total', 'subTotal', 'shipping'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ],
[
            'name.required' => 'Bắt buộc nhập',
            'address.required' => 'Bắt buộc nhập',
            'phone.required' => 'Bắt buộc nhập',
            'phone.regex' => 'Số điện thoại không hợp lệ',
            'phone.min' => 'Số điện thoại phải ít nhất 10 kí tự',
        ]);
        DB::beginTransaction();
        try {
            $params = $request->except('_token');
            $params['code'] = 'SW-' . Auth::user()->id . '-' . now()->timestamp;

            $order = Order::create($params);
            $orderID = $order->id;

            $carts = Cart::where('user_id', Auth::user()->id)->get();
            
            foreach($carts as $item) {
                $order->orderDetail()->create([
                    'order_id' => $orderID,
                    'product_id' => $item->product_id,
                    'variant_id' => $item->variant_id,
                    'price' => $item->price,
                    'size' => $item->size,
                    'color' => $item->color,
                    'quantity' => $item->quantity,
                    'total' => $item->price * $item->quantity,
                ]);
            }

            DB::commit();
            foreach($carts as $item) {
                $item->delete();
            }
            return redirect()->route('home')->with('success', 'Tạo đơn hàng thành công');
        } catch (\Exception $e) {  
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Có lỗi khi tạo đơn hàng');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
