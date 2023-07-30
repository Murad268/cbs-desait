<?php

namespace App\Http\Requests\team;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployerRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "employer_avatar" => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'position_id' => "required",
            'employer_name' => "required"
        ];
    }
}
