<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        

        return $this->hasMany('App\Listing', 'listing_id', 'id');
    }
}
