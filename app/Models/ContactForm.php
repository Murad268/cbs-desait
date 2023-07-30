<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    public $table = 'contact_forms';
    protected $guarded = [];
    use HasFactory;
}
