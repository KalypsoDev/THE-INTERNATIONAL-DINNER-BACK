<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id',
        'bill_id',
        'sale_date',
        'product_quantity',
        'price',
    ];

    //definir relaciones con otras tablas si es necesario

    /**
     * Get the product associated with the product bill.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the bill associated with the product bill.
     */
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
