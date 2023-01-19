<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'address' => 'required',
            'address_2' => 'required',
            'post_code' => 'required',
            'country_id' => 'required',
            'region_id' => 'required',
        ];
    }
}
