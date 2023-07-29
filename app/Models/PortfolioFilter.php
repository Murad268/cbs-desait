<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioFilter extends Model
{
    protected $guarded = [];
    public $table = 'portfolio_filters';
    use HasFactory;
}
