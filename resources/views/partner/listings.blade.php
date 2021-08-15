@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Dashboard</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

 
        <!-- end row -->

        <div class="d-none row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Latest Trasaction</h4>
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
                                    <tr>
                                        <th scope="row">#14256</th>
                                        <td>
                                            <div>
                                                <img src="assets/images/users/user-2.jpg" alt=""
                                                    class="avatar-xs rounded-circle mr-2"> Philip Smead
                                            </div>
                                        </td>
                                        <td>15/1/2018</td>
                                        <td>$94</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div style="min-height: 330px;" class="r  pt-2">
            <div class="p-5"></div>
            <div style="min-height: 130px;" class="card col-md-3 mx-auto  shadow mt-3">
                <div class="card-body text-center ">
                    <h6>No Listings Yet</h6>
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                    <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_alyseq4q.json"  background="transparent"  speed="1"  style="width: 150px; height: 150px;"  loop  autoplay></lottie-player>
                <a href="" class="btn btn-primary btn-block mt-3 shadow">Get Started</a>

                </div>
            </div>
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection