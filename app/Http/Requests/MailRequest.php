<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "contact_name" => 'required',
            "contact_phone" => 'required',
            "contact_email" => 'required',
            "contact_message" => 'required',
        ];
    }
}
