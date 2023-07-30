<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Still extends Model
{
    protected $table = "stills";
    public $guarded = [];
    use HasFactory;
}
