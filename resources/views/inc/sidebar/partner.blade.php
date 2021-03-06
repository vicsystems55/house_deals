<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="mt-5"></div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Main</li> --}}
              

                <li>
                    <a href="{{route('partner.home')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

       


                <li>
                    <a href="{{route('partner.profile')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
            
                        <span>Profile</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Listings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('partner.create_listing')}}">Create Listing</a></li>
                        <li><a href="{{route('partner.listings')}}">All Listings</a></li>
                        <li><a href="{{route('partner.active_listings')}}">Active Listings</a></li>
                        <li><a href="{{route('partner.pending_listings')}}">Pending Listings</a></li>
                        <li><a href="{{route('partner.disapproved_listings')}}">Disapproved Listings</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Reservations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('partner.reservations')}}">All Reservations</a></li>

                        <li><a href="{{route('partner.active_reservations')}}">Active Reservations</a></li>

                        <li><a href="{{route('partner.resolved_reservations')}}">Resolved Reservations</a></li>

                        <li><a href="{{route('partner.expired_reservations')}}">Expired Reservations</a></li>
                  
                    </ul>
                </li>

                <li>
                    <a href="{{route('partner.reviews')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right"></span>
                        <span>Reviews</span>
                    </a>
                </li>

            

                <li>
                    <a href="{{route('partner.subscriptions')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right"></span>
                        <span>Subscription</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('partner.notifications')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">0</span>
                        <span>Notifications</span>
                    </a>
                </li>

             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>