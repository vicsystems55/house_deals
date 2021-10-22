<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use Auth;

use App\Notification;

use App\Listing;

use App\User;

use App\UserProfile;

use App\UserWallet;

use App\Reservation;

use App\Review;

use Response;

class AdminPageController extends Controller
{
    //

    public function home()
    {
        # code...

        $listings = Listing::where('published', 1)->latest()->get();

        $reservations = Reservation::with('listings')->latest()->get();

        $transactions = UserWallet::latest()->get();

        $members = User::where('role', '!=', 'admin')->get();

        $notifications = Notification::where('user_id', Auth::user()->id)->latest()->get();

        $reviews = Review::latest()->get();

        return view('admin.home', compact([
            'listings', 'reservations', 'transactions', 'members', 'notifications', 'reviews'
        ]));
    }

    public function members()
    {
        # code...

        $members = User::with('user_profiles')->latest()->where('role', '!=', 'admin')->get();

    

        return view('admin.members',[
            'members' => $members
        ]);
    }

    public function member($user_code)
    {
        # code...
        $user = User::where('user_code', $user_code)->first();

        $member_data = UserProfile::with('users')->with('company_profiles')->where('user_id', $user->id)->first();

        // dd($member_data);

        return view('admin.member',[
            'member' => $member_data
        ]);
    }

    public function listings()
    {
        # code...

        $response = Http::get((config('app.url')).'api/listings');
        

        // dd(json_decode($response));

        // return $response->json();

        // $listings = json_encode($response->getBody());
        // $listings = json_encode($result, true);

        // $listings = json_decode(
        //     json_encode(
        //         $response->json()['data']
        //     ), FALSE);

            // dd($lis);



        return view('admin.listings',[
            'listings' => json_decode($response)
        ]);
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

    public function reservations()
    {
        # code...

        return view('admin.reservations');
    }

    public function reservation()
    {
        # code...

        return view('admin.reservation');
    }

    public function active_subscriptions()
    {
        # code...

        return view('admin.active_subscriptions');
    }

    public function expired_subscriptions()
    {
        # code...

        return view('admin.expired_subscriptions');
    }

    public function subscription_settings()
    {
        # code...

        return view('admin.subscription_settings');
    }

    public function wallet()
    {
        # code...

        $transactions = UserWallet::latest()->paginate(30);

        return view('admin.wallet', compact($transactions));
    }
}
