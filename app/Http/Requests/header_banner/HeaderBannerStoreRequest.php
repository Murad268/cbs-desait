<?php

namespace App\Http\Requests\header_banner;

use Illuminate\Foundation\Http\FormRequest;

class HeaderBannerStoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'banner__title' => 'required|string|max:24',
            'banner_subtitle' => 'required|string|max:50',
            'banner_img' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ];
    }
}
