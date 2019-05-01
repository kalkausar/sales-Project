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
    return view('index');
});
Route::get('destination', function () {
    return view('frontend.destination');
});
Route::get('about', function () {
    return view('frontend.about');
});
Route::get('blog', function () {
    return view('frontend.blog');
});
Route::get('booking', function () {
    return view('frontend.booking');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('discount', function () {
    return view('frontend.discount');
});
Route::get('admin', function () {
    return view('admin.indexAdmin');
});
Route::get('produk', function () {
    return view('admin.produk');
});
Route::get('spek', function () {
    return view('admin.spek');
});
Route::get('about', function () {
    return view('admin.about');
});
Route::get('contactAdmin', function () {
    return view('admin.contact');
});
Route::get('testi', function () {
    return view('admin.testi');
});
Route::get('createProduct', function () {
    return view('admin.createProduk');
});
// Authentication routes...
Route::get('moshimoshi', 'Auth\AuthController@getLogin');
Route::post('moshimoshi', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

Route::post('moshimoshi/postLogin','Auth\AuthController@postLogin');
