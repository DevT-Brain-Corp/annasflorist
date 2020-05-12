<?php

namespace App\Http\Controllers;

use Auth;
use \App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
    	Cart::create([
    		'user_id' => Auth::user()->id,
    		'product_id' => $request->productID,
    		'qty' => $request->qty,
    	]);
    	return response()->json(['msg' => 'ok']);
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
