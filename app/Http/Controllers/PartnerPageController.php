<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

use App\UserProfile;

use App\PropertyFeature;

use Session;

class PartnerPageController extends Controller
{
    //

    public function home()
    {
        
        
        return view('partner.home');
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
        
        
        return view('partner.listings');
    }

    public function listing()
    {
        
        
        return view('partner.listing');
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
}
