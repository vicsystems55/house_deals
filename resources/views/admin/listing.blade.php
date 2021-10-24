@extends('layouts.baze')

@section('content')

<div class="page-content">
 
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">{{$listing_data->property_name}}</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li> --}}
                    </ol>
                </div>
            </div>
           
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td>Property Name:</td>
                        <th>{{$listing_data->property_name}}</th>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <th>{{$listing_data->location}}</th>
                    </tr>
                    <tr>
                        <td>Google Map Url:</td>
                        <th>{{$listing_data->google_map_url}}</th>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <th>{{$listing_data->price}}</th>
                    </tr>
                    <tr>
                        <td>Number of units:</td>
                        <th>{{$listing_data->no_units}}</th>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <th>{{$listing_data->description}}</th>
                    </tr>
                    <tr>
                        <td>Payment Plan:</td>
                        <th>{{$listing_data->payment_plan}}</th>
                    </tr>
                    <tr>
                        <td>Property Type:</td>
                        <th>{{$listing_data->property_type}}</th>
                    </tr>
                    <tr>
                        <td>Unit Area:</td>
                        <th>{{$listing_data->unit_area}}</th>
                    </tr>
                    <tr>
                        <td>Total Area:</td>
                        <th>{{$listing_data->total_area}}</th>
                    </tr>
                </table>
            </div>

            <div class="col-md-12">

                <h4>Images</h4>

                <div class="popup-gallery">


                    @foreach ($listing_data->images as $image)

                        <a class="float-left p-1 shadow" href="{{config('app.url')}}property_images/{{$image->img_path}}" title="Project 1">
                            <div class="img-responsive">
                                <img style="width: 120px; height: 120px; object-fit: cover;" src="{{config('app.url')}}property_images/{{$image->img_path}}" >
                            </div>
                        </a>
                    @endforeach



                    
                </div>
                
              
            </div>

                <div class="py-5">
                    
                    <div class="row">
                        <div class="col-md-6 mx-auto text-center {{$listing_data->approved == 1?'d-none':''}}">
                            <form action="{{route('approval')}}" method="post">
                                @csrf
                                <input type="hidden" name="listing_code" value="{{$listing_data->listing_code}}">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg " >APPROVE</button>
                                </div>
                            </form>
                        </div>
            
                        <div class="col-md-6 mx-auto text-center {{$listing_data->approved == 0?'d-none':''}}">
                            <form action="{{route('disapproval')}}" method="post">
                                @csrf
                                <input type="hidden" name="listing_code" value="{{$listing_data->listing_code}}">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-danger btn-lg ">DISAPPROVE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


  


        </div>
        <!-- end page title -->

        
        <!-- end row -->



    </div> <!-- container-fluid -->


</div>


@endsection