<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>House Deals</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">

    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <!-- Css-->
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/jarallax.css">

    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/vegas.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/nouislider.min.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/nouislider.pips.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/tolips.css">
    <!-- Template styles -->
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/style.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/responsive.css">

</head>

<body>

    <div class="preloader">
        <img src="{{config('app.url')}}tolips/assets/images/logo.png" class="preloader__image" alt="">
    </div>
    

        @yield('content')
    
    

    {{-- <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a> --}}




    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img style="width: 200px;" src="assets/images/logo_trans.png" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container clearfix"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-message"></i>
                    <a href="mailto:needhelp@polimark.com">support@housedeals.com</a>
                </li>
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="tel:666-888-0000">+234 809 000 1000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->
        </div>
    </div>



    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>



    <script src="{{config('app.url')}}tolips/assets/js/jquery.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/owl.carousel.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/waypoints.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.counterup.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/TweenMax.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/wow.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/swiper.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/typed-2.0.11.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/vegas.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.validate.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/bootstrap-select.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/countdown.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/nouislider.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/isotope.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/appear.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jarallax.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/jquery.bootstrap-touchspin.js"></script>
    {{-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script> --}}


    <!-- template scripts -->
    <script src="{{config('app.url')}}tolips/assets/js/theme.js"></script>


</body>

</html>