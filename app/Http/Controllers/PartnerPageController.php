<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

use App\UserProfile;

use App\PropertyFeature;

use App\SubscriptionPlanzz;

use App\PartnerSubscription;

use App\Review;

use App\Reservation;

use App\UserWallet;

use Session;

class PartnerPageController extends Controller
{
    //

    public function home()
    {
        $listings = Listing::where('published', 1)->latest()->get();

        $reservations = Reservation::with('listings')->latest()->get();

        $transactions = UserWallet::latest()->get();

        $notifications = Notification::where('user_id', Auth::user()->id)->latest()->get();

        $reviews = Review::latest()->get();

        return view('partner.home', compact([
            'listings', 'reservations', 'transactions', 'notifications', 'reviews'
        ]));
    }

    public function profile()
    {

        $profile = UserProfile::with('users')->with('company_profiles')->where('user_id', Auth::user()->id)->first();

        // dd($profile);
        
        
        return view('partner.profile',[
            'profile_data' => $profile
        ]);
    }

    public function notifications()
    {
        $user_id = Auth::user()->id;

        $notifications = Notification::where('user_id', $user_id)->latest()->get();
        
        
        return view('partner.notifications',[
            'notifications' => $notifications
        ]);
    }

    public function listings()
    {
        $user_id = Auth::user()->id;

        $listings = Listing::
        where('user_id', $user_id )
        ->where('published', 1 )
        ->latest()->paginate(30);

        // dd($listings);
        
        
        return view('partner.listings',[
            'listings' => $listings
        ]);
    }

    public function active_listings()
    {
        $user_id = Auth::user()->id;

        $listings = Listing::
        where('user_id', $user_id )
        ->where('published', 1 )
        ->latest()->paginate(30);

        // dd($listings);
        
        
        return view('partner.active_listings',[
            'listings' => $listings
        ]);
    }

    public function pending_listings()
    {
        $user_id = Auth::user()->id;

        // $listings = Listing::
        // where('user_id', $user_id )
        // ->where('published', 1 )
        // ->latest()->paginate(30);

        $listings = Http::post((config('app.url')).'api/user_listings',[
            'user_id' => Auth::user()->id
        ]);

    //     dd(collect(json_decode($listings))
    //     ->where('approved', 0)
    //     ->where('published', 1)
    // );
        
        
        return view('partner.pending_listings',[
            'listings' => collect(json_decode($listings))
                            ->where('approved', 0)
                            ->where('published', 1)
        ]);
    }

    public function disapproved_listings()
    {
        
        $user_id = Auth::user()->id;

        // $listings = Listing::
        // where('user_id', $user_id )
        // ->where('published', 1 )
        // ->latest()->paginate(30);

        $listings = Http::post((config('app.url')).'api/user_listings',[
            'user_id' => Auth::user()->id
        ]);

    //     dd(collect(json_decode($listings))
    //     ->where('approved', 0)
    //     ->where('published', 1)
    // );
        
        
        return view('partner.disapproved_listings',[
            'listings' => collect(json_decode($listings))
                            ->where('approved', 0)
                            ->where('published', 1)
        ]);
    }

    

    public function listing($listing_code)
    {

        $listing = Listing::where('listing_code', $listing_code)->first();

        $features = PropertyFeature::latest()->get();
        
        
        return view('partner.listing', [
            'listing_data' => $listing,
            'features' => $features
        ]);
    }

    public function create_listing()
    {

        # code...

        $features = PropertyFeature::latest()->get();

        $user_id = Auth::user()->id;

        // check if session exist with listing code


        $listing = Listing::where('listing_code', Session::get('listing_code'))->where('user_id', $user_id)->first();

       

        if (Session::get('listing_code') && $listing) {
            # code...

            // dd(Session::get('listing_code'));
            
        }else{

           session([
                'listing_code' => rand(11100,99999)
            ]);

            $listing = Listing::create([
                'listing_code' => Session::get('listing_code'),
                'user_id' => $user_id
            ]);

            // dd($vehicle_listing);

        }

        // dd($listing);

        return view('partner.create_listing',[
            'listing' => $listing,
            'features' => $features
        ]);
    }

    public function subscriptions()
    {

        $user_id = Auth::user()->id;

        
        $subscription_plans = SubscriptionPlanzz::latest()->get();

        $my_subscriptions =  PartnerSubscription::where('id', $user_id??'')->first();

        return view('partner.subscriptions', compact([
            'subscription_plans', 'my_subscriptions'
        ]));
    }

    public function reservations()
    {

        $user_id = Auth::user()->id;

        $listings = Reservation::with('listings')->latest()->paginate(30);

        return view('partner.reservations', compact([
           'listings'
        ]));
        
    }

    public function active_reservations()
    {

        $user_id = Auth::user()->id;

        $listings = Reservation::with('listings')->latest()->paginate(30);

        return view('partner.active_reservations', compact([
           'listings'
        ]));
        
    }

    public function resolved_reservations()
    {

        $user_id = Auth::user()->id;

        $listings = Reservation::with('listings')->latest()->paginate(30);

        return view('partner.resolved_reservations', compact([
           'listings'
        ]));
        
    }

    public function expired_reservations()
    {

        $user_id = Auth::user()->id;

        $listings = Reservation::with('listings')->latest()->paginate(30);

        return view('partner.expired_reservations', compact([
           'listings'
        ]));
    }


    public function reviews()
    {

        $user_id = Auth::user()->id;

        $reviews = Review::latest()->get();

        return view('partner.reviews', compact([
           'reviews'
        ]));
        
    }

    public function review()
    {

        $user_id = Auth::user()->id;

        return view('partner.review', compact([
           'reviews'
        ]));
        
    }
}
