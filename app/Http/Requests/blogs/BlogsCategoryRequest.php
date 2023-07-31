<?php

namespace App\Http\Requests\blogs;

use Illuminate\Foundation\Http\FormRequest;

class BlogsCategoryRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'categoy_name' => 'required'
        ];
    }
}
