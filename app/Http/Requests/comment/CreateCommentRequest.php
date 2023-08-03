<?php

namespace App\Http\Requests\comment;

use Illuminate\Foundation\Http\FormRequest;

class CreateCommentRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'chose_us_position' => 'required',
            'chose_us_name' => 'required',
            'chose_us_comment' => 'required|string|max:150',
            'chose_us_img' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ];
    }
}
