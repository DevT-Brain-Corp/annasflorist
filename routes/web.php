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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/detail', 'FrontController@show')->name('detail');
Route::get('/cart', 'FrontController@cart')->name('cart');
Route::get('/testing', 'FrontController@testing')->name('testing');
Route::get('/buynow', 'FrontController@buynow')->name('buynow');
Route::get('/buynowbyatm', 'FrontController@buynowbyatm')->name('buynowbyatm');
Route::get('/buynowbybarcode', 'FrontController@buynowbybarcode')->name('buynowbybarcode');
Route::get('/totalpay', 'FrontController@totalpay')->name('totalpay');
// End Debugging
