<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    public $table = 'blog_categories';
    protected $guarded = [];
    use HasFactory;


    public function blogs() {
        return $this->hasMany(Blog::class, 'category_id', 'id');
    }


    public static function boot()
    {
        parent::boot();

        static::deleting(function ($blogs) {
            $blogs->blogs()->delete();
        });
    }
}
