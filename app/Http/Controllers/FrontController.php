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

  public function show()
    {
        return view('product.detail');
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
