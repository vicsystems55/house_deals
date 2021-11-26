@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Reservations</h4>
                    <ol class="breadcrumb mb-0">
                        {{-- <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li> --}}
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

        <div class=" row">
          <div class="col-xl-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title mb-4">Latest Reservations</h4>
                      <div class="table-responsive">
                          <table class=" table table-hover table-centered table-nowrap mb-0">
                              <thead>
                                  <tr>
                                      <th scope="col">(#) Id</th>
                                      <th scope="col">Buyer Name</th>
                                      <th scope="col">Reservation Code</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Expiry Date</th>
                                      <th scope="col" colspan="2">Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                                 
                                      @forelse ($reservations as $reservation)

                                      <tr>
                                          <td>
                                              {{$loop->iteration}}
                                          </td>
                                          <td>
                                            {{$reservation->reserver_name}}
                                          </td>
                                          <td>
                                            {{$reservation->reservation_code}}
                                          </td>
                                          <td>
                                            {{$reservation->created_at->diffForHumans()}}
                                          </td>
                                          <td>
                                            {{\Carbon\Carbon::parse($reservation->expiry_date)->diffForHumans()}}
                                          </td>
                                      </tr>
                                      @empty


                                      @endforelse
                                 
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