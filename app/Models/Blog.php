<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Blog extends Model
{
    public $table = 'blogs';
    protected $guarded = [];
    use HasFactory;
    use HasSlug;
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('blog_title')
    ->saveSlugsTo('slug');
    }
    public function category() {
        return $this->hasOne(BlogCategories::class, 'id', 'category_id');
    }

    public function convertDate($date) {
        Carbon::setLocale('az');
        $date = Carbon::parse($date);
        return $date->isoFormat('D MMMM YYYY');
    }
}
