<div class="site-header__header-one-wrap clearfix">

    {{-- <div class="header_top_one">
        <div class="container">
            <div class="header_top_one_inner clearfix">
                <div class="header_top_one_logo_box float-left">
                    <div class="header_top_one_logo">
                        <a href="index.html"><img src="{{config('app.url')}}tolips/assets/images/resources/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="header_top_one_content_box float-right">
                   
                    <div class="header_top_one_content_box_bottom">
                        <div class="header_top_one_content_box_bottom_inner clearfix">
                            <div class="header_top_one_content_box_bottom__social_box">
                                <div class="header_top_one_content_box_bottom__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="header_top_one_content_box_bottom_contact_info">
                                <ul class="header_top_one_content_box_bottom_contact_info_list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="text">
                                            <p>Call Agent</p>
                                            <a href="tel:92-888-000-2222">92 888 000 2222</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <p>Send Email</p>
                                            <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <header class="main-nav__header-one">
        <div class="container">
            <nav class="header-navigation one stricky">
                <div class="container-box clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="main-nav__left main-nav__left_one float-left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="main-nav__main-navigation one clearfix">
                            <ul class=" main-nav__navigation-box float-right">
                                <li class="dropdown ">
                                    <a href="{{route('home')}}">Buy</a>
                                 <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="{{route('shop')}}">Recommended Properties</a>
                                   <!-- /.sub-menu -->
                                </li>
                                <li class="dropdown">
                                    <a href="{{route('shop')}}">Sold</a>
                                   <!-- /.sub-menu -->
                                </li>
                                {{-- <li class="dropdown">
                                    <a href="{{route('contact')}}">Blogs</a>
                                   <!-- /.sub-menu -->
                                </li> --}}

                                <li class="dropdown">
                                    <a href="{{route('contact')}}">Contact</a>
                                   <!-- /.sub-menu -->
                                </li>
                                
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                    <div class="main-nav__right main-nav__right_one float-right">
                        <div class="header_btn_1">
                            <a href="{{route('login')}}" class="thm-btn">Dealer</a>
                        </div>
                       
                        <div class="icon_search_box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>