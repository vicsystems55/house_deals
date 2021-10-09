@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Expired Reservations</h4>
                    <ol class="breadcrumb mb-0">
                 
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

 
        <!-- end row -->

        <div class=" row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Expired Reservations</h4>
                        <div class="table-responsive">
                            <table class=" {{$listings->count() < 1?'d-none':''}} table table-hover table-centered table-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">(#) Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col" colspan="2">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        @foreach ($listings as $listing)

                                        <tr>
                                            <th scope="row">#{{$listing->listing_code}}</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt=""
                                                        class="avatar-xs rounded-circle mr-2"> {{$listing->property_name}}
                                                </div>
                                            </td>
                                            <td>{{$listing->created_at->diffForHumans()}}</td>
                                            <td>N {{number_format($listing->worth, 2)}}</td>
                                            <td><span class="badge badge-success">{{$listing->status}}</span></td>
                                            <td>
                                                <div>
                                                    <a href="{{route('partner.listing', $listing->listing_code)}}" class="btn btn-primary btn-sm">View</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

     
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection