<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

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

        $response = Http::get((config('app.url')).'api/listings');

        // dd($response->object());

        return view('front_page.shop',[
            'listings' => $response->object()
        ]);
    }

    public function listing()
    {
        # code...

        return view('front_page.listing');
    }

    public function details()
    {
        # code...

        return view('front_page.details');
    }
    

    
}
