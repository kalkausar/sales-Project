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

//FRONTEND
Route::get('/','FrontendController@home');
Route::get('about','FrontendController@about');
Route::get('template','FrontendController@template');
Route::get('contact','FrontendController@contact');
Route::get('product','FrontendController@product');
Route::get('spesifikasi/{id}','FrontendController@productDetail');

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
Route::get('testiPageAdmin/createTestimoni','ManageTestiController@create');
Route::post('addtestimoni','ManageTestiController@store');
Route::put('deletetestimoni/{id}/','ManageTestiController@destroy');

//ManageContact
Route::get('contactPageAdmin','ManageContactController@index');
Route::get('contactPageAdmin/{id}/edit','ManageContactController@edit');
Route::put('contactPageAdmin/{id}','ManageContactController@update');
Route::post('addContact','ManageContactController@store');

// Authentication routes...
Route::get('moshimoshi',['as' => 'moshimoshi','uses'=>'LoginController@index']);
Route::get('error', 'LoginController@error');
Route::get('dashboard', 'AuthController@getRoot');
Route::post('moshimoshi/postLogin', 'LoginController@postLogin');
Route::get('logout', 'LoginController@logout');
