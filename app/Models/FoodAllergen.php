<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodAllergen extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'allergen_type',
    ];

    //definir relaciones con otras tablas si es necesario

}
