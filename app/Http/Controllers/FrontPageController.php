<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

class FrontPageController extends Controller
{
    //



    public function home()
    {
        # code...

        return view('front_page.home');
    }

    public function about()
    {
        # code...

        return view('front_page.about');
    }

    public function contact()
    {
        # code...

        return view('front_page.contact');
    }

    public function shop()
    {
        # code...

        return view('front_page.shop');
    }

    public function listing()
    {
        # code...

        return view('front_page.listing');
    }
    

    
}
