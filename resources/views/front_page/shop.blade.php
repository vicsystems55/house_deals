@extends('layouts.tolips')

@section('content')

<div class="page-wrapper">


   @include('front_page.inc.header')

    <!--Listing One Start-->
    <section class="">
        <div class="container py-5">
            
            <div class="listing_one_content_righ">
                <form class="listing_one_content_right_form">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="listing_one_content_right_input_box">
                                <h4 class="title">Choose Category</h4>
                                <select class="selectpicker" data-width="100%">
                                    <option selected="selected">For Rent</option>
                                    <option>Default Sorting 1</option>
                                    <option>Default Sorting 2</option>
                                    <option>Default Sorting 3</option>
                                    <option>Default Sorting 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="listing_one_content_right_input_box">
                                <h4 class="title">Choose Location</h4>
                                <select class="selectpicker" data-width="100%">
                                    <option selected="selected">All Locations</option>
                                    <option>Default Sorting 1</option>
                                    <option>Default Sorting 2</option>
                                    <option>Default Sorting 3</option>
                                    <option>Default Sorting 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="listing_one_content_right_input_box">
                                <h4 class="title">Size</h4>
                                <input type="text" placeholder="Min" class="min_input_box">
                                <input type="text" placeholder="Max" class="max_input_box">
                            </div>
                        </div>
                    </div>
                </form>
                <div class="listing_one_quantity_and_price-ranger">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="listing_one_quantity_box">
                                <div class="product-quantity-box">
                                    <div class="input-box">
                                        <p class="title">Bedrooms</p>
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </div>
                                </div>
                                <div class="product-quantity-box bathrooms">
                                    <div class="input-box">
                                        <p class="title">Bathrooms</p>
                                        <input class="quantity-spinner" type="text" value="1" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="price_sidebar">
                                <div class="price_sidebar_title">
                                    <h3>Price Range</h3>
                                </div>
                                <div class="price-ranger">
                                    <div id="slider-range"></div>
                                    <div class="ranger-min-max-block">
                                        <span>From</span>
                                        <input type="text" readonly class="min">
                                        <span>to</span>
                                        <input type="text" readonly class="max">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter_by_tags">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="pets-friendly" id="tag_1">
                                <label for="tag_1"><span></span>Air Conditioning</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="plumbing" id="tag_2" checked>
                                <label for="tag_2"><span></span>Swimming Pool</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="house-cleaning" id="tag_3">
                                <label for="tag_3"><span></span>Lawn</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="business-financing" id="tag_4">
                                <label for="tag_4"><span></span>Outdoor</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="accepts-credit Cards" id="tag_5">
                                <label for="tag_5"><span></span>Gym</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="bike-parking" id="tag_6">
                                <label for="tag_6"><span></span>Window Coverings</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="coupons" id="tag_7">
                                <label for="tag_7"><span></span>Wireless Internet</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="parking-street" id="tag_8">
                                <label for="tag_8"><span></span>TV Cable</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="wireless-internet" id="tag_9">
                                <label for="tag_9"><span></span>Laundry</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="smoking-allowed" id="tag_10">
                                <label for="tag_10"><span></span>Back Yard</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="bed-&-breakfast" id="tag_11">
                                <label for="tag_11"><span></span>Shower</label>
                            </div>
                            <div class="single_tags_check__box">
                                <input type="checkbox" name="bed-&-breakfast" id="tag_12">
                                <label for="tag_12"><span></span>Barbeque</label>
                            </div>
                        </div>
                        <div class="filter_by_tags_btn">
                            <a href="#" class="filter_results">Filter Results</a>
                            <a href="#" class="save_search">Save Search</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter">
                            <div class="filter_inner_content">
                                <div class="left">
                                    <div class="left_icon">
                                        <a href="listing-1.html" class="icon-grid "></a>
                                        <a href="listing-2.html" class="list-icon active icon-list"></a>
                                    </div>
                                    <div class="left_text">
                                        <h4>Over 6 Results Found</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="shorting">
                                        <select class="selectpicker" data-width="100%">
                                            <option selected="selected">Default Sorting</option>
                                            <option>Default Sorting 1</option>
                                            <option>Default Sorting 2</option>
                                            <option>Default Sorting 3</option>
                                            <option>Default Sorting 4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listings_two_page_content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="listings_two_page_content_inner">
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_1.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">

                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">

                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">

                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_4.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Monall Design House</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$140.0000 <span>Sqft</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="featured_btn">Featured</a>
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Luxury Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$900 <span>Monthly</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_4.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_5.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Rent</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Interior Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$86.7600 <span>Sqft</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
                                            <ul class="list-unstyled">
                                                <li><span class="icon-bed"></span>4</li>
                                                <li><span class="icon-shower"></span>2</li>
                                                <li><span class="icon-square-measument"></span>500 sqft</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--Listings Two Page Content Single-->
                                <div class="listings_two_page_content_single">
                                    <div class="listings_two_page_main_img">
                                        <div class="listings_two_page_content_carousel owl-theme owl-carousel">
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_6.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_2.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                            <div class="listings_two_page_img">
                                                <div class="listings_two_page_content_img_box">
                                                    <img src="{{config('app.url')}}tolips/assets/images/resources/listing_2_img_3.jpg" alt="">
                                                </div>
                                                <div class="listings_two_page_content_icon">
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="listingstwo_page_content_btn">
                                                    <a href="#" class="sale_btn">For Sale</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listings_two_page_bottom_content">
                                        <div class="listings_two_page_bottom_content_top">
                                            <h4><a href="listing-details.html">Luxury Appartment</a></h4>
                                            <p>80 Broklyn Street, New York. USA</p>
                                            <h3>$900 <span>Monthly</span></h3>
                                        </div>
                                        <div class="listings_two_page_bottom_item">
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
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="listings_page_content_load_more_btn">
                                <a href="#" class="thm-btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Listing One End-->

    <!--Site Footer One Start-->
    <footer class="site_footer" style="background-image: url(assets/images/resources/site_footer_top_bg.jpg)">
        <div class="container">
            <div class="site_footer_one_top">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 wow fadeInUp" data-wow-delay="00ms">
                        <div class="footer-widget__column footer_widget__about">
                            <div class="footer_logo">
                                <a href="index.html"><img src="{{config('app.url')}}tolips/assets/images/resources/footer_logo.png" alt=""></a>
                            </div>
                            <div class="footer_widget_about_text">
                                <p>Lorem ipsum dolor sit ame consect etur pisicing elit sed do eiusmod tempor
                                    incididunt ut labore.</p>
                            </div>
                            <div class="footer_call_agent_box">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="text">
                                    <p>Call Agent</p>
                                    <a href="tel:92-888-000-2222">92 888 000 2222</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer_widget__explore clearfix">
                            <div class="footer-widget__title">
                                <h3>Explore</h3>
                            </div>
                            <ul class="footer_widget__explore_list list-unstyled">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Add Properties</a></li>
                                <li><a href="#">Pricing Packages</a></li>
                                <li><a href="#">Bookmarks</a></li>
                            </ul>
                            <ul class="footer_widget__explore_list two list-unstyled">
                                <li><a href="#">Our Agents</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer_widget__newsletter">
                            <div class="footer-widget__title">
                                <h3>Newsletter</h3>
                            </div>
                            <form action="#" class="footer_form">
                                <div class="footer_input_box">
                                    <input type="email" name="email" placeholder="Email Address">
                                    <button type="submit" class="button">Subscribe</button>
                                </div>
                            </form>
                            <div class="footer_widget__newsletter_bottom">
                                <p>88 Broklyn Golden Street, New York. USA</p>
                                <a href="mailto:needhelp@tolins.com">needhelp@tolins.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer One End-->

    <!--Site Footer Bottom Start-->
    <div class="site_footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site_footer_inner">
                        <div class="site_footer_left">
                            <p>© Copyright 2020 by <a href="#">Layerdrops.com</a></p>
                        </div>
                        <div class="site_footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Site Footer Bottom End-->




</div>


@endsection