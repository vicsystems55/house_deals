@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <form action="{{route('become_buyer')}}" method="post" class="text-center mt-3">
            @csrf
            <div class="form-group">
                <button class="btn btn-info">Switch to Buyer</button>
            </div>
        </form>

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-12">
                <div class="page-title-box text-center">
                    <h3 class="">Hello, {{Auth::user()->name}}</h3>
                    <h6 class="text-center">Welcome to House Deals Dashboard</h6>
                
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="d-none row">
            
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
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Reservations</h5>
                            <h4 class="font-weight-medium font-size-24">0<i
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
                                <img src="assets/images/services-icon/04.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Contracts</h5>
                            <h4 class="font-weight-medium font-size-24">0<i
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
        </div>
        <!-- end row -->

        
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Company Listings</h5>
                            <h4 class="font-weight-medium font-size-24">{{$listings->count()}} <i
                                    class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                           
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="{{route('partner.listings')}}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
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
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Reservations</h5>
                            <h4 class="font-weight-medium font-size-24">{{$reservations->count()}} <i
                                    class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                            
                        </div>
                        <div class="pt-2">
                            <div class="float-right">
                                <a href="{{route('partner.reservations')}}" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
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
                            <?php
                                $credit = $transactions->where('credit', 1)->sum('amount');

                                $debit = $transactions->where('debit', 1)->sum('amount');

                                $balance = $credit??'0' - $debit??'0';
                            ?>
                            <h4 class="font-weight-medium font-size-24">N {{number_format($balance, 2)}}</h4>
                           
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
                                    <span class="date">{{$notification->created_at}}</span>
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

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Reservations</h4>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered table-nowrap mb-0">
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
                                    @foreach ($reservations->take(5) as $reservation)
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/user-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle mr-2"> 
                                            </div>
                                        </td>
                                        <td>{{$reservation->created_at}}</td>
                                        <td>{{number_format($reservation->listings->worth, 2)}}</td>
                                        <td><span class="badge badge-success">{{$reservation->status}}</span></td>
                                        <td>
                                            <div>
                                                <a href="" class="btn btn-primary btn-sm">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                  
                                   
                                </tbody>
                            </table>

                            <div class="text-center py-5">
                                <h4 class="text-center">No reservations yet...</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div style="min-height: 330px;" class="r d-none  pt-2">
            <div class="p-3"></div>
            <div style="min-height: 130px;" class="card col-md-3 mx-auto  shadow mt-3">
                <div class="card-body text-center ">
                    <h6>Company profile not verified</h6>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_alyseq4q.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
                <a href="{{route('partner.profile')}}" class="btn btn-primary btn-block mt-3 shadow">Update Profile</a>

                </div>
            </div>
        </div>

       
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection