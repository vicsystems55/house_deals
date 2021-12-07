<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //

    protected $guarded = [];

    public function images()
    {
            
        return $this->hasMany('App\ListingImage', 'listing_id', 'id');

    }

    public function reservations()
    {
            
        return $this->hasMany('App\Reservation', 'listing_id', 'id');

    }
}
