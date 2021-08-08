<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

class AdminPageController extends Controller
{
    //

    public function home()
    {
        # code...

        return view('admin.home');
    }

    public function members()
    {
        # code...

        return view('admin.members');
    }

    public function member()
    {
        # code...

        return view('admin.member');
    }

    public function listings()
    {
        # code...

        return view('admin.listings');
    }

    public function listing()
    {
        # code...

        return view('admin.listing');
    }

    public function notifications()
    {
        # code...

        return view('admin.notifications');
    }

    public function reviews()
    {
        # code...

        return view('admin.reviews');
    }
}
