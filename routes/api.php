<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::apiResource('booking','BookingController');
});

Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Backend','middleware'=>'auth'], function(){
    Route::apiResource('dashboard','DashboardController');
    Route::apiResource('add_menu','AddMenuController');
    Route::apiResource('available_foods','AvailableFoodController');
    Route::apiResource('reservations','ReservationController');
    Route::apiResource('message','MessageController');
});
