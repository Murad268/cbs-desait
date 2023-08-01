<?php

namespace App\Http\Requests\portfolio;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolioRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'portfolio_item_title' => "required",
            'portfolio__item__category_id' => "required",
            'about_portfolio_item' => "required",
        ];
    }
}
