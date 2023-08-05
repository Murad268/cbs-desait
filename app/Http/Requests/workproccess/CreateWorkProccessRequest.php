<?php

namespace App\Http\Requests\workproccess;

use Illuminate\Foundation\Http\FormRequest;

class CreateWorkProccessRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "proccess_icon" => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'proccess_title' => "required",
            'proccess_desc' => "required",
        ];
    }
}
