<?php

namespace App\Http\Requests\positions;

use Illuminate\Foundation\Http\FormRequest;

class PositionsRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'position_name' => 'required',
        ];
    }
}
