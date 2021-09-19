@extends('layouts.tolips')

@section('content')


<div class="page-wrapper">

    @include('front_page.inc.header')

    <!--Banner Three Start-->
    <section class="banner_three">
        <div class="banner_three_home_img">
            <img src="assets/images/main-slider/slider-3-1.png" alt="">
        </div>
        <div class="banner_three_shape_one"></div>
        <div class="banner_three_shape_two"></div>
        <div class="banner_three_shape_three"
            style="background-image: url(assets/images/shapes/banner_three_shape_3.png)"></div>
        <div class="banner_three_shape_four"
            style="background-image: url(assets/images/shapes/banner_three_shape_4.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="banner_three_content">
                        <div class="">
                            <h2>Getting a home is <br> a collaborative process</h2>
                            <h2 class="font-weight-bold">Let's find it together</h2>
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
                                            <input type="text"
                                                placeholder="Search for city, property, agent and more...">
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
                                            <input type="text"
                                                placeholder="Search for city, property, agent and more...">
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
                                            <input type="text"
                                                placeholder="Search for city, property, agent and more...">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner Three Start-->

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

    <section class="latest_properties">
        <div class="container">
            <div class="block-title text-center">
                
                <h3>Recommended Properties</h3>
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

    <!--Two Boxes Start-->
    <section class="two_boxes">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow slideInLeft" data-wow-delay="100ms">
                    <!--Two Boxes Single-->
                    <div class="two_boxes_single">
                        <div class="two_boxes_iocn_and_content">
                            <div class="two_boxes_iocn">
                                <span class="icon-home-1"></span>
                            </div>
                            <div class="two_boxes_content">
                                <h3>Looking for the New Home?</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow slideInLeft" data-wow-delay="100ms">
                    <!--Two Boxes Single-->
                    <div class="two_boxes_single">
                        <div class="two_boxes_iocn_and_content">
                            <div class="two_boxes_iocn">
                                <span class="icon-home-1"></span>
                            </div>
                            <div class="two_boxes_content">
                                <h3>Looking for the New Home?</h3>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow slideInLeft" data-wow-delay="100ms">
                    <!--Two Boxes Single-->
                    <div class="two_boxes_single">
                        <div class="two_boxes_iocn_and_content">
                            <div class="two_boxes_iocn">
                                <span class="icon-home-1"></span>
                            </div>
                            <div class="two_boxes_content">
                                <h3>Want to Sell your Home?</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Two Boxes End-->

    <!--Latest Properties Three Start-->
    <section class="latest_properties three">
        <div class="container_box">
            <div class="block-title text-center">
                <h4>Browse Hot Offers</h4>
                <h2>Latest Properties</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
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
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="latest_properties_single">
                        <div class="latest_properties_img_carousel owl-theme owl-carousel">
                            <div class="latest_properties_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_4.jpg" alt="">
                                <div class="latest_properties_icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="featured_and_sale_btn">
                                    <a href="#" class="sale_btn">For Rent</a>
                                </div>
                            </div>
                            <div class="latest_properties_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_2.jpg" alt="">
                                <div class="latest_properties_icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="featured_and_sale_btn">
                                    <a href="#" class="sale_btn">For Rent</a>
                                </div>
                            </div>
                            <div class="latest_properties_img">
                                <img src="{{config('app.url')}}tolips/assets/images/resources/latest_properties_img_3.jpg" alt="">
                                <div class="latest_properties_icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="featured_and_sale_btn">
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
            </div>
        </div>
    </section>
    <!--Latest Properties Three End-->

    <!--Explore Start-->
    
    <!--Explore End-->

    <!--Are You Ready Start-->
    <section class="are_you_ready two jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
        style="background-image: url(assets/images/backgrounds/are_you_ready_bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="are_you_ready_content">
                        <div class="are_you_ready_shape"><img src="assets/images/shapes/are_you_ready_shape.png"
                                alt=""></div>
                        <h2>Are You Ready to Buy <br> Dream House?</h2>
                        <a href="listing-1.html" class="thm-btn">Search Property</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Are You Ready End-->

    <!--Three Icons Start-->
    <section class="three_icons">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="three_icons_inner">
                        <ul class="three_icons_list clearfix list-unstyled">
                            <li>
                                <div class="three_icons_box">
                                    <span class="icon-assets"></span>
                                </div>
                                <div class="three_icons_text">
                                    <h4>Trusted by Thousands</h4>
                                    <p>Lorem ipsum is simply dolor <br> sit am adipi we help.</p>
                                </div>
                            </li>
                            <li>
                                <div class="three_icons_box">
                                    <span class="icon-agent"></span>
                                </div>
                                <div class="three_icons_text">
                                    <h4>Professional Agents</h4>
                                    <p>Lorem ipsum is simply dolor <br> sit am adipi we help.</p>
                                </div>
                            </li>
                            <li>
                                <div class="three_icons_box">
                                    <span class="icon-rent"></span>
                                </div>
                                <div class="three_icons_text">
                                    <h4>Unlimited Listings</h4>
                                    <p>Lorem ipsum is simply dolor <br> sit am adipi we help.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Three Icons End-->

    <!--Team One Start-->

    <!--Team One End-->

    <!--Testimonials Two Start-->
    
    <!--Testimonials Two End-->

    <!--CTA One Start-->
    <section class="cta_one">
        <div class="cta_one_bg" ></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta_one_inner">
                        <div class="">
                            <h2 class="text-center">We Help People and Homes Find Each Other</h2>
                        
                        
                            <a href="listing-1.html" class="thm-btn">Browse Property</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta_on bg-white ">
      
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class=" py-5">
                        <div class=" text-center">
                            <h2 class="text-dark font-weight-bold">Email Newsletter</h2>
                            <h6 class="text-center py-3">Signup to our newsletter to get up date on our offers</h6>
                            <form action="#" class="footer_form">
                                <div class="footer_input_box">
                                    <input type="email" name="email" class="border border-secondary" placeholder="Email Address">
                                    <button type="submit" class="button">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--CTA One End-->

    <!--Blog Two Start-->
   
    <!--Blog Two End-->

    <!--Brand One Start-->
   
    <!--Brand One End-->

    <!--Site Footer One Start-->
    
    <!--Site Footer One End-->

    @include('front_page.inc.footer')

    <!--Site Footer Bottom Start-->

    <!--Site Footer Bottom End-->




</div><!-- /.page-wrapper -->



@endsection