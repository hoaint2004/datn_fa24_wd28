<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('id');
        return [
            'name' => 'required|string|max:255|unique:categories,name,' . $id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục',
            'name.max' => 'Tên danh mục tối đa 255 kí tự',
            'name.string' => 'Tên danh mục phải là chuỗi',
            'name.unique' => 'Tên danh mục đã tồn tại',
        ];
    }
}