<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Events\OrderStatusUpdated;

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
        if (!Auth::check()) {
            return redirect()->route('home')->with([
                'checkLogin' => 'Vui lòng đăng nhập để tiếp tục!'
            ]);
        }
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
    // Thêm đơn hàng ở client
    public function store(Request $request)
    {
        Log::info('Dữ liệu đặt hàng:', [
            'request_all' => $request->all(),
            'voucher_use' => $request->voucher_use
        ]);
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
            $params['voucher_use'] = $request->voucher_use;
            Log::info('Params trước khi tạo order:', $params);

            $order = Order::create($params);
            $orderID = $order->id;

            Log::info('Order sau khi tạo:', [
                'order' => $order
            ]);

            $carts = Cart::where('user_id', Auth::user()->id)->get();
            foreach($carts as $item) {
                $order->orderDetails()->create([
                    'order_id' => $orderID,
                    'product_id' => $item->product_id,
                    'variant_id' => $item->variant_id,
                    'price' => $item->product->price ?? $item->product->price_old,
                    'size' => $item->size,
                    'color' => $item->color,
                    'quantity' => $item->quantity,
                    'total' => ($item->product->price ?? $item->product->price_old) * $item->quantity,
                ]);
            }

            DB::commit();

            foreach($carts as $item) {
                foreach($item->product->variants as $variant) {
                    $variant->update([
                        'quantity' => $variant->quantity - $item->quantity
                    ]);
                }
                $item->delete();
            }

            return redirect()->route('order.success')
            ->with(
                [
                    'name' => $order->name,
                    'phone' => $order->phone,
                    'address' => $order->address,
                    'payment_method' => $order->payment_method,
                    'code' => $order->code,
                ]
            );
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Có lỗi khi tạo đơn hàng');
        }
    }

    public function orderSuccess() {
        return view('client.ordersuccess');
    }

    public function getRevenueAndProfitData(Request $request)
    {
        $filter = $request->input('filter');
        $date = $request->input('date');
        $year = $request->input('year');
        $yearMonth = $request->input('yearMonth');
        $month = $request->input('month');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $startDate = null;
        $endDate = Carbon::now()->endOfDay();

        if ($filter === 'year') {
            if ($year < 2000 || $year > Carbon::now()->year) {
                return response()->json(['error' => 'Năm không hợp lệ, phải từ 2000 đến hiện tại.'], 400);
            }
            $startDate = Carbon::create($year, 1, 1)->startOfDay();
            $endDate = Carbon::create($year, 12, 31)->endOfDay();
        } elseif ($filter === 'day' && $date) {
            $startDate = Carbon::parse($date)->startOfDay();
            $endDate = Carbon::parse($date)->endOfDay();
        } elseif ($filter === 'month') {
            if ($month < 1 || $month > 12) {
                return response()->json(['error' => 'Tháng không hợp lệ, phải từ 1 đến 12.'], 400);
            }
            $startDate = Carbon::create($yearMonth, $month, 1)->startOfMonth();
            $endDate = $startDate->copy()->endOfMonth();
        } elseif ($filter === 'range') {
            if ($request->input('start_date') && $request->input('end_date')) {
                $startDate = Carbon::parse($request->input('start_date'))->startOfDay();
                $endDate = Carbon::parse($request->input('end_date'))->endOfDay();
                if ($startDate->diffInDays($endDate) > 60) {
                    return response()->json(['error' => 'Khoảng thời gian tối đa là 60 ngày'], 400);
                }
            } elseif ($request->input('start_date')) {
                $startDate = Carbon::parse($request->input('start_date'))->startOfDay();
                $endDate = Carbon::now()->endOfDay();
            }
        } else {
            $startDate = Carbon::now()->startOfMonth();
            $endDate = Carbon::now()->endOfMonth();
        }

        $data = Order::where('status', 'Hoàn thành')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->with(['orderDetails', 'orderDetails.variant'])
            ->get();

        $result = [
            'labels' => [],
            'revenue' => []
        ];

        if ($filter === 'year') {
            for ($month = 1; $month <= 12; $month++) {
                $monthlyStart = Carbon::create($year, $month, 1)->startOfDay();
                $monthlyEnd = $monthlyStart->copy()->endOfMonth();
                $monthlyOrders = $data->filter(function ($order) use ($monthlyStart, $monthlyEnd) {
                    return $order->created_at->between($monthlyStart, $monthlyEnd);
                });

                $revenue = $monthlyOrders->sum(function ($order) {
                    return $order->orderDetails->sum(function ($detail) {
                        return $detail->price * $detail->quantity;
                    });
                });

                $result['labels'][] = "Tháng $month";
                $result['revenue'][] = $revenue;
            }
        } elseif ($filter === 'day') {
            for ($hour = 0; $hour < 24; $hour++) {
                $hourStart = Carbon::parse($date)->setHour($hour)->startOfHour();
                $hourEnd = $hourStart->copy()->endOfHour();
                $hourlyOrders = $data->filter(function ($order) use ($hourStart, $hourEnd) {
                    return $order->created_at->between($hourStart, $hourEnd);
                });

                $revenue = $hourlyOrders->sum(function ($order) {
                    return $order->orderDetails->sum(function ($detail) {
                        return $detail->price * $detail->quantity;
                    });
                });

                $result['labels'][] = "$hour:00";
                $result['revenue'][] = $revenue;
            }
        } elseif ($filter === 'month') {
            $currentDate = $startDate->copy();
            while ($currentDate->lte($endDate)) {
                $orders = $data->filter(function ($order) use ($currentDate) {
                    return $order->created_at->isSameDay($currentDate);
                });

                $revenue = $orders->sum(function ($order) {
                    return $order->orderDetails->sum(function ($detail) {
                        return $detail->price * $detail->quantity;
                    });
                });

                $result['labels'][] = $currentDate->format('d-m-Y');
                $result['revenue'][] = $revenue;

                $currentDate->addDay();
            }
        } else {
            // Thống kê theo khoảng thời gian
            $currentDate = $startDate->copy();
            while ($currentDate->lte($endDate)) {
                $dailyOrders = $data->filter(function ($order) use ($currentDate) {
                    return $order->created_at->isSameDay($currentDate);
                });

                $revenue = $dailyOrders->sum(function ($order) {
                    return $order->orderDetails->sum(function ($detail) {
                        return $detail->price * $detail->quantity;
                    });
                });

                $result['labels'][] = $currentDate->format('d/m/Y');
                $result['revenue'][] = $revenue;

                $currentDate->addDay();
            }
        }

        return response()->json($result);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        $totalProduct = 0;
        foreach($order->orderDetails as $item) {
            $totalProduct += $item->price * $item->quantity;
        }
        return view('client.order-detail', compact('order', 'totalProduct'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */


                        // UPDATE ORDER CLIENT
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $status = $request->input('status');
        DB::beginTransaction();
        
        try {
            $order->status = $status;
            $order->save();
        
            // Phát sự kiện khi trạng thái đơn hàng thay đổi
            event(new OrderStatusUpdated($order));
            DB::commit();
           
            return response()->json([
                'status' => 'success',
                'message' => 'Trạng thái đơn hàng đã được cập nhật thành công.',
                'order' => $order 
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => 'Đã xảy ra lỗi khi cập nhật trạng thái đơn hàng.'], 500);
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