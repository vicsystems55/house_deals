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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/update_listing', 'ListingController@update_listing');

Route::get('/user_listings', 'ListingController@user_listings');

Route::get('/all_listings', 'ListingController@all_listings');

Route::get('/listings', 'ListingController@listings');

Route::post('/listing_data', 'ListingController@listing_data');

Route::post('/approve_listing', 'ListingController@approve')->name('approval');

Route::post('/disapprove_listing', 'ListingController@disapprove')->name('disapproval');

Route::get('/active_listings', 'ListingController@active_listings');

Route::get('/published_listings', 'ListingController@published_listings');

Route::get('/reserved_listings', 'ListingController@reserved_listings');

Route::get('/approved_listings', 'ListingController@approved_listings');

Route::post('/reserve_listing', 'ReservationController@create_reservation')->name('reserve_listing');



