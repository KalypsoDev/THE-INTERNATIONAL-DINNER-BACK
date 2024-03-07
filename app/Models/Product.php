<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;
    
    
    protected $fillable = [
        'product_name',
        'product_image_url',
        'product_description',
        'product_price',
        'flag_id',
        'diet_id',
        'allergen_type',
        'status',
    ];

    /**
     * Get the flag that owns the product.
     */
    public function flag()
    {
        return $this->belongsTo(Flag::class);
    }

    /**
     * Get the diet that owns the product.
     */
    public function diet()
    {
        return $this->belongsTo(Diet::class);
    }

    /**
     * Get the food allergen type that owns the product.
     */
    public function allergenType()
    {
        return $this->belongsTo(FoodAllergen::class);
    }
}
