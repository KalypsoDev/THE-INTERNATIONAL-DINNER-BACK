<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model
{
 
    protected $fillable = [
        'diet_type',
    ];

    public $timestamps = false;

}

