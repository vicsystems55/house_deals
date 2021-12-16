@extends('layouts.tolips')

@section('content')

<div class="page-wrapper">


   @include('front_page.inc.header')

  
  <!-- Listings Details Main Image Box Start-->
        <section class="listings_details_main_image_box">
            <div class="container-full-width">
                <div class="thm__owl-carousel owl-carousel owl-theme" data-options='{"margin":10, "smartSpeed": 700, "dots": false, "items": 3, "responsive": {
                    "0": {
                        "items": 1
                    },
                    "480": {
                        "items": 2
                    },
                    "992": {
                        "items": 4
                    }
                }}'>

                @foreach ($listing_data->images as $image)

                <div class="item">
                    <!--Listings Details Main Image Box Single-->
                    <div class="listings_details_main_image_box_single">
                        <div class="listings_details_main_image_box__img">
                            <a href="{{config('app.url')}}property_images/{{$image->img_path}}" class="img-popup">
                                <img style="object-fit: cover; height: 400px;" src="{{config('app.url')}}property_images/{{$image->img_path}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                    
                @endforeach

              
                    
                    
                
                </div>
            </div>
        </section>
        <!-- Listings Details Main Image Box End-->

        <!--Listing Details Top Start-->
        <section class="listing_details_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="listing_details_top_left">
                            <div class="listing_details_top_title">
                               
                                @if(Session::has('reserve_msg'))
                                <p class="alert alert-info">{{ Session::get('reserve_msg') }}</p>
                                @endif

                                <h3>{{$listing_data->property_name}}</h3>
                                <p>{{$listing_data->description}}</p>
                                <h4>{{number_format($listing_data->price,2)}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="listing_details_top_right clearfix">
                            <div class="listing_details_top_product_list_box">
                             
                            </div>
                            <div class="listing_details_top_right_btn_box">
                                <div class="col-xl-12">
                                    <!-- Button trigger modal -->
                                       
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content col-md-10 mx-auto">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Reserve Property</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                    <div class="modal-body col-md-12 mx-auto">
                                                        
                                                        <form method="post" action="{{route('create_reserve_listing')}}">
                                                         @csrf
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" value="{{(Auth::user()->name)??''}}" placeholder="Fullname">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="email" value="{{(Auth::user()->email)??''}}" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                                        </div>

                                                        <input type="hidden" name="listing_id" value="{{$listing_data->id}}">
                                                        
                                                       
                                               
                                                            <button type="submit" class="thm-btn review_from__btn btn-block" >Submit</button>
                                                       
        
                                                    </form>
                                                       

                                                    
                                                    </div>
                                               
                                            </div>
                                            </div>
                                        </div>

                                    <button type="submit" class="thm-btn review_from__btn" data-toggle="modal" data-target="#exampleModal">Reserve Listing</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Listing Details Top End-->

        <!--Listing Details Bottom End-->
        <section class="listing_details_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="listing_details_bottom_left">
                            <div class="listing_details_bottom_left_content">
                                <ul class="post_rating_and_view_list list-unstyled">
                                    <li><i class="far fa-clock"></i>Posted 2 days ago</li>
                                    <li>
                                        <ul class="rating_list list-unstyled">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </li>
                                    <li><i class="fas fa-eye"></i>2600</li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing_details_bottom_right">
                            <div class="listing_details_bottom_right_btn  d-none">
                                <a href="#"><i class="fas fa-share"></i>Share</a>
                                <a href="#"><i class="fa fa-heart"></i>Save</a>
                                <a href="#"><i class="fa fa-envelope"></i>Email</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Listing Details Top End-->

        <!--Listing Details Start-->
        <section class="listing_details">
            <div class="container">
                {{Session::get('codex')}}
             

                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="listing_details_left">
                            <div class="listing_details_text">
                                <p class="text_1">Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Etiam ultricies
                                    nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.
                                    Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                                    adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                    hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien
                                    ut libero venenatis faucibus. </p>
                             
                            </div>
                          
                            <div class="d-none listing_details_amenities">
                                <h3 class="listing_details_amenities_title">Amenities</h3>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="listing_details_amenities_single list-unstyled">
                                            <li><span class="icon-confirmation"></span>Air Conditioning</li>
                                            <li><span class="icon-confirmation"></span>Barbeque</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Dryer</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Gym</li>
                                            <li><span class="icon-confirmation"></span>Laundry</li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="listing_details_amenities_single list-unstyled">
                                            <li><span class="icon-confirmation"></span>Lawn</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Microwave</li>
                                            <li><span class="icon-confirmation"></span>Refrigerator</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Sauna</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Swimming Pool</li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4">
                                        <ul class="listing_details_amenities_single list-unstyled">
                                            <li><span class="icon-confirmation"></span>TV Cable</li>
                                            <li><span class="icon-confirmation clr-gray"></span>Washer</li>
                                            <li><span class="icon-confirmation"></span>WiFi</li>
                                            <li><span class="icon-confirmation"></span>Window Coverings</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none row">
                                <div class="col-xl-12">
                                    <div class="listing_details_video">
                                        <div class="listing_details_video_title">
                                            <h3>Property Video</h3>
                                        </div>
                                        <div class="listing_details_video_img">
                                            <img src="assets/images/resources/listing_details_video_img.jpg" alt="">
                                            <div class="listing_details_video_btn_box">
                                                <a href="https://www.youtube.com/watch?v=i9E_Blai8vk"
                                                    class="listing_details_video_btn video-popup"><i
                                                        class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="listing_details_location">
                                        <div class="listing_details_location_title">
                                            <div class="left">
                                                <h3>Property Location</h3>
                                            </div>
                                            <div class="right">
                                                <p>80 Broklyn Street, New York. USA</p>
                                            </div>
                                        </div>
                                        <div class="listing_details_location_map">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                                class="google-map__contact" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                           
                            </div>
                            <!--Review Two Box-->
                            <div class="d-none review_two_box">
                                <h3 class="review_two_box__title">Property Reviews</h3>
                                <!--Review Two Box Single-->
                                <div class="review_two_box__single">
                                    <div class="review_two_box__image">
                                        <img src="assets/images/resources/review-2-img-1.png" alt="">
                                    </div>
                                    <div class="review_two_box__content">
                                        <div class="review_two_box_title">
                                            <div class="reviewer_name">
                                                <h3>Kevin Martin</h3>
                                            </div>
                                            
                                        </div>
                                        <p>It has survived not only five centuries, but also the leap into electronic
                                            typesetting unchanged. It was popularised in the sheets containing lorem
                                            ipsum is simply free text.</p>
                                    </div>
                                </div>
                                <!--Review Two Box Single-->
                               
                            </div>
                            <!--Review Two Box Form-->
                            <div class="d-none review_two_box_form">
                                <h3 class="review_two_box_form__title">Add Review</h3>
                                <div class="review_two_box_form_rating">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                </div>
                                <form action="inc/sendemail.php" class="review_two__form">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="review_two_input_box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="review_two_input_box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="review_two_input_box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <button type="submit" class="thm-btn review_from__btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="listing_details_sidebar">
                            <div class="listing_details_sidebar_agent">
                                <div class="listing_details_sidebar_agent_img">
                                    <img src="assets/images/resources/listing_details_agent_img.jpg" alt="">
                                </div>
                                <div class="listing_details_sidebar_agent_content">
                                    <div class="listing_details_sidebar_agent_title">
                                        <h3>Christine Smith</h3>
                                        <p>Property Agent</p>
                                    </div>
                                    <ul class="listing_details_sidebar_agent_contact_info list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-phone-square-alt"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:888-666-000">888 666 000</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-print"></i>
                                            </div>
                                            <div class="text">
                                                <a href="tel:92-655-788-000">92 655 788 000</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="listing_details_sidebar_agent__social">
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
            </div>
        </section>
        <!--Listing Details End-->

    <!--Listing One End-->

    <!--Site Footer One Start-->
    @include('front_page.inc.footer')
    <!--Site Footer One End-->

    <!--Site Footer Bottom Start-->

    <!--Site Footer Bottom End-->




</div>


@endsection