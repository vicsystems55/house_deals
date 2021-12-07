<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //

    protected $guarded = [];

    public function listings()
    {
        

        return $this->belongsTo('App\Listing', 'listing_id', 'id');
    }

    public function users()
    {
        

        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
