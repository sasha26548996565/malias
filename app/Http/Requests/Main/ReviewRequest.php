<?php

namespace App\Http\Requests\Main;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'text' => 'required|min:2',
            'rate' => 'required'
        ];
    }
}
