<?php

namespace App\Structure\ShopSection\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClothesUploadRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'image'       => 'required|image',
            'price'       => 'required|numeric|between:0.00,999999.99',
            'name'        => 'required|string',
            'description' => 'required|string',
            'size'        => 'required|integer',
            'category'    => 'required|integer',
        ];
    }   
}

