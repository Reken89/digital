<?php

namespace App\Structure\BasketSection\User\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasketDeleteRequest extends FormRequest
{
     /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id' => 'required|integer',
        ];
    }   
}

