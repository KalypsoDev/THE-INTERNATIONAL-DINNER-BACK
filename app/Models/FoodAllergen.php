<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodAllergen extends Model
{
    
    protected $fillable = [
        'allergen_type',
    ];

    public $timestamps = false;

}
