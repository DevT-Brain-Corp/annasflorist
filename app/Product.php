<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $guarded = [];

    public function getStatusLabelAttribute()
    {
        if ($this->product_status == 0) {
            return '<span class="badge badge-secondary">Draft</span>';
        }
        return '<span class="badge badge-success">Aktif</span>';
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }
    public function cart()
    {
        return $this->hasMany('App\Cart');
    }
}
