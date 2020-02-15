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
});
