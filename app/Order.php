<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'invoice',
        'customer_id',
        'customer_name',
        'customer_phone',
        'customer_address',
        'subtotal',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function pot()
    {
        return $this->belongsTo(Pot::class, 'pot_id');
    }
}
