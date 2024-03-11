<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flag extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_flag',
    ];

    // public $timestamps = false;

}
