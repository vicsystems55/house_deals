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
    return redirect('/login');
});

Auth::routes();


Route::get('/choose', 'ChooseRoleController@index')->name('choose_role');

Route::post('/become_partner', 'ChooseRoleController@become_partner')->name('become_partner');

Route::post('/become_buyer', 'ChooseRoleController@become_buyer')->name('become_buyer');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/profile_incomplete', 'UserProfileController@profile_incomplete')->name('profile_incomplete');

Route::post('/update_profile', 'UserProfileController@update_profile')->name('update_profile');

Route::post('/admin_verify', 'UserProfileController@admin_verify')->name('admin_verify')->middleware('admin');

Route::post('/disapprove_profile', 'UserProfileController@disapprove_profile')->name('disapprove_profile')->middleware('admin');


Route::get('/edit_profile', 'UserProfileController@edit_profile')->name('edit_profile');



// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'FrontPageController@home')->name('home');

Route::get('/about', 'FrontPageController@about')->name('about');

Route::get('/contact', 'FrontPageController@contact')->name('contact');

Route::get('/shop', 'FrontPageController@shop')->name('shop');

Route::get('/listing', 'FrontPageController@listing')->name('listing');

Route::get('/details', 'FrontPageController@details')->name('details');

Route::get('/home', 'FrontPageController@home')->name('home');

// Buyers routes



Route::group(['middleware' => ['buyer'], 'prefix' => 'buyer'], function(){

    

    Route::get('/', 'BuyerPageController@home')->name('buyer.home');

    Route::get('/profile', 'BuyerPageController@profile')->name('buyer.profile');

    Route::get('/notifications', 'BuyerPageController@notifications')->name('buyer.notifications');

    Route::get('/account', 'BuyerPageController@account')->name('buyer.account');

  

});

// Partners routes

Route::group(['middleware' => ['partner'], 'prefix' => 'partner'], function(){

    Route::get('/', 'PartnerPageController@home')->name('partner.home');

    Route::get('/profile', 'PartnerPageController@profile')->name('partner.profile');

    Route::get('/notifications', 'PartnerPageController@notifications')->name('partner.notifications');

    Route::get('/listings', 'PartnerPageController@listings')->name('partner.listings')->middleware('profile_update');

    Route::get('/active_listings', 'PartnerPageController@listings')->name('partner.active_listings')->middleware('profile_update');

    Route::get('/pending_listings', 'PartnerPageController@listings')->name('partner.pending_listings')->middleware('profile_update');

    Route::get('/disapproved_listings', 'PartnerPageController@listings')->name('partner.disapproved_listings')->middleware('profile_update');

    Route::get('/listing', 'PartnerPageController@listing')->name('partner.listing')->middleware('profile_update');

    Route::get('/create_listing', 'PartnerPageController@create_listing')->name('partner.create_listing')->middleware('profile_update');
    
});


// Admin routes

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member/{user_code}', 'AdminPageController@member')->name('admin.member');

    Route::get('/listings', 'AdminPageController@listings')->name('admin.listings');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/reviews', 'AdminPageController@reviews')->name('admin.reviews');

    Route::get('/listing', 'AdminPageController@listing')->name('admin.listing');
    
});




// Listing Resource

Route::resource('/listingx', 'ListingController')->middleware('auth');


Route::post('/upload_pix', 'ListingImageController@store')->name('upload_pix');


Route::get('/get_images', 'ListingImageController@get_images')->name('get_images');
