<?php

namespace App\Http\Requests\product;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class FilterRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'page' => 'required|int',
            'min' => 'int',
            'max' => 'int',
            'characteristic' => 'array'
        ];
    }

}
