<?php

namespace App\Http\Requests\services;

use Illuminate\Foundation\Http\FormRequest;

class serviceCreateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => "required",
            'service_id' => "required"
        ];
    }
}
