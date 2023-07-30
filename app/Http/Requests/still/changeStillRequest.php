<?php

namespace App\Http\Requests\still;

use Illuminate\Foundation\Http\FormRequest;

class changeStillRequest extends FormRequest
{
 

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'still_title' => 'required',
            'still_description' => 'required'
        ];
    }
}
