@extends('layouts.baze')

@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Profile</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Please update the fields</li>
                    </ol>
                </div>
            </div>

            <div class="col-sm-6">
              
            </div>
        </div>
        <!-- end page title -->

 
        <!-- end row -->

        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card">
                    <div class="card-body">

                        <form action="{{route('update_profile')}}" method="post" enctype="multipart/form-data">
                            @csrf

                        <div class="form-group text-center">
                            <img id="avatar" style="height: 90px; width: 90px; object-fit: cover; border-radius: 20px;" class="shadow rounded-circle" src="{{config('app.url')}}avatars/default.png" >

                        </div> 

                      <div class="col-sm-5 mx-auto">
                        <div class="custom-file mb-5 mt-3 mx-auto">
                            <input onchange="previewFile4(this.id);" type="file" name="avatar" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload Avatar</label>
                            @error('avatar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                      </div>



                   



                        <div class="row">
                            <div class="col-md-6 ">

                                <div class="form-group ">
                                    <input type="text" class="form-control" name="managing_director_name" placeholder="Enter name of Business Owner or Managing Director">
                                    
                                    @error('managing_director_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_name" placeholder="Enter Business Name">
                                    @error('business_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cac_no" placeholder="Enter Business CAC No. (RC / PLC)">
                                    @error('cac_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_address" placeholder="Enter Business Address">
                                    @error('business_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_website" placeholder="Enter Business Website">
                                    @error('business_website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="business_email" placeholder="Enter Business Alternative Email Address">
                                    @error('business_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="contact_person" placeholder="Enter Company Management Email Address (Contact Person)">
                                    @error('contact_person')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                            </div>
                            <div class="col-md-6">

                          

                              

                                <div class="form-group">
                                    <img id="previewImg" style="height: 230px; width: 230px; object-fit: cover; border-radius: 20px;" class="shadow" src="{{config('app.url')}}company_uploads/default.jpg" >

                                </div> 

                                <div class="col-sm-6 col-md-10">

                                    <div class="custom-file mb-5 mt-3 ">
                                        <input onchange="previewFile4(this.id);" type="file" name="utility_bill" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Company Utility Bill</label>
                                        @error('utility_bill')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                               

                            </div>
                        </div>

                        <div class="form-group col-md-6 mx-auto">
                            <button type="sumbit" class="btn btn-primary btn-block btn-lg">Submit</button>
                        </div>

                     
                          
                      
                        </form>  
                       
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->



    </div> <!-- container-fluid -->
</div>

<script>
    function previewFile4(chooser){
        console.log('hello');

        var file = $('#' + chooser).get(0).files[0];

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                // $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }
</script>


@endsection