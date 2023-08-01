<?php

namespace App\Http\Requests\descriptions;

use Illuminate\Foundation\Http\FormRequest;

class SectionDesqriptionsRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "section__desc" => "required"
        ];
    }
}
