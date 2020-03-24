<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
  public function getProduct()
    {
        $products = Product::all();

        return view('welcome', compact('products'));
    }
}
