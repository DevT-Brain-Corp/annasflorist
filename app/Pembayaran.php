<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
}
