<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    public $table = 'blog_categories';
    protected $guarded = [];
    use HasFactory;
}
