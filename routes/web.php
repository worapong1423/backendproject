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

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin/hotel',"HotelController@index");
Route::get('/admin/hotel/create',"HotelController@create");
Route::post('/admin/hotel/create',"HotelController@store");
Route::get('admin/hotel/{Hotel_id}/edit',"HotelController@edit");
Route::post('admin/hotel/{Hotel_id}/edit',"HotelController@update");
Route::post('admin/hotel/{Hotel_id}/delete',"HotelController@destroy");

Route::get('admin/product',"ProductController@index");
Route::get('/admin/product/create',"ProductController@create");
Route::post('/admin/product/create',"ProductController@store");
Route::get('admin/product/{Product_id}/edit',"ProductController@edit");
Route::post('admin/product/{Product_id}/edit',"ProductController@update");
Route::post('admin/product/{Product_id}/delete',"ProductController@destroy");
