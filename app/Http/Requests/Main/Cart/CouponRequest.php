<?php

namespace App\Http\Requests\Main\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'coupon' => 'required',
        ];
    }
}
