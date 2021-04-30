<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/dashboard', function () {
    return redirect('admin/dashboard');
});
Route::get('/', function () {
    return redirect('home');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Backend','middleware'=>'auth'], function(){
    Route::get('dashboard','DashboardController@index');
    Route::get('add_menu','AddMenuController@create');
    Route::get('available_foods','AddMenuController@index');
    Route::get('reservations','ReservationController@index');
    Route::get('message','MessageController@index');
});

Route::group(['namespace'=>'App\Http\Controllers'], function(){
    Route::get('home','HomeController@index');
    Route::get('about','AboutController@index');
    Route::get('menu','MenuController@index');
    Route::get('booking','BookingController@index');
    Route::get('delivery','HomeDeliveryController@index');
    Route::post('dropzone/upload', 'HelpersController@dropzone')->name('dropzone.upload');
    Route::post('dropzone/file/remove', 'HelpersController@removeDropzone')->name('dropzone.remove');
});
