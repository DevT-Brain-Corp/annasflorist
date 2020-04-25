<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
        'product_image', 'product_name', 'product_slug', 'product_description', 'product_price', 'product_stock', 'product_status', 'category_id'
    ];

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

    public function order()
    {
        return $this->hasMany(Order::class, 'order_id', 'id');
    }
}
