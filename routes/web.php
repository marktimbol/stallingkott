<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/about/president', ['as' => 'president', 'uses' => 'PagesController@president']);
Route::get('/about/company', ['as' => 'company', 'uses' => 'PagesController@company']);
Route::get('/services', ['as' => 'services', 'uses' => 'ServicesController@index']);
Route::get('/products', ['as' => 'products', 'uses' => 'ProductsController@index']);
Route::get('/product/vortex', ['as' => 'products.vortex', 'uses' => 'ProductsController@vortex']);
Route::get('/clients', ['as' => 'clients', 'uses' => 'ClientsController@index']);
Route::get('/materials', 'MaterialsController@index');

Route::post('/inquiries', [
	'as' => 'inquiries.store', 
	'uses' => 'InquiriesController@store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
