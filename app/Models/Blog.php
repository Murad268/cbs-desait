<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blogs';
    protected $guarded = [];
    use HasFactory;

    public function category() {
        return $this->hasOne(BlogCategories::class, 'id', 'category_id');
    }
}
