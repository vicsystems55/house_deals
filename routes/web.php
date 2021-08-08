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

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/', 'FrontPageController@home')->name('home');

Route::get('/about', 'FrontPageController@about')->name('about');

Route::get('/contact', 'FrontPageController@contact')->name('contact');

Route::get('/store', 'FrontPageController@store')->name('store');

Route::get('/listing', 'FrontPageController@listing')->name('listing');

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

    Route::get('/listings', 'PartnerPageController@listings')->name('partner.listings');

    Route::get('/listing', 'PartnerPageController@listing')->name('partner.listing');
    
});


// Admin routes

Route::group(['middleware' => ['admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member', 'AdminPageController@member')->name('admin.member');

    Route::get('/listings', 'AdminPageController@listings')->name('admin.listings');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/reviews', 'AdminPageController@reviews')->name('admin.reviews');

    Route::get('/listing', 'AdminPageController@listing')->name('admin.listing');
    
});
