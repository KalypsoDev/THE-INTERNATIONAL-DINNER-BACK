<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodAllergen extends Model
{
    use HasFactory;

    protected $fillable = [
        'allergen_type',
    ];

    // public $timestamps = false;

}
