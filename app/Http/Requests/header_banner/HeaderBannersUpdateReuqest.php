<?php

namespace App\Http\Requests\header_banner;

use Illuminate\Foundation\Http\FormRequest;

class HeaderBannersUpdateReuqest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'banner__title' => 'required|string',
            'banner_subtitle' => 'required|string'
        ];
    }
}
