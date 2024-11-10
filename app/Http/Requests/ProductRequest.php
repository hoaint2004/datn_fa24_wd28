<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string|max:255',
            
            // Validation cho các biến thể sản phẩm
            'variants' => 'nullable|array', // Cho phép variants là một mảng hoặc không có
            'variants.*.size' => 'required_with:variants.*.color,variants.*.quantity|string|max:50', 
            'variants.*.color' => 'required_with:variants.*.size,variants.*.quantity|string|max:50', 
            'variants.*.quantity' => 'required_with:variants.*.size,variants.*.color|integer|min:0', 
        ];
    }
    
    
    /**
     * Get custom messages for validator errors.
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm là bắt buộc.',
            'image.required' => 'Ảnh là bắt buộc.',
            'image.image' => 'Ảnh phải là một tệp hình ảnh.',
            'image.mimes' => 'Ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'image.max' => 'Ảnh không được vượt quá 2MB.',
            'price.required' => 'Giá sản phẩm là bắt buộc.',
            'price.numeric' => 'Giá phải là một số.',
            'price.min' => 'Giá phải là một số không âm.',
            'category_id.exists' => 'Danh mục không hợp lệ.',
            'description.max' => 'Chú thích không được quá 255 ký tự.',

            // Thông báo lỗi cho biến thể
            'variants.*.size.required_with' => 'Kích thước là bắt buộc khi thêm biến thể.',
            'variants.*.color.required_with' => 'Màu sắc là bắt buộc khi thêm biến thể.',
            'variants.*.quantity.required_with' => 'Số lượng là bắt buộc khi thêm biến thể.',
            'variants.*.quantity.integer' => 'Số lượng phải là số nguyên.',
            'variants.*.quantity.min' => 'Số lượng không được nhỏ hơn 0.',
        ];
    }
}
