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

Route::get('/', "HomeController@index")->name('home');

Auth::routes();

Route::middleware('auth')->group(function (){

    $customer   = getTypeCustomer();
    $hall_owner = getTypeHallOwner();
    /*
    |--------------------------------------------------------------------------
    | Customer & Hall Owner Common Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware("user.type:$customer|$hall_owner")->group(function (){
        Route::get('/profile', 'ProfileController@index')->name('profile');
    });

    /*
    |--------------------------------------------------------------------------
    | Customer Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware("user.type:$customer")->group(function (){
        Route::get('/kaka', 'HomeController@kaka');
    });
});
