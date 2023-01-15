<?php

namespace App\Http\Requests\Main\Cart;

use Illuminate\Foundation\Http\FormRequest;

class ActionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'quantity' => 'nullable',
            'action' => 'required',
        ];
    }
}
