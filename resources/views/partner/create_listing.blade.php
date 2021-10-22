@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Create Listing</h4>
                    
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

 
        <!-- end row -->

        <div class="card col-md-12 mx-auto">
            <div class="card-body">

                @if(Session::has('listing_msg'))
                 <p class="alert alert-info">{{ Session::get('listing_msg') }}</p>
                @endif




                <form action="{{route('create_listing')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="property_name" class="form-control" placeholder="Property Name">
                            </div>


                            <div class="form-group">
                                <label for="">Description:</label>
                             <textarea name="description" class="form-control" placeholder="Describe the property" id="" cols="30" rows="5"></textarea>
                            </div>



                            <div class="form-group">
                                <label for="">Location:</label>
                                <input type="text" class="form-control" placeholder="Property location / address">
                            </div>

                            
                            <div class="form-group">
                                <label for="">Google map url:</label>
                                <input type="text" name="google_map_url" class="form-control" placeholder="Google map url">
                            </div>

                            <div class="form-group">
                                <label for="">Worth:</label>
                                <input type="text" name="price" class="form-control" placeholder="What is the value of this property?">
                            </div>

                            
                            <div class="form-group">
                                <label for="">Number of units:</label>
                                <input type="number" name="no_units" class="form-control" >
                            </div>

                            
                            <div class="form-group">
                                <label for="">Unit Sq:</label>
                                <input type="number" name="unit_area" class="form-control" placeholder="What is the value of this property?">
                            </div>

                            <div class="form-group">
                                <label for="">Total Area:</label>
                                <input type="number" name="total_area" class="form-control" placeholder="What is the value of this property?">
                            </div>

                            <div class="form-group">
                                <label for="floorplan">Floor Plan:</label>
                                <input type="file" name="worth" id="floorplan" class="form-control-file" >
                            </div>



                            <div class="form-group">
                                <label for="">Payment Plan:</label>
                                    <select name="payment_plan" id="" class="form-control">
                                        <option value="Plan A">Plan A</option>
                                        <option value="Plan B">Plan B</option>
                                        <option value="Plan C">Plan C</option>
                                    </select>
                            </div>

                            
                            <div class="form-group">
                                <label for="">Property Type:</label>
                                    <select name="property_type" id="" class="form-control">
                                        <option value="Terrace">Terrace</option>
                                        <option value="Semi Detached">Semi Detached</option>
                                        <option value="Full Duplex">Full Duplex</option>
                                    </select>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="">Select Features</label>
                                </div>

                                @foreach ($features as $feature)

                                <div class="col-md-6 mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="{{$feature->id}}" name="features[]" value="{{$feature->id}}">
                                        <label class="custom-control-label" for="{{$feature->id}}">{{$feature->name}}</label>
                                      </div>
                                </div>
                                    
                                @endforeach

                             
                               

                               

                               
                            </div>

                            

    


                        </div>
                        <div class="col-md-12">

                            <h6>Upload Pix</h6>

                            <uploader-component listingcode="{{Session::get('listing_code')}}" appurl="{{config('app.url')}}"></uploader-component>




                        </div>


                        <div class="col-md-6 mx-auto py-3">
                            <button type="submit" class="btn btn-primary btn-lg btn-block ">Submit</button>
                        </div>
                    </div>
                   

                </form>

            </div>
        </div>

    
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection