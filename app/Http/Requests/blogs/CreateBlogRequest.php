<?php

namespace App\Http\Requests\blogs;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
{
   
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'card_img' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'card_banner' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'category_id' => 'required',
            'blog_title' => 'required',
            'blog_content' => 'required|min:70'
        ];
    }
}
