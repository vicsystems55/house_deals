@extends('layouts.tolips')


@section('content')
 
<div class="page-wrapper">

    @include('front_page.inc.header')

    <!--Page Header Start-->
    <section class="d-none page-header" style="background-image: url(assets/images/backgrounds/page-header_bg.jpg);">
        <div class="container">
            <div class="page-header-inner">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Locations Start-->
    <section class="locations">
       
    </section>
    <!--Locations End-->

    <!--Contact Start-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="block-title text-left">
             
                        <h2>Say <span style="color: #5B1B9C;" class=""> Hello</span> to us</h2>
                    </div>
                    <div class="contact_text">
                        <p>Simply fill the feedback form and we will get back to you shortly</p>
                    </div>
                    <form action="inc/sendemail.php" class="contact__form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="text" placeholder="Phone number" name="phone">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment_input_box">
                                    <input type="email" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment_input_box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <button type="submit" class="thm-btn comment-form__btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 text-center">

                    <img style="width: 420px;" src="{{asset('assets/images/contact_image.png')}}" class="img-fluid" alt="">
                 
                </div>
             
            </div>
        </div>
    </section>
    <!--Contact End-->

    <!--Google Map-->

    
        
        <section class="d-none google_map">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__contact" allowfullscreen>
            </iframe>

        </section> 
    
    

    @include('front_page.inc.footer')




</div>


@endsection