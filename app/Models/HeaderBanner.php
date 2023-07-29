<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderBanner extends Model
{
    protected $guarded = [];
    public $table = 'header_banners';
    use HasFactory;
}
