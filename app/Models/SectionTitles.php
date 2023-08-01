<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTitles extends Model
{
    public $table = "section_titles";
    protected $guarded = [];
    use HasFactory;
}
