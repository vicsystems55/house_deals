@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
    
        <!-- end page title -->
        <style>
                .labl {
                    display : block;
                    width: 400px;
                }
                .labl > input{ /* HIDE RADIO */
                    visibility: hidden; /* Makes input not-clickable */
                    position: absolute; /* Remove input from document flow */
                }
                .labl > input + div{ /* DIV STYLES */
                    cursor:pointer;
                    border:2px solid transparent;
                }
                .labl > input:checked + div{ /* (RADIO CHECKED) DIV STYLES */
                    background-color: #ffd6bb;
                    border: 1px solid #ff6600;
                }

        </style>

        <div class="container-fluid pt-3">
            <div class="card border border-success bg-success text-white">
                <div class="card-body shadow">
                    <h4>My Subscription Plan</h4>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis voluptas adipisci, in nisi harum fugit placeat? Eaque, natus vero corporis molestias facilis sed doloribus! Alias fugiat rerum ducimus tempore soluta?
                    </p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="container-fluid">

                <h4 class="text-center pb-3">Subscription Plans</h4>
            <div class="row">

                <div class="col-md-6">
                    <div style="height: 350px; width: 270px;" class="card shadow mx-auto">
                        <div class="card-body">

                            <h4>Silver</h4>

                            <div style="height:70px;" class="b mt-2">
                                <p class="font-weight-bold">
                                   Silver: <br>  N 20,000 for 7Days
                                </p>
                                <p class="font-weight-bold">
                                    Silver +: <br>  N 20,000 for 7Days + recurring
                                 </p>

                            </div>

                            <div class="pt-5">

                                    
                         
                            <paystack-button
                            listingid=""
                            userid="" 
                            callback="{{config('app.url')}}reservation_callback" 
                            email="{{Auth::user()->email}}" 
                            amount="20000" 
                            ></paystack-button>

                            </div>


                           

                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div style="height: 350px; width: 270px;" class="card shadow mx-auto">
                        <div class="card-body">

                            <h4>Gold</h4>

                            <div style="height:70px;" class="b mt-2">
                                <p class="font-weight-bold">
                                   Gold: <br>  N 100,000 for a month
                                </p>
                                <p class="font-weight-bold">
                                    Gold +: <br>  N 100,000 for a month + recurring
                                 </p>

                            </div>

                            <div class="pt-5">

                                    
                         
                            <paystack-button
                            listingid=""
                            userid="" 
                            callback="{{config('app.url')}}reservation_callback" 
                            email="{{Auth::user()->email}}" 
                            amount="100000" 
                            ></paystack-button>

                            </div>


                           

                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>

     
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection