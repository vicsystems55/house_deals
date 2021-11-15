@extends('layouts.tolips')

@section('content')

<div class="page-wrapper">


   @include('front_page.inc.header')

    <!--Listing One Start-->
    <section class="">
        <div class="container py-5">
            
            <div class="listing_one_content_righ">
                <form class="d-none listing_one_content_right_form">
                    <div class="row">
                      
                        <div class="col-xl-4 mx-auto">
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
                       
                    </div>
                </form>
                <div class="d-none listing_one_quantity_and_price-ranger">
                    <div class="row">
                        <div class="col-xl-12">
                       
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
                <div class="d-none filter_by_tags">
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
                            <a href="#" class="filter_results float-right">Filter Results</a>
                         
                        </div>
                    </div>
                </div>
                <div class="row">
                 
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="filter">
                            <div class="filter_inner_content">
                                <div class="left">
                                   
                                    <div class="left_text">
                                        <h4>Over 6 Results Found</h4>
                                    </div>
                                </div>
                                <div class="right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listings_page_content">
                    <div class="row">

                        @foreach ($listings as $listing)

                            
                        <div class="col-xl-4">
                            <!--Listings Page Content Single-->
                            <div class="listings_page_content_single">
                                <div class="listings_page_content_carousel owl-theme owl-carousel">
                                        @foreach ($listing->images as $image)
                                        <div class="listings_page_content_img_box">
                                            <div class="listings_page_content_img">
                                                <img src="{{asset('property_images')}}/{{$image->img_path}}" alt="">
                                            </div>
                                            <div class="listings_page_content_icon">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="listings_page_content_btn">
                                                <a href="#" class="sale_btn">{{$listing->status}}</a>
                                            </div>
                                        </div>
                                        @endforeach
                                    
                                    
                                </div>
                                <div class="listings_page_bottom_content">
                                    <div class="listings_page_bottom_content_top">
                                        <h4><a href="listing-details.html">{{$listing->property_name}}</a></h4>
                                        <p>{{$listing->location}}</p>
                                        <h3>{{$listing->price}}</h3>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
           
                        @endforeach



                    
                    
                  
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
    @include('front_page.inc.footer')
    <!--Site Footer One End-->

    <!--Site Footer Bottom Start-->

    <!--Site Footer Bottom End-->




</div>


@endsection