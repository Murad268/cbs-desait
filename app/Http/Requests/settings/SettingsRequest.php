<?php

namespace App\Http\Requests\settings;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "keywords" => "required",
            'site_description' => 'required',
            'phone_number' => [
                'required',
                'regex:/^\+?[0-9]{1,3}-?[0-9]{6,14}$/',
            ],
            'email' => 'required|email',
            'wp_link' => 'required',
            'insta_link' => 'required',
            'fb_link' => 'required',
            'linkedin_link' => 'required',
            'location' => 'required',
            'map_link' => 'required'
        ];
    }
}
