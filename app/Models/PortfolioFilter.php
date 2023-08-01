<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioFilter extends Model
{
    protected $guarded = [];
    public $table = 'portfolio_filters';
    use HasFactory;


    public function portfolioItems() {
        return $this->hasMany(Portfolio::class, 'filter_id', 'id');
    }



    public static function boot()
    {
        parent::boot();

        static::deleting(function ($items) {
            $items->portfolioItems()->delete();
        });
    }

}
