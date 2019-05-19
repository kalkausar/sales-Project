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


Route::get('destination', function () {
    return view('frontend.destination');
});
// Route::get('about', function () {
//     return view('frontend.about');
// });
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

//FRONTEND
Route::get('/','FrontendController@home');
Route::get('about','FrontendController@about');
Route::get('template','FrontendController@template');

//ManageProfile
Route::get('editProfile','ManageProfileController@edit');
Route::put('editProfile/{id}','ManageProfileController@update');

//ManageSpecification
Route::get('spekPageAdmin','ManageProductController@indexSpec');
Route::get('spekPageAdmin/createSpecification','ManageSpecificationController@create');
Route::post('addspec','ManageSpecificationController@store');
Route::get('spekPageAdmin/{id}','ManageProductController@editSpek');
Route::put('spekPageAdmin/{id}/edit','ManageProductController@updateSpek');

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
Route::post('addAbout','ManageAboutController@store');
Route::get('aboutPageAdmin/{id}','ManageAboutController@edit');
Route::put('aboutPageAdmin/{id}/edit','ManageAboutController@update');

//ManageTesti
Route::get('testiPageAdmin','ManageTestiController@index');

//ManageContact
Route::get('contactPageAdmin','ManageContactController@index');
Route::get('contactPageAdmin/{id}/edit','ManageContactController@edit');
Route::put('contactPageAdmin/{id}','ManageContactController@update');

// Authentication routes...
Route::get('moshimoshi',['as' => 'moshimoshi','uses'=>'LoginController@index']);
Route::get('dashboard', 'AuthController@getRoot');
Route::post('moshimoshi/postLogin', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');
