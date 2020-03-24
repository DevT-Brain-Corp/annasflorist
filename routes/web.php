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
// Done Responsive
Route::get('/detail', function(){
  return view('product.detail');
});

Route::get('/sales', function () {
    return view('categories.sales');
});

Route::get('/cart', function () {
    return view('product.cart');
});

Route::get('/workshop', function () {
    return view('categories.workshop');
});

Route::get('/welcomenew', function(){
	return view('welcomenew');
});

Route::get('/buynow', function(){
	return view('product.buynow');
});

Route::get('/buynowbyatm', function(){
	return view('product.buynowbyatm');
});

Route::get('/buynowbybarcode', function(){
	return view('product.buynowbybarcode');
});

Route::get('/totalpay', function(){
	return view('product.totalpay');
});
// End Done Responsive

Route::get('/riwayat', function(){
	return view('product.riwayatpembelian');
});

Route::get('/testing', function () {
    return view('testing');
});
// End Debugging
