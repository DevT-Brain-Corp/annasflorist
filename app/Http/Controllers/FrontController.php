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

        return view('welcomenew', compact('categories', 'products'));
    }

  public function show()
    {
        return view('product.detail');
    }

  public function cart()
    {
        return view('product.cart');
    }

  public function buynow()
    {
        return view('product.buynow');
    }

    public function buynowbyatm()
    {
        return view('product.buynowbyatm');
    }

    public function buynowbybarcode()
    {
        return view('product.buynowbybarcode');
    }

    public function totalpay()
    {
        return view('product.totalpay');
    }

    public function riwayat()
    {
        return view('product.riwayatpembelian');
    }
}
