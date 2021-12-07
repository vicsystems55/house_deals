<?php

namespace App\Http\Controllers;

use App\Reservation;

use App\User;

use Carbon\Carbon;

use Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use Session;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_reservation(Request $request)
    {
        //

        $reservation_code = 'HD-'.rand(101, 9999).'-RESERVE';

        $regCode = "HD" .rand(11000,99999);

        $new_user = User::create([
  
            'email' => $request->email,
            'name' => $request->name,
            'role' => 'buyer',
            'user_code' => $regCode,
            'password' => Hash::make($request->phone),
            
            
        ]);



        $reservation = Reservation::create([
            
            'listing_id' => $request->listing_id,
            'user_id' => $new_user->id??Auth::user()->id,
            'reservation_code' => $reservation_code,
            'reserver_email' => $request->email,
            'reserver_name' => $request->name,
            'reserver_phone' => $request->phone,
            'expiry_date' => \Carbon\Carbon::now()->addDays(7)
        ]);

        // dd($reservation);





        // return $reservation;

        return back()->with('reserve_msg', 'Property Reserved');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
