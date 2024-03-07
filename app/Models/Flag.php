<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    
    protected $fillable = [
        'country_flag',
    ];

    public $timestamps = false;

}
