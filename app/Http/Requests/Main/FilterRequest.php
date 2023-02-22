<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'priceFrom' => '',
            'priceTo' => '',
        ];
    }
}
