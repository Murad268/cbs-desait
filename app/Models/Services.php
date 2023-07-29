<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Services extends Model
{
    use HasFactory;
    use HasSlug;
    public $table = 'services';
    protected $guarded = [];
    public function getSlugOptions() : SlugOptions
    {
    return SlugOptions::create()
    ->generateSlugsFrom('name')
    ->saveSlugsTo('slug');
    }

    public function services() {
        return $this->hasMany(Services::class, 'service_id', 'id');
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($services) {
            $services->services()->delete();
        });
    }
}
