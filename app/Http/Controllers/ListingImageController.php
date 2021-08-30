<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Listing;

use App\ListingImage;

use Auth;

use Image;

use Session;

class ListingImageController extends Controller
{
    //

    
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
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
    
        public function get_images()
        {
            //
    
            $user_id = Auth::user()->id;

            $listing_code = Session::get('listing_code');

        

            try {
                
                $listing_code = Session::get('listing_code');
    
                $listing = Listing::where('listing_code', $listing_code)->where('user_id', $user_id )->first();
    
                $images = ListingImage::where('listing_id', $listing->id)->get();
        
        
                return $images; 
    
            } catch (\Throwable $th) {
                //throw $th;
    
                return $images;
            }
        }
    
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $listing_code = Session::get('listing_code');
    
            $user_id = Auth::user()->id;
    
            $listing = Listing::where('listing_code', $listing_code)->where('user_id', $user_id )->first();
    
            $image = $request->file('file');
    
            $new_name = rand().".".$image->getClientOriginalExtension();
    
            $file = $image->move(public_path('property_images'), $new_name);
    
                // try {
                //     //code...
                    
                //     $img = Image::make(public_path('property_images/'.$new_name));
    
                //     $overlay = Image::make('property_images/overlay.png')->resize(650, 300);
            
                //     /* insert watermark at bottom-right corner with 10px offset */
                //     $img->insert($overlay, 'center', 10, 10);
    
                //     $img->save(public_path('property_images/'.$new_name));
    
                // } catch (\Throwable $th) {
                //     //throw $th;
    
                //     return $th;
                // }
    
    
            // $file = $image->move(public_path('vehicle_images'), $new_name);
    
    
    
    
            try {
                //code...
    
                $image = ListingImage::create([
                    'img_path' => $new_name,
                    'listing_id' => $listing->id,
             
                ]);
    
                return $image;
    
            } catch (\Throwable $th) {
                //throw $th;
    
                return $th;
            }
    
            
    
    
            // return $new_name;
    
    
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\Image  $image
         * @return \Illuminate\Http\Response
         */
        public function show(Image $image)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\Image  $image
         * @return \Illuminate\Http\Response
         */
        public function edit(Image $image)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\Image  $image
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Image $image)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\Image  $image
         * @return \Illuminate\Http\Response
         */
        public function destroy(Image $image)
        {
            //
        }
    
    
}
