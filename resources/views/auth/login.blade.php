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
    <!-- Template styles -->
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/style.css">
    <link rel="stylesheet" href="{{config('app.url')}}tolips/assets/css/responsive.css">

</head>

<body>


    
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center py-5">
                <img src="{{asset('assets/images/logo.png')}}" style="width: 300px;" class="img-fluid " alt="">
            </div>
            <div class="text-center pb-3">
                <h6 class="font-weight-bold " style="color: #5C1B9D;">Making  it possible for everyone to own a home</h6>
            </div>
            <img src="{{asset('assets/images/login_image.png')}}" class="img-fluid" alt="">
    
        </div>
        <div style="background-color: #5C1B9D; min-height: 700px;" class="col-md-6 text-white h-100">
            <h4 style="font-size: 24pt" class="font-weight-bold text-center py-5">WELCOME</h4>
            <div style="height: 470px;" class="card-bod col-md-8 mx-auto">
        
            
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Login</span> 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#profile2" role="tab" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Register</span> 
                        </a>
                    </li>
              
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane p-1 active" id="home2" role="tabpanel">
                        <div class="p-2"></div>
                        <form action="{{route('login')}}" method="post" class="col-md-12 mx-auto mt-5">
                            @csrf
                            <div class="form-group">
                                <input  type="text" class="form-control  form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email Address">

                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  form-control-lg @error('password') is-invalid @enderror" password="password" placeholder="Password">

                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">LOGIN</button>
                            </div>
                        </form>
                        <div class="c">
                            <a href="" class="">Forgot Password?</a>
                        </div>
                        <div class="c">
                            Don't have an account? <a href="" class="">Register Here.</a>
                        </div>
                      
                    </div>
                    <div class="tab-pane p-mb-3 " id="profile2" role="tabpanel">
                      
                        <form action="{{route('register')}}" method="post" class="col-md-12 mx-auto mt-5">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control  form-control-lg @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Fullname">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  form-control-lg" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  form-control-lg" name="password" value="{{ old('password') }}" placeholder="Password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control  form-control-lg" name="password-confirmation"  placeholder="Confirm Password">
                                
                                @error('password-confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">REGISTER</button>
                            </div>
                        </form>
                        <div class="c">
                            <a href="" class="">Forgot Password?</a>
                        </div>
                        <div class="c">
                            Don't have an account? <a href="" class="">Register Here.</a>
                        </div>
                      
                    </div>
                  
       
                </div>

             

            </div>
            <div class="p-3"></div>
            <div class="c text-center">
                By loggin in, I accept House Deals Terms of use and Privacy Policy.
            </div>
        </div>
    </div>
</div>

    
    

   


    <script src="{{config('app.url')}}tolips/assets/js/jquery.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>