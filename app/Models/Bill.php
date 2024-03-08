<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'units_quantity',
        'total_sale_price',
        'status',
    ];
    // public $timestamps = false;

    //definir relaciones con otras tablas si es necesario

    /**
     * Get the user that owns the bill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}