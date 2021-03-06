<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => ['required', 'string', 'unique:category,code'],
            'name' => ['required', 'string'],
        ];
    }
    public function messages() {
        return [
            'code.required' => 'Category code is required',
            'code.unique' => 'Category code is already exist',
            'name.required' => 'Category name is required',
        ];
    }
}
