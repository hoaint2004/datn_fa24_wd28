<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'name' => 'required|string|max:255|unique:banners,name,' . $id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên banner không được để trống',
            'name.string' => 'Tên banner phải là chuỗi ký tự',
            'name.max' => 'Tên banner không được vượt quá 255 ký tự',
            'name.unique' => 'Tên banner đã tồn tại',
        ];
    }
}
