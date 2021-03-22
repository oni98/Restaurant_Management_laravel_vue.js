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

Route::get('/', function () {
    return redirect('home');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'auth'], function(){
    Route::get('home','HomeController@index');
    Route::get('about','AboutController@index');
    Route::get('menu','MenuController@index');
    Route::get('booking','BookingController@index');
    Route::get('delivery','HomeDeliveryController@index');
});

