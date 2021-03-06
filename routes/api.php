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
    Route::resource('users', "Admin\UserController");

});
Route::middleware('auth:api')->group(function () {
    Route::resource('hotel.order', OrderController::class);
    Route::resource('hotel.rate', RateController::class);
    Route::resource('hotel', HotelController::class);
    Route::resource('shop', ShopController::class);
    Route::resource('bill', BillController::class);
    Route::resource('order.orderdetail', OrderdetailController::class);


});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
        Route::get('getalluser', 'AuthController@getAllUser');
        Route::post('getuserbyid', 'AuthController@getUserByID');
        Route::put('updateuser', 'AuthController@updateUser');
        Route::post('deleteuser', 'AuthController@deleteUser');
    });
});


