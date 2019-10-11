<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:api'])->prefix('admin')->group(function () {
    //admin route
    Route::resource('roles', "Admin\RoleController");

});
Route::middleware('auth:api')->group(function () {
    Route::resource('/hotel',HotelController::class);
    Route::resource('/product',ProductController::class);

});


Route::resource('/test',ListController::class);
