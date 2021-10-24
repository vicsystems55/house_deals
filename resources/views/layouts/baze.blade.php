<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>House Dealer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="House Deals" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="{{config('app.url')}}assets/libs/chartist/chartist.min.css" rel="stylesheet">

        <link href="{{config('app.url')}}assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" /> 
 
        <link href="{{config('app.url')}}assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{config('app.url')}}assets/css/bootstrap.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        <link href="{{config('app.url')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        <link href="{{config('app.url')}}assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" />

        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="app">
            <div id="layout-wrapper">

                @include('inc.top_bar')
    
                <!-- ========== Left Sidebar Start ========== -->
    
                @if(Auth::user()->role == 'admin')
    
                    @include('inc.sidebar.admin')
    
                @elseif(Auth::user()->role == 'buyer')
    
                    @include('inc.sidebar.buyer')
    
                @elseif(Auth::user()->role == 'partner')
    
                    @include('inc.sidebar.partner')
    
                @endif
                
                <!-- Left Sidebar End -->
    
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
    
                   @yield('content')
                    <!-- End Page-content -->
    
    
                    
                  @include('inc.footer')
    
                </div>
                <!-- end main content-->
    
            </div>
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        {{-- <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/grNDB" class="btn btn-primary btn-block mt-3" target="_blank"><i class="mdi mdi-cart mr-1"></i> Purchase Now</a>

                </div>

            </div> <!-- end slimscroll-menu-->
        </div> --}}
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        {{-- <div class="rightbar-overlay"></div> --}}

        <script src="{{asset('js/app.js')}}"></script>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 


        <!-- JAVASCRIPT -->
        <script src="{{config('app.url')}}assets/libs/jquery/jquery.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/simplebar/simplebar.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/node-waves/waves.min.js"></script>

        <!-- Peity chart-->
        <script src="{{config('app.url')}}assets/libs/peity/jquery.peity.min.js"></script>

        <!-- Plugin Js-->
        <script src="{{config('app.url')}}assets/libs/chartist/chartist.min.js"></script>
        <script src="{{config('app.url')}}assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <script src="{{config('app.url')}}assets/js/pages/dashboard.init.js"></script>

        <script src="{{config('app.url')}}assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Tour init js-->
        <script src="{{config('app.url')}}assets/js/pages/lightbox.init.js"></script>
        <!-- Sweet Alerts js -->
        <script src="{{config('app.url')}}assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="{{config('app.url')}}assets/js/pages/sweet-alerts.init.js"></script>



        <script src="{{config('app.url')}}assets/js/app.js"></script>



    </body>

</html>