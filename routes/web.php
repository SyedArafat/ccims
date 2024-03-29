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
Route::get('/venue', 'VenueController@indexList')->name('venue.index_list');
Route::get('/venue/{venue}', 'VenueController@show')->name('venue.show');

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
        Route::get('/user/profile', 'ProfileController@index')->name('user.profile');
        Route::post('user/{user}/update-profile-photo', "ProfileController@updateProfilePhoto");
        Route::post('user/{user}/update-profile-info', "ProfileController@updateProfileInfo");
        Route::post('venue/{venue}/favourite/{user}', 'FavouriteController@change')->name('venue_favourite.change');
        Route::post('venue/booking', 'BookingController@store')->name('venue.booking');
        Route::get('favorite/venues', "FavoriteVenueController@index")->name('venue.favorite');
        Route::get('venue-pending-list', "VenueBookingController@pending_list")->name('venue.pending_list');
    });

    /*
    |--------------------------------------------------------------------------
    | Customer Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware("user.type:$customer")->group(function (){
        Route::post("/venue/{venue}/review", "ReviewController@store")->name('review.store');
        Route::get('/review/{review}/edit', 'ReviewController@edit')->name('review.edit');
        Route::post('/review/{review}', 'ReviewController@update');
    });

    /*
    |--------------------------------------------------------------------------
    | Hall Owner Routes
    |--------------------------------------------------------------------------
    */

    Route::middleware("user.type:$hall_owner")->group(function (){
        Route::get('/venue-create', 'VenueController@create')->name('venue.create');
        Route::post('/venue', 'VenueController@store')->name('venue.store');
        Route::get('/venue/{venue}/edit', 'VenueController@edit')->name('venue.edit');
        Route::patch('/venue/{venue}/update', 'VenueController@update')->name('venue.update');
        Route::get('/approve-booking/{book}', "VenueBookingController@approve")->name('venue.approve_booking');
        Route::get('/reject-booking/{book}', "VenueBookingController@reject")->name('venue.reject_booking');

    });
});
