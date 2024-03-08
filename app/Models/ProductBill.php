<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBill extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'bill_id',
        'sale_date',
        'product_quantity',
        'price',
    ];
    // public $timestamps = false;

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
