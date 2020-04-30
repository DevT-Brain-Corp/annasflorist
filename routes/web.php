<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontController@getProduct')->name('welcome');

Auth::routes();
// Override login route from Auth::routes();
Route::get('/login', function () {
	return redirect('/');
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/', 'DashboardController@index')->name('admin.dashboard');
	Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('order', 'OrderController');
    Route::resource('pot', 'PotController');
});

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});


// Debugging
// Sales
Route::get('/sales', function () {
	return view('categories.sales');
});

Route::get('/sales/detail', function(){
	return view('product.sales.detail');
});

Route::get('/sales/cart', function () {
	return view('product.sales.cart');
});

Route::get('/sales/buynow', function(){
	return view('product.sales.buynow');
});

Route::get('/sales/buynowbyatm', function(){
	return view('product.sales.buynowbyatm');
});

Route::get('/sales/buynowbybarcode', function(){
	return view('product.sales.buynowbybarcode');
});

Route::get('/sales/totalpay', function(){
	return view('product.sales.totalpay');
});

Route::get('/sales/riwayat', function(){
	return view('product.sales.riwayatpembelian');
});
// End Sales

// daily
Route::get('/daily', function(){
	return view('product.daily.index');
});
// end daily

Route::get('/welcomenew', function(){
	return view('welcomenew');
});

Route::get('/testing', function () {
    return view('base.static.testing');
});
// End Debugging
