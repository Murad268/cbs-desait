<?php

namespace App\Http\Requests\services;

use Illuminate\Foundation\Http\FormRequest;

class updateServiceRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "services_item_icons" => "image|mimes:jpeg,jpg,png|max:2048",
            "name" => "required",
            'about_service' => 'required',
            'service_id' => "required"
        ];
    }
}
