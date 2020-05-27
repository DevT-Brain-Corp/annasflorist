<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atm extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->hasMany('App\Order','atm_id');
    }
}
