<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo('App\Product','product_id');
    }
    public function order()
    {
        return $this->belongsTo('App\Order','invoice');
    }
    public function pot(){
        return $this->belongsTo(Pot::class, 'pots_id');
    }
}
