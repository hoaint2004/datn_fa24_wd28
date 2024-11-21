<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Discount created successfully');
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
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Discount updated successfully');
    }

    // Xóa discount
    public function delete($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();
        return redirect()->route('admin.discounts.index')->with('status_succeed', 'Discount deleted successfully');
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
            'discount_type' => ['required', Rule::in(['percentage', 'fixed'])], // Kiểm tra loại giảm giá
            'discount_value' => [
                'required',
                'numeric',
                'min:0',
                Rule::when($request->discount_type === 'percentage', 'max:100') // Nếu là percentage, giới hạn tối đa 100
            ],
            'min_order_value' => 'nullable|numeric|min:0', // Kiểm tra giá trị đơn hàng tối thiểu
            'usage_limit' => 'nullable|integer|min:1', // Kiểm tra giới hạn sử dụng
        ]);
    }
    
}
