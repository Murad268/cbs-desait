<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $guarded = [];
    public $table = 'portfolios';
    use HasFactory;

    public function filter() {
        return $this->hasOne(PortfolioFilter::class, 'id', 'portfolio__item__category_id');
    }
}
