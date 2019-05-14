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
// Route::get('admin', function () {
//     return view('admin.indexAdmin');
// });
// Route::get('produkPageAdmin', function () {
//     return view('admin.produk');
// });
Route::get('spekPageAdmin', function () {
    return view('admin.spek');
});
// Route::get('aboutPageAdmin', function () {
//     return view('admin.about');
// });
// Route::get('contactPageAdmin', function () {
//     return view('admin.contact');
// });
Route::get('testiPageAdmin', function () {
    return view('admin.testi');
});
// Route::get('createProduct', function () {
//     return view('admin.createProduk');
// });
// Route::get('createSlider', function () {
//     return view('admin.createSlider');
// });


//ManageSlider
Route::get('admin','ManageSliderController@index');
Route::get('sliderPageAdmin/createSlider','ManageSliderController@create');
Route::post('addslider','ManageSliderController@store');
Route::get('admin/{id}','ManageSliderController@edit');
Route::put('admin/{id}/edit','ManageSliderController@update');
Route::put('deleteslider/{id}/','ManageSliderController@destroy');

//ManageProduct
Route::get('produkPageAdmin','ManageProductController@index');
Route::get('produkPageAdmin/createProduct','ManageProductController@create');
Route::post('addproduct','ManageProductController@store');
Route::get('produkPageAdmin/{id}','ManageProductController@edit');
Route::put('produkPageAdmin/{id}/edit','ManageProductController@update');
Route::put('deleteproduct/{id}/','ManageProductController@destroy');

//ManageAbout
Route::get('aboutPageAdmin','ManageAboutController@index');

//ManageContact
Route::get('contactPageAdmin','ManageContactController@index');
Route::get('contactPageAdmin/{id}/edit','ManageContactController@edit');
Route::put('contactPageAdmin/{id}','ManageContactController@update');

// Authentication routes...
Route::get('moshimoshi', 'Auth\AuthController@getLogin');
Route::post('moshimoshi', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

Route::post('moshimoshi/postLogin','Auth\AuthController@postLogin');
