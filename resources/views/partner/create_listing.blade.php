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
                                <label for="">Worth:</label>
                                <input type="text" name="worth" class="form-control" placeholder="What is the value of this property?">
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="">Select Features</label>
                                </div>

                                @foreach ($features as $feature)

                                <div class="col-md-6 mb-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" name="features" value="{{$feature->name}}">
                                        <label class="custom-control-label" for="customCheck1">{{$feature->name}}</label>
                                      </div>
                                </div>
                                    
                                @endforeach

                             
                               

                               

                               
                            </div>

                            

    


                        </div>
                        <div class="col-md-12">

                            <h6>Upload Pix</h6>

                            <uploader-component listingcode="{{Session::get('listing_code')}}" appurl="{{config('app.url')}}"></uploader-component>




                        </div>


                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </div>
                   

                </form>

            </div>
        </div>

    
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection