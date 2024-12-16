<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Log;


use Exception;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::all();
        return view('admin.pages.discounts.index', compact('discounts'));
    }

    // Hiển thị form thêm mới discount
    public function create()
    {
        return view('admin.pages.discounts.create');
    }

    // Lưu discount mới
    public function store(Request $request)
    {
        $this->discountValidate($request);

        Discount::create($request->all());
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Thêm mã giảm giá mới thành công');
    }

    // Hiển thị form chỉnh sửa discount
    public function edit($id)
    {
        $discount = Discount::findOrFail($id);
        return view('admin.pages.discounts.edit', compact('discount'));
    }

    // Cập nhật discount
    public function update(Request $request, $id)
    {
        $this->discountValidate($request, $id);
        $discount = Discount::findOrFail($id);
        $discount->update($request->all());
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Cập nhật mã giảm giá thành công');
    }

    // Xóa discount
    public function delete($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Xóa mã giảm giá thành công');
    }

    // validate discount
    private function discountValidate($request, $id = null)
    {
        return $request->validate([
            'discount_code' => 'required|unique:discount,discount_code,' . $id,
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'is_active' => 'nullable|boolean', // Kiểm tra trạng thái kích hoạt
            'discount_type' => ['required', Rule::in(['%', 'VND'])], // Kiểm tra loại giảm giá
            'discount_value' => [
                'required',
                'numeric',
                'min:0',
                Rule::when($request->discount_type === '%', 'max:100') // Nếu là percentage, giới hạn tối đa 100
            ],
            'min_order_value' => 'nullable|numeric|min:0', // Kiểm tra giá trị đơn hàng tối thiểu
            'usage_limit' => 'nullable|integer|min:1', // Kiểm tra giới hạn sử dụng
        ]);
    }

    public function validateDiscountCode(Request $request)
    {
        $code = $request->discount_code;
        $subtotal = $request->total;
        $shipping = $request->shipping_fee;

        Log::info('Dữ liệu nhận được:', [
            'discount_code' => $code,
            'subtotal' => $subtotal,
            'shipping' => $shipping
        ]);

        $discount = Discount::where('discount_code', $code)
            ->where('is_active', true)
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->first();

            Log::info('Thông tin mã giảm giá:', [
                'discount' => $discount
            ]);

        if (!$discount) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mã giảm giá không hợp lệ hoặc đã hết hạn'
            ]);
        }

        if ($discount->min_order_value && $subtotal < $discount->min_order_value) {
            return response()->json([
                'status' => 'error',
                'message' => 'Giá trị đơn hàng chưa đạt mức tối thiểu'
            ]);
        }

        $discountAmount = 0;
        if ($discount->discount_type === '%') {
            $discountAmount = $subtotal * ($discount->discount_value / 100);
        } else {
            $discountAmount = min($discount->discount_value, $subtotal);
        }

        $finalTotal = $subtotal + $shipping - $discountAmount;
        Log::info('Kết quả tính toán:', [
            'discount_amount' => $discountAmount,
            'final_total' => $finalTotal
        ]);

        // Lưu thông tin mã đã sử dụng vào session
        session(['applied_discount' => [
            'code' => $code,
            'amount' => $discountAmount
        ]]);

        return response()->json([
            'status' => 'success',
            'discount' => $discountAmount,
            'discount_id' => $discount->id,
            'final_total' => $finalTotal,
            'message' => 'Áp dụng mã giảm giá thành công'
        ]);
        
    }
}
