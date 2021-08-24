@extends('layouts.tolips')

@section('content')

<div class="page-wrapper">

   @include('front_page.inc.header')

    <!-- Banner Section One Start -->
    <section class="banner-one">
        <div class="banner-bg-slide"
            data-options='{ "delay": 5000, "slides": [ { "src": "{{config('app.url')}}tolips/assets/images/main-slider/slider-1-1.jpg" }, { "src": "{{config('app.url')}}tolips/assets/images/main-slider/slider-1-2.jpg" } ], "transition": "fade", "timer": false, "align": "top", "animation": [ "kenburnsUp", "kenburnsDown", "kenburnsLeft", "kenburnsRight" ] }'>
        </div><!-- /.banner-bg-slide -->
        <div class="container">
            <div class="content-box">
                <div class="top-title">
                    <h2>Find Your Future <br> Dream Home</h2>
                </div>

                <div class="product-tab-box tabs-box">
                    <ul class="tab-btns tab-buttons clearfix list-unstyled">
                        <li data-tab="#desc" class="tab-btn active-btn"><span>Buy</span></li>
                        <li data-tab="#addi__info" class="tab-btn"><span>Sale</span></li>
                        <li data-tab="#review" class="tab-btn"><span>Rent</span></li>
                    </ul>
                    <div class="tabs-content">
                        <div class="tab active-tab" id="desc">
                            <form class="banner_one_search_form" action="/listing-1.html">
                                <div class="banner_one_search_form_input_box">
                                    <input type="text" placeholder="Search for city, property, agent and more...">
                                    <button type="submit" class="thm-btn banner_one_search_btn">Search
                                        Property</button>
                                    <div class="banner_one_search_icon">
                                        <a href="#"><span class="icon-magnifying-glass"></span></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab" id="addi__info">
                            <form class="banner_one_search_form" action="/listing-1.html">
                                <div class="banner_one_search_form_input_box">
                                    <input type="text" placeholder="Search for city, property, agent and more...">
                                    <button type="submit" class="thm-btn banner_one_search_btn">Search
                                        Property</button>
                                    <div class="banner_one_search_icon">
                                        <a href="#"><span class="icon-magnifying-glass"></span></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab" id="review">
                            <form class="banner_one_search_form" action="/listing-1.html">
                                <div class="banner_one_search_form_input_box">
                                    <input type="text" placeholder="Search for city, property, agent and more...">
                                    <button type="submit" class="thm-btn banner_one_search_btn">Search
                                        Property</button>
                                    <div class="banner_one_search_icon">
                                        <a href="#"><span class="icon-magnifying-glass"></span></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="banner_one_bottom_icon_text">
                    <div class="banner_one_bottom_icon">
                        <span class="icon-building"></span>
                    </div>
                    <div class="banner_one_bottom_text">
                        <p>Smart Real Estate Services All our the World</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section One End -->

    <!--Explore One Start-->
    <section class="explore_one">
        <div class="container">
            <div class="block-title text-left">
                <h4>Find Your Properties</h4>
                <h2>Explore the Cities</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="explore_one_inner_content">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                "el": "#testimonials-one-pagination",
                "type": "bullets",
                "clickable": true
            },
            "navigation": {
                "nextEl": ".explore_one_prev",
                "prevEl": ".explore_one_next",
                "clickable": true
            },
            "breakpoints": {
                "0": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "425": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "575": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "767": {
                    "spaceBetween": 30,
                    "slidesPerView": 1
                },
                "991": {
                    "spaceBetween": 20,
                    "slidesPerView": 3
                },
                "1289": {
                    "spaceBetween": 30,
                    "slidesPerView": 4
                },
                "1440": {
                    "spaceBetween": 30,
                    "slidesPerView": 5
                }
            }}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-1.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">London / England</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-2.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Paris / France</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-3.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">New York / USA</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-4.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Rome / Turkey</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-5.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Dubai / Dubai</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-1.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">London / England</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-2.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Paris / France</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-3.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">New York / USA</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-4.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Rome / Turkey</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="explore_one_single">
                                        <div class="explore_one_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/explore_one_img-5.jpg" alt="">
                                            <div class="explore_one_text">
                                                <p><a href="listing-1.html">Dubai / Dubai</a></p>
                                            </div>
                                            <div class="explore_one_btn">
                                                <a href="#">2 Properties</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="explore_one_nav">
                            <div class="explore_one_next"><span class="icon-right-arrow"></span></div>
                            <div class="explore_one_prev"><span class="icon-right-arrow"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Explore One End-->

    <!--Why Choose One Start-->
    <section class="why_choose_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{config('app.url')}}tolips/assets/images/backgrounds/why_choose_one_bg.jpg)">
        <div class="container">
            <div class="why_choose_one_title">
                <h2>Why Choose Us</h2>
            </div>
            <div class="why_choose_one_shape_one"
                style="background-image: url({{config('app.url')}}tolips/assets/images/shapes/why_choose_one_shape_1.png)"></div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!--Why Choose One Single-->
                    <div class="why_choose_one_single wow fadeInUp">
                        <div class="why_choose_one_icon">
                            <span class="icon-town"></span>
                        </div>
                        <h3>Find Your <br> Dream Home</h3>
                        <p>There many variation of <br> pasages of lorem sum<br> available.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!--Why Choose One Single-->
                    <div class="why_choose_one_single wow fadeInUp" data-wow-delay="100ms">
                        <div class="why_choose_one_icon">
                            <span class="icon-agent"></span>
                        </div>
                        <h3>Experienced <br> Agents</h3>
                        <p>There many variation of <br> pasages of lorem sum<br> available.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!--Why Choose One Single-->
                    <div class="why_choose_one_single wow fadeInUp" data-wow-delay="200ms">
                        <div class="why_choose_one_icon">
                            <span class="icon-{{config('app.url')}}tolips/assets"></span>
                        </div>
                        <h3>Buy or Rent <br> Homes</h3>
                        <p>There many variation of <br> pasages of lorem sum<br> available.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <!--Why Choose One Single-->
                    <div class="why_choose_one_single wow fadeInUp" data-wow-delay="300ms">
                        <div class="why_choose_one_icon">
                            <span class="icon-rent"></span>
                        </div>
                        <h3>List Your <br> Own Property</h3>
                        <p>There many variation of <br> pasages of lorem sum<br> available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose One End-->

    <!--Latest Properties Start-->
    <section class="latest_properties">
        <div class="container">
            <div class="block-title text-center">
                <h4>Browse Hot Offers</h4>
                <h2>Latest Properties</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="thm-swiper__slider swiper-container thm-swiper__slider-pause-hover"
                        data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "pagination": {
                            "el": "#latest_properties_pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "navigation": {
                            "nextEl": ".latest_properties_next",
                            "prevEl": ".latest_properties_prev",
                            "clickable": true
                        },
                        "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "425": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 1
                            },
                            "767": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "991": {
                                "spaceBetween": 20,
                                "slidesPerView": 2
                            },
                            "1289": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "1440": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            }
                        }}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="latest_properties_single">
                                    <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_1.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest_properties_content">
                                        <div class="latest_properties_top_content">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="latest_properties_bottom_content">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest_properties_single">
                                    <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_1.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest_properties_content">
                                        <div class="latest_properties_top_content">
                                            <h4><a href="listing-details.html">Monall Design House</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$140.0000 <span>Sqft</span></h3>
                                        </div>
                                        <div class="latest_properties_bottom_content">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest_properties_single">
                                    <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_1.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">

                                                <a href="#" class="sale_btn">For Sale</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest_properties_content">
                                        <div class="latest_properties_top_content">
                                            <h4><a href="listing-details.html">Luxury Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$900 <span>Monthly</span></h3>
                                        </div>
                                        <div class="latest_properties_bottom_content">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest_properties_single">
                                    <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_1.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest_properties_content">
                                        <div class="latest_properties_top_content">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="latest_properties_bottom_content">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="latest_properties_single">
                                    <div class="latest_properties_img_carousel owl-theme owl-carousel">
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                        <div class="latest_properties_img">
                                            <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_1.jpg" alt="">
                                            <div class="latest_properties_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="featured_and_sale_btn">
                                                <a href="#" class="featured_btn">Featured</a>
                                                <a href="#" class="sale_btn">For Rent</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest_properties_content">
                                        <div class="latest_properties_top_content">
                                            <h4><a href="listing-details.html">Monall Design House</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$140.0000 <span>Sqft</span></h3>
                                        </div>
                                        <div class="latest_properties_bottom_content">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination" id="latest_properties_pagination"></div>
        </div>
    </section>
    <!--Latest Properties End-->

    <!--Providing One Start-->
    <section class="providing_one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url({{config('app.url')}}tolips/assets/images/backgrounds/providing_one_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="providing_one_left">
                        <div class="block-title text-left">
                            <h4>What Are You Looking</h4>
                            <h2>Providing the <br> Best Real Estate Services</h2>
                        </div>
                        <div class="providing_one_btn">
                            <a href="listing-1.html" class="thm-btn">Search Property</a>
                        </div>
                        <div class="providing_one_shaape_one">
                            <img src="{{config('app.url')}}tolips/assets/images/shapes/providing_one_shape_1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="providing_one_four_boxes clearfix">
                        <ul class="list-unstyled">
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-home"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Modern<br>Villas</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-house"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Furnished<br>Homes</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-condominium"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Sweet<br>Apartment</p>
                                </div>
                            </li>
                            <li>
                                <div class="providing_one_four_boxes_iocn">
                                    <span class="icon-buildings"></span>
                                </div>
                                <div class="providing_one_four_boxes_text">
                                    <p>Commercial<br>Building</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Providing One End-->

    <!--Testimonials One Start-->
    <section class="testimonials_one">
        <div class="container">
            <div class="swiper-container" id="testimonials-one__thumb">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/testimonials/testimonial-1-1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/testimonials/testimonial-1-3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/testimonials/testimonial-1-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-container" id="testimonials-one__carousel">
                <div class="testimonials_one_carousel_bg"
                    style="background-image: url({{config('app.url')}}tolips/assets/images/testimonials/testimonial-1-carousel-img.jpg)"></div>
                <div class="testimonials_one_quote">
                    <i class="fas fa-quote-left"></i>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p>This is due to their excellent service, competitive<br> pricing and customer support.
                            It’s
                            throughly <br> refresing to get such a personal touch.</p>
                        <div class="testimonials-one__meta">
                            <h3>Mike Hardson / <span>Customer</span></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p>This is due to their excellent service, competitive<br> pricing and customer support.
                            It’s
                            throughly <br> refresing to get such a personal touch.</p>
                        <div class="testimonials-one__meta">
                            <h3>Mike Hardson / <span>Customer</span></h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p>This is due to their excellent service, competitive<br> pricing and customer support.
                            It’s
                            throughly <br> refresing to get such a personal touch.</p>
                        <div class="testimonials-one__meta">
                            <h3>Mike Hardson / <span>Customer</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonials One End-->

    <!--How It Works Start-->
    <section class="how_it_works">
        <div class="how_it_works_shape_1">
            <img src="{{config('app.url')}}tolips/assets/images/shapes/how_it_works_shape_1.png" alt="">
        </div>
        <div class="container">
            <div class="block-title text-center">
                <h4>How It Works</h4>
                <h2>Follow Easy Steps</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <ul class="how_it_works_single list-unstyled">
                        <li>
                            <div class="how_it_works_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/how_it_works_img_1.png" alt="">
                                <div class="how_it_works_circle">
                                    <p>01</p>
                                </div>
                            </div>
                            <div class="how_it_works_content">
                                <h3>Find Real Estate</h3>
                                <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                            </div>
                        </li>
                        <li class="item-2">
                            <div class="how_it_works_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/how_it_works_img_2.png" alt="">
                                <div class="how_it_works_circle">
                                    <p>02</p>
                                </div>
                            </div>
                            <div class="how_it_works_content">
                                <h3>Find Real Estate</h3>
                                <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                            </div>
                        </li>
                        <li>
                            <div class="how_it_works_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/how_it_works_img_3.png" alt="">
                                <div class="how_it_works_circle">
                                    <p>03</p>
                                </div>
                            </div>
                            <div class="how_it_works_content">
                                <h3>Take Your Keys</h3>
                                <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                            </div>
                        </li>
                        <li class="item-4">
                            <div class="how_it_works_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/how_it_works_img_4.png" alt="">
                                <div class="how_it_works_circle">
                                    <p>04</p>
                                </div>
                            </div>
                            <div class="how_it_works_content">
                                <h3>Live Happily</h3>
                                <p>Quisqu tell us risus adpis viera bibe um urna.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--How It Works End-->

    <!--Blog One Start-->
    <section class="blog_one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <div class="blog_one_left">
                        <div class="block-title text-left">
                            <h4>Our Blog Posts</h4>
                            <h2>Latest News <br>& Articles</h2>
                        </div>
                        <div class="blog_one_text">
                            <p>Lorem ipsum onts persp unde omnis iste natus errluptatem acc usantium demque
                                laudantium totam.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8">
                    <div class="blog_one_right">
                        <div class="blog_one_carousel owl-theme owl-carousel">
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="{{config('app.url')}}tolips/assets/images/blog/blog_1_img_1.jpg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>20 Nov, 2020</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3><a href="news-details.html">Save Thousands Selling Your Property</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="blog-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="{{config('app.url')}}tolips/assets/images/blog/blog_1_img_2.jpg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>20 Nov, 2020</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3><a href="news-details.html">Leverage agile frame works to a
                                            robust</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Blog One Single-->
                            <div class="blog_one_single">
                                <div class="blog_one_image_box">
                                    <div class="blog_one_img">
                                        <img src="{{config('app.url')}}tolips/assets/images/blog/blog_1_img_3.jpg" alt="">
                                    </div>
                                    <div class="blog_one_date_box">
                                        <p>20 Nov, 2020</p>
                                    </div>
                                </div>
                                <div class="blog_one_content_box">
                                    <h3><a href="news-details.html"> Iterative approaches to corporate
                                            foster</a></h3>
                                    <ul class="list-unstyled blog-one__meta">
                                        <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a>
                                        </li>
                                        <li><span>/</span></li>
                                        <li><a href="news-details.html"><i class="far fa-comments"></i> 2
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog One End-->

    <!--Brand One Start-->
    <div class="brand_one">
        <div class="container">
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
            "0": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "375": {
                "spaceBetween": 30,
                "slidesPerView": 2
            },
            "575": {
                "spaceBetween": 30,
                "slidesPerView": 3
            },
            "767": {
                "spaceBetween": 50,
                "slidesPerView": 4
            },
            "991": {
                "spaceBetween": 50,
                "slidesPerView": 5
            },
            "1199": {
                "spaceBetween": 100,
                "slidesPerView": 5
            }
        }}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_5.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_1.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_2.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_3.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_4.png" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{config('app.url')}}tolips/assets/images/brand/brand_1_img_5.png" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </div>
    <!--Brand One End-->

    @include('front_page.inc.footer')




</div>


@endsection