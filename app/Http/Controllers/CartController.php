<?php

namespace App\Http\Controllers;

use Auth;
use \App\Cart;
use App\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
    	Cart::create([
    		'user_id' => Auth::user()->id,
            'product_id' => $request->productID,
            'pots_id' => $request->colorID,
    		'qty' => $request->qty,
    	]);
    	return response()->json(['msg' => 'ok']);
    }
    public function checkoutCart()
    {
        // global $template;
        // settype($template, "string");
        // $template = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        // settype($length, "integer");
        // settype($rndstring, "string");
        // settype($a, "integer");
        // settype($b, "integer");

        // for ($a = 0; $a <= 8; $a++) {
        //     $b = rand(0, strlen($template) - 1);
        //     $rndstring .= $template[$b];
        // }
        // Cart::where('user_id',Auth::user()->id)
        //     ->where('invoice',null)
        //     ->update([
        //         'invoice' => $rndstring,
        //     ]);
        // Order::create([
        //     'invoice' => $rndstring,
        //     'user_id' => Auth::user()->id,
        //     'penerima' =>
        // ]);
        return response()->json('ok');
    }
    public function ubahQty(Request $request)
    {

    }
    public function index()
    {
    	$cart = Auth::user()->cart;
    	$sum = Auth::user()->cart->sum('qty');
    	return view('product.sales.cart', compact('cart','sum'));
    }
    public function removeCart(Request $request)
    {
        Cart::whereId($request->itemID)->delete();
        return response()->json('ok');
    }
}
