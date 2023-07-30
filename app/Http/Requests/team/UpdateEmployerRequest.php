<?php

namespace App\Http\Requests\team;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'position_id' => "required",
            'employer_name' => "required"
        ];
    }
}
