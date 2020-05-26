<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function pot()
    {
        return $this->belongsTo(Pot::class, 'pot_id');
    }
    public function atm()
    {
        return $this->belongsTo('App\Atm','atm_id');
    }
    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail','invoice');
    }
    public function pembayaran()
    {
        return $this->hasMany('App\Pembayaran','order_id');
    }
}
