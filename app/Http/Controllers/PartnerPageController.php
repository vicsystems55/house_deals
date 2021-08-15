<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

class PartnerPageController extends Controller
{
    //

    public function home()
    {
        
        
        return view('partner.home');
    }

    public function profile()
    {
        
        
        return view('partner.profile');
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
        
        
        return view('partner.create_listing');
    }
}
