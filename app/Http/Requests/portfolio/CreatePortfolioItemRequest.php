<?php

namespace App\Http\Requests\portfolio;

use Illuminate\Foundation\Http\FormRequest;

class CreatePortfolioItemRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "portfolio_item_img" => "required",
            'portfolio_item_title' => "required",
            'portfolio__item__category_id' => "required"
        ];
    }
}
