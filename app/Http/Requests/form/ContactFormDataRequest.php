<?php

namespace App\Http\Requests\form;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormDataRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'form_title' => 'required',
            'form_subtitle' => 'required'
        ];
    }
}
