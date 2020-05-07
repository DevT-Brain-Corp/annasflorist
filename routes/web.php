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

Route::get('/', 'FrontController@showProductHome')->name('welcome');
Route::get('/category/{slug}', 'FrontController@showCategory')->name('show.category');
Route::get('/product/{slug}', 'FrontController@showProduct')->name('show.product');

Route::get('/homelama', function () {
    return view('welcomeold');    //awal homepage
});

Auth::routes();
// Override login route from Auth::routes();
Route::get('/login', function () {
	return redirect('/');
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
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
Route::get('/testing', function () {
    return view('testing');
});

// Sales
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

// user
Route::get('/user/read', function(){
	return view('user.read');
});

Route::get('/user/update', function(){
	return view('user.update');
});
// end user

Route::get('/welcomenew', function(){
	return view('welcomenew');
});

Route::get('/testing', function () {
    return view('base.static.testing');
});
// End Debugging
