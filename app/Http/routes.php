<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'HomeController@about');

Route::get('/contact', 'HomeController@contact');

Route::get('/privacy_policy', 'HomeController@privacy_policy');

Route::get('/terms_of_use', 'HomeController@terms_of_use');

Route::get('/home', 'HomeController@index');

Route::get('dps', 'DpController@index');

Route::get('dps/create', 'CreateController@dp_create');

Route::get('dps/{dp}', 'DpController@show');

Route::get('dps/tags/{tag}', 'DpController@tag');

Route::get('dps/categories/{category}', 'DpController@category');

Route::get('q', 'DpController@search');

Route::post('dps/sendForm', 'DpController@sendForm');

Route::get('licence', 'DpController@licence');

Route::get('message', 'DpController@message');

Route::get('dps/{dp}/like', 'DpController@incLikes');

Route::get('proposals', 'ProposalController@index');

Route::get('/cart', 'CartController@index');

Route::get('/cart_run', 'CartController@runTestPython');

Route::post('/cart', 'CartController@store');

Route::delete('/cart_remove/{id}', 'CartController@destroy');

Route::delete('emptyCart', 'CartController@emptyCart');