@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Reviews</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li> --}}
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class="p-3"></div>

        <div class="row">
            <div class="container-fluid">
                <div class="list-group">

                  @forelse ($reviews as $review)

                  <a href="#" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">{{$review->title}}</h5>
                      <small class="text-muted"></small>
                    </div>
                    <p class="mb-1">{{$review->body}}</p>
                    <small class="text-muted">{{$review->created_at->diffForHuman()}}</small>
                  </a>

                  @empty 

                  <div class="p-5"></div>
                  <a href="#" class="list-group-item list-group-item-action mt-5 text-center">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1"></h5>
                      <small class="text-muted"></small>
                    </div>
                    <p class="mb-1 text-center"><h4>No reviews yet..</h4></p>
                    <small class="text-muted"></small>
                  </a>


                      
                  @endforelse

                  
                   
                    
                  </div>
            </div>
        </div>

        
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>


@endsection