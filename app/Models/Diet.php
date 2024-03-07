<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diet extends Model
{   
    use HasFactory;
 
    protected $fillable = [
        'diet_type',
    ];

    public $timestamps = false;

}

