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
                    <a href="{{route('partner.listings')}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span class="badge badge-pill badge-primary float-right">0</span>
                        <span>Listings</span>
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