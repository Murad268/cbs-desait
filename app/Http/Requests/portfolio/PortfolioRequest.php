<?php

namespace App\Http\Requests\portfolio;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "filter_name" => "required"
        ];
    }
}
