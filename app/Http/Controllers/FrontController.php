<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class FrontController extends Controller
{
    public function showProductHome()
    {
        $products = Product::all()->groupBy('category.category_name');

        return view('welcomenew', compact('products'));
    }

    public function showCategory($slug)
    {
        $produk = Category::where('category_slug', $slug)->first();
        if ($produk==null){
            return view('categories.sales');
        }else{
            $product = Category::where('category_slug', $slug)->first()->products()->paginate(8);
            return view('categories.sales', compact('products'));
        }

    }

    public function showProduct($slug)
    {
        $product = Product::where('product_slug', $slug)->first();

        return view('product.sales.detail', compact('product'));
    }
}
