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
    return view('landing');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-donor', 'DonorRegistrationController@index')->name('register-donor');

Route::get('/donate-milk', 'DonateMilkController@index')->name('donate-milk');

Route::get('/purchase-milk', 'PurchaseMilkController@index')->name('purchase-milk');

Route::get('/cart', 'CartController@index')->name('cart');

Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );

Route::namespace('Forms')->group(function () {
    
});