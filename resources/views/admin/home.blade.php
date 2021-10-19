@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">



        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Hi, {{Auth::user()->name}}</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">You have elevated priviledges</li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Members</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                           
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Listings</h5>
                            <h4 class="font-weight-medium font-size-24">0 <i
                                    class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                            
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/03.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                            <h4 class="font-weight-medium font-size-24">NGN 0.00</h4>
                           
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                            </div>

                            <p class="text-white-50 mb-0 mt-1">Details</p>
                        </div>
                    </div>
                </div>
            </div>
       
        </div>
        <!-- end row -->

        <div class="row d-none">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Monthly Earning</h4>
                        <div class="row">
                            <div class="col-lg-7">
                                <div>
                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">This month</p>
                                            <h3>$34,252</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut"
                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                data-width="72" data-height="72">4/5</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-center">
                                            <p class="text-muted mb-4">Last month</p>
                                            <h3>$36,253</h3>
                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                will be occidental.</p>
                                            <span class="peity-donut"
                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                data-width="72" data-height="72">3/5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end card -->
            </div>

            
        </div>
        <!-- end row -->

        <div class="row">
            
            <div class="col-xl-6">
                <div  class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Activity</h4>
                        <ol class="activity-feed">

                            @forelse ($notifications->take(3) as $notification)

                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <span class="date">{{$notification->created_at->format('M, d')}}</span>
                                    <span class="activity-text">{{$notification->body}}</span>
                                </div>
                            </li>
                                
                            @empty

                            <li class="feed-item">
                                <div class="feed-item-list">
                                    
                                    <span class="activity-text">No messages yet...</span>
                                </div>
                            </li>
                                
                            @endforelse
                            
                            
                           
                        </ol>
                        <div class="text-center">
                            <a href="{{route('partner.notifications')}}" class="btn btn-primary">Load More</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                
                <div class="row">
                    <div class="col-md-12">
                        <div style="min-height: 200px;" class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Client Reviews</h4>

                                @forelse ($reviews->take(1) as $review)
                                    <div class="">
                                        <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                            language would be desirable one could refuse to pay expensive
                                            translators it would be necessary. "</p>
                                            
                                        <div class="float-right mt-2">
                                            <a href="#" class="text-primary">
                                                <i class="mdi mdi-arrow-right h5"></i>
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <img src="assets/images/users/user-3.jpg" alt="" class="avatar-sm rounded-circle mr-2"> 
                                            James Athey
                                        </h6>
                                    </div>
                                @empty

                                <div class="">
                                    <p class="text-muted mb-3 pb-4">
                                        No reviews yet...
                                    </p>
                                        
                                   
                                    
                                </div>
                                    
                                @endforelse
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class=" row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Reservations</h4>
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