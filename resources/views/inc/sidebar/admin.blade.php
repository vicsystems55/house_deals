<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <div class="mt-5"></div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                {{-- <li class="menu-title">Main</li> --}}


                <li>
                    <a href="{{route('admin.home')}}" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.members')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Members</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Listings</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('admin.listings')}}">All Listings</a></li>
                        <li><a href="">Published</a></li>
                        <li><a href="">Submitted</a></li>
                        <li><a href="">Disapproved</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Reservations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('admin.reservations')}}">All Reservations</a></li>

                        <li><a href="{{route('admin.resolved_reservations')}}">Resolved Reservations</a></li>

                        <li><a href="{{route('admin.expired_reservations')}}">Expired Reservations</a></li>
                  
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Subscriptions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{route('admin.active_subscriptions')}}">Active Subscriptions</a></li>

                        <li><a href="{{route('admin.expired_subscriptions')}}">Expired Subscriptions</a></li>

                        <li><a href="{{route('admin.subscription_settings')}}">Settings</a></li>
                  
                    </ul>
                </li>

                <li>
                    <a href="{{route('admin.reviews')}}" class=" waves-effect">
                        <i class="ti-message"></i>
                        <span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.wallet')}}" class=" waves-effect">
                        <i class="ti-wallet"></i>
                        
                        <span>Wallet</span>
                    </a>
                </li>

                
                    <?php

                        $notifications = \App\Notification::where('user_id', Auth::user()->id)->latest()->get();

                    ?>

                <li>
                    <a href="{{route('admin.notifications')}}" class=" waves-effect">
                        <i class="ti-bell"></i>
                        <span class=" {{$notifications->count()==0 ?'d-none':''}}  badge badge-pill badge-primary float-right">{{$notifications->count()}}</span>
                        <span>Notifications</span>
                    </a>
                </li>

             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>