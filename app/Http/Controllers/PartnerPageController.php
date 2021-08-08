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
        
        
        return view('partner.notifications');
    }

    public function listings()
    {
        
        
        return view('partner.listings');
    }

    public function listing()
    {
        
        
        return view('partner.listing');
    }
}
