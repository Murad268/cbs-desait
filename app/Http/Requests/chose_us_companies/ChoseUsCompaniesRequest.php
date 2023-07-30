<?php

namespace App\Http\Requests\chose_us_companies;

use Illuminate\Foundation\Http\FormRequest;

class ChoseUsCompaniesRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'company_img' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ];
    }
}
