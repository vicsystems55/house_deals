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


Auth::routes();


Route::get('/login', function () {
    return redirect('/authentication');
});

Route::get('/register', function () {
    return redirect('/authentication');
});

Route::get('/authentication', function () {
    return view('auth.login');
});

Route::post('/login', '\App\Http\Controllers\Auth\LoginController@login')->name('login');

Route::post('/register', '\App\Http\Controllers\Auth\RegisterController@register')->name('register');



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

    Route::get('/reviews', 'PartnerPageController@reviews')->name('partner.reviews');

    Route::get('/reservations', 'PartnerPageController@reservations')->name('partner.reservations');

    Route::get('/active_reservations', 'PartnerPageController@active_reservations')->name('partner.active_reservations');


    Route::get('/resolved_reservations', 'PartnerPageController@resolved_reservations')->name('partner.resolved_reservations');

    Route::get('/expired_reservations', 'PartnerPageController@expired_reservations')->name('partner.expired_reservations');

    Route::get('/subscriptions', 'PartnerPageController@subscriptions')->name('partner.subscriptions');

    Route::get('/listings', 'PartnerPageController@listings')->name('partner.listings')->middleware('profile_update');

    Route::get('/active_listings', 'PartnerPageController@active_listings')->name('partner.active_listings')->middleware('profile_update');

    Route::get('/pending_listings', 'PartnerPageController@pending_listings')->name('partner.pending_listings')->middleware('profile_update');

    Route::get('/disapproved_listings', 'PartnerPageController@disapproved_listings')->name('partner.disapproved_listings')->middleware('profile_update');

    Route::get('/listing', 'PartnerPageController@listing')->name('partner.listing')->middleware('profile_update');

    Route::get('/create_listing', 'PartnerPageController@create_listing')->name('partner.create_listing')->middleware('profile_update');
    
});


// Admin routes

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member/{user_code}', 'AdminPageController@member')->name('admin.member');

    Route::get('/listings', 'AdminPageController@listings')->name('admin.listings');

    Route::get('/reservations', 'AdminPageController@reservations')->name('admin.reservations');

    Route::get('/resolved_reservations', 'AdminPageController@resolved_reservations')->name('admin.resolved_reservations');

    Route::get('/expired_reservations', 'AdminPageController@expired_reservations')->name('admin.expired_reservations');

    Route::get('/active_subscriptions', 'AdminPageController@active_subscriptions')->name('admin.active_subscriptions');

    Route::get('/expired_subscriptions', 'AdminPageController@expired_subscriptions')->name('admin.expired_subscriptions');

    Route::get('/subscription_settings', 'AdminPageController@subscription_settings')->name('admin.subscription_settings');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/reviews', 'AdminPageController@reviews')->name('admin.reviews');

    Route::get('/wallet', 'AdminPageController@wallet')->name('admin.wallet');

    Route::get('/listing', 'AdminPageController@listing')->name('admin.listing');
    
});




// Listing Resource

Route::resource('/listingx', 'ListingController')->middleware('auth');


Route::post('/upload_pix', 'ListingImageController@store')->name('upload_pix');

Route::post('/create_listing', 'ListingImageController@create_listing')->name('create_listing');


Route::get('/get_images', 'ListingImageController@get_images')->name('get_images');
