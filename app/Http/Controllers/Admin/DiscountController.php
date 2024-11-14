<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

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
        $request->validate([
            'discount_code' => 'required|unique:discount',
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Discount::create($request->all());
        return redirect()->route('admin.discounts.index')->with('success', 'Discount created successfully');
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
        $request->validate([
            'discount_code' => 'required|unique:discount,discount_code,' . $id,
            'description' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $discount = Discount::findOrFail($id);
        $discount->update($request->all());
        return redirect()->route('admin.discounts.index')->with('success', 'Discount updated successfully');
    }

    // Xóa discount
    public function delete($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();
        return redirect()->route('admin.discounts.index')->with('success', 'Discount deleted successfully');
    }
}
