<?php

namespace App\Http\Requests\about;

use Illuminate\Foundation\Http\FormRequest;

class ChangeAboutRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'about_top' => 'required',
            'about_title' => 'required',
            'about_text' => 'required'
        ];
    }
}
