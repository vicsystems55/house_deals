<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use App\ListingFeature;

use App\Notification;

use App\User;

use Session;

use Auth;

class ListingController extends Controller
{
    public function create_listing(Request $request)
    {

      

        $user_id = Auth::user()->id;

        $user_data = User::where('id', $user_id)->first();

        $listing_code = Session::get('listing_code');

        $listing = Listing::where('listing_code', $listing_code)->first();

        foreach ($request->features as $feature) {
            
            ListingFeature::create([
                'listing_id' => $listing->id,
                'property_features_id' => $feature
            ]);

        }

        // dd($listing);


            
        $request->validate([
             
            // 'make' => 'required',
            // 'model' => 'required',
            // 'year' => 'required',
            // 'color' => 'required',
            // 'condition' => 'required',
            // 'transmission' => 'required',
            // 'engine_size' => 'required',
            // 'phone_number' => 'required',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            // 'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);




        $listing->update([
            'user_id' => $user_id,
            'property_name' => $request->property_name,
            'location' => $request->location,
            'google_map_url' => $request->google_map_url,
            'price' => $request->price,
            'no_units' => $request->no_units,
            'description' => $request->description,
            'payment_plan' => $request->payment_plan,
            'property_type' => $request->property_type,
            'unit_area' => $request->unit_area,
            'total_area' => $request->total_area,
            'publised' => 1
        ]);

        $notification = Notification::create([
            'user_id' => $user_id,
            'title' => 'Listing Published',
            'body' => 'You just published a listing with listing code : '. $listing_code
        ]);

        $admin_notification = Notification::create([
            'user_id' => 1,
            'title' => 'New Listing Added',
            'body' => $user_data->name.' just published a listing'
        ]);

        Session::forget('listing_code');


        return back()->with('listing_msg', 'Listing Created Successfully');
    }

    public function update_listing(Request $request)
    {

        $listing = Listing::find($request->id)->update($request->all());

        return $listing;
    }

    public function user_listings(Request $request)
    {

        $user_listings = Listing::find($request->user_id)->get();

        return $user_listings;
    }

    public function listings(Request $request)
    {

        $listings = Listing::latest()
        ->where('published', 1)
        ->get();

        return $listings;
    }

    public function listing_data(Request $request)
    {

        $listing_data = Listing::find($request->id)->first();


        return $listing_data;
    }

    public function active_listings()
    {

        $active_listings = Listing::latest()
        ->where('published', 1)
        ->where('approved', 1)
        ->where('reserved', 0)
        ->get();


        return $active_listings;
    }

    public function published_listings()
    {

        $published_listings = Listing::latest()
        ->where('published', 1)
        ->get();


        return $published_listings;
    }

    public function reserved_listings()
    {

        $reserved_listings = Listing::latest()
        ->where('reserved', 1)
        ->get();


        return $reserved_listings;
    }

    public function approved_listings()
    {

        $approved_listings = Listing::latest()
        ->where('approved', 1)
        ->get();

        return $approved_listings;
    }


}
