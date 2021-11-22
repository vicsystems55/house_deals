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
            <h4 style="font-size: 24pt" class="font-weight-bold text-center py-5 mt-5 px-md-5">You are being timed out <br> due to inactivity</h4>
            <div style="height: 470px;" class="card-bod col-md-8 mx-auto">
        
            
                <!-- Nav tabs -->
             

                <!-- Tab panes -->
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
                        <input type="password" class="form-control  form-control-lg " password="password" name="password" placeholder="Password">

                        
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">UNLOCK</button>
                    </div>
                </form>

             

            </div>
            <div class="p-3"></div>
            <div class="c text-center">
             
            </div>
        </div>
    </div>
</div>

    
    

   


    <script src="{{config('app.url')}}tolips/assets/js/jquery.min.js"></script>
    <script src="{{config('app.url')}}tolips/assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>