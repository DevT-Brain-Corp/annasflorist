<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Pot;
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
            $products = Category::where('category_slug', $slug)->first()->products()->paginate(8);
            return view('categories.sales', compact('products'));
        }

    }

    public function showProduct($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        $pots = Pot::all();

        //status cek data pot ada atau tidak
        $status=0;
        // tampilkan data pot
        foreach ($pots as $i=>$pot){
            // cek data pot ->tidak kosong
            if (!empty($pot->pot_stock)){
                $status = $status+1;
            }

        }

        return view('product.sales.detail')
            ->with('product', $product)
            ->with('pots', $pots)
            ->with('status', $status)
            ->with('');
    }

    public function workshop(){
        $workshop = Article::where('jenis', 1)->paginate(6);
        return view('categories.workshop.index')
            ->with('workshop', $workshop);
    }
}
