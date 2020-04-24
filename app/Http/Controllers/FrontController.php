<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        $products = Product::all()->groupBy('category.category_name');

        return view('welcomenew', compact('products'));
    }

    public function showCategory()
    {
        $products = Product::all();
        $categories = Category::all();

        return view('categories.sales', compact('products', 'categories'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);

        return view('product.sales.detail', compact('product'));
    }
}
