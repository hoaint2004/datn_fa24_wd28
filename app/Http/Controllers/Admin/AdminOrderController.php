<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->get();
        return view('admin.pages.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        $totalProduct = 0;
        foreach($order->orderDetails as $item) {
            $totalProduct += $item->price * $item->quantity;
        }
        
        return view('admin.pages.orders.show', compact('order', 'totalProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            DB::beginTransaction();
            $order= Order::findOrFail($id);
            if ($order->status === 'Đã hủy') {
                throw new \Exception('Không thể thay đổi trạng thái của đơn đã bị hủy.');
            }
            if($request->payment_status==='Chưa thanh toán' && $request->status==='Hoàn thành'){
                throw new \Exception('Không thể hoàn thành khi trạng thái là chưa thanh toán');
            }
            if($request->status==='Giao hàng thành công' && $order->payment_status==='Chưa thanh toán'){
                $order->payment_status='Đã thanh toán';
            }
            $order->status =  $request->status;
            // $order->payment_status = $request->payment_status;
            $order->save(); 
            DB::commit();
            return redirect()->back()->with('status_succeed','Cập nhật thành công');
        }catch(\Exception $e){  
            DB::rollback();
            return redirect()->back()->with('status_failed','Cập nhật không thành công.'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
