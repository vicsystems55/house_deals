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
}
