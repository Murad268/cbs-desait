<?php

namespace App\Http\Requests\comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'chose_us_position' => 'required|string|max:12',
            'chose_us_name' => 'required|string|max:24',
            'chose_us_comment' => 'required|string|max:50'
        ];
    }
}
