<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'product_image', 'product_name', 'product_description', 'product_price', 'product_stock', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
