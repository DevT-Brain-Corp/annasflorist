<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'order_name', 'order_address', 'order_province', 'order_city', 'order_address', 'order_service', 'order_payment'
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
