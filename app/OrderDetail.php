<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $fillable = ['product_price','product_quantity','order_id','product_id'];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Order','order_id');
    }
}
