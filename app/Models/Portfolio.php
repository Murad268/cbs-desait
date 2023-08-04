<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Portfolio extends Model
{

    protected $guarded = [];
    public $table = 'portfolios';
    use HasFactory;
    use HasSlug;
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('portfolio_item_title')
    ->saveSlugsTo('slug');
    }
    public function filter() {
        return $this->hasOne(PortfolioFilter::class, 'id', 'filter_id');
    }

    public function services()
    {
        return $this->belongsToMany(Services::class, 'portfolios_categories', 'portfolio_id', 'service_id');
    }
}
