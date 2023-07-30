<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $table = 'teams';
    protected $guarded = [];
    use HasFactory;

    public function position() {
        return $this->hasOne(Positions::class, 'id', 'position_id');
    }
}
