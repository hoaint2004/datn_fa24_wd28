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
            'image' => $this->isMethod('post') ? 'required|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric|min:1000',
            'price_old' => 'required|numeric|min:1000|gte:price',
            'category_id' => 'required|integer|exists:categories,id',
            'description' => 'nullable|string|max:255',

            // Mảng product_galleries[]
            'product_galleries' => 'nullable|array',
            'product_galleries.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

            // Validation cho các biến thể sản phẩm
            'variants' => 'nullable|array',
            'variants.*.size' => 'required_with:variants.*.color,variants.*.quantity|integer|between:20,50', // Kích thước chỉ từ 40 đến 50
            'variants.*.color' => 'required_with:variants.*.size,variants.*.quantity|string|', // Màu chỉ được chọn từ các giá trị cụ thể
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
            'price_old.required' => 'Giá cũ là bắt buộc',
            'price.numeric' => 'Giá phải là một số.',
            'price.min' => 'Giá phải lớn hơn 1000.',
            'price_old.numeric' => 'Giá cũ phải là một số.',
            'price_old.min' => 'Giá cũ phải lơn hơn 1000.',
            'price_old.gte' => 'Giá cũ phải lớn hơn hoặc bằng giá hiện tại.',
            'category_id.exists' => 'Danh mục không hợp lệ.',
            'description.max' => 'Chú thích không được quá 255 ký tự.',

            // Thông báo lỗi cho product_galleries[]
            'product_galleries.*.image' => 'Tệp phải là một hình ảnh.',
            'product_galleries.*.mimes' => 'Ảnh phải có định dạng jpeg, png, jpg, hoặc gif.',
            'product_galleries.*.max' => 'Kích thước của mỗi ảnh không được vượt quá 2MB.',

            // Thông báo lỗi cho biến thể
            'variants.*.size.required_with' => 'Kích thước là bắt buộc khi thêm biến thể.',
            'variants.*.size.between' => 'Kích thước chỉ được chọn từ 40 đến 50.',
            'variants.*.color.required_with' => 'Màu sắc là bắt buộc khi thêm biến thể.',
            'variants.*.color.in' => 'Màu sắc chỉ được chọn: Trắng, Đỏ, Xanh, Hồng, Đen.',
            'variants.*.quantity.required_with' => 'Số lượng là bắt buộc khi thêm biến thể.',
            'variants.*.quantity.integer' => 'Số lượng phải là số nguyên.',
            'variants.*.quantity.min' => 'Số lượng không được nhỏ hơn 0.',
        ];
    }
}
