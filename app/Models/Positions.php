<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    public $table = 'positions';
    protected $guarded = [];
    use HasFactory;

    public function team() {
        return $this->hasMany(Team::class, 'position_id', 'id');
    }


    public static function boot()
    {
        parent::boot();

        static::deleting(function ($team) {
            $team->team()->delete();
        });
    }
}
