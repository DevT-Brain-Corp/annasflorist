<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::all()->groupBy('category.category_name');

        return view('welcomenew', compact('products'));
    }
}
