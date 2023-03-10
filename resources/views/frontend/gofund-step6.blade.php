@extends('Layouts.gofung-interface')
@section('content')
@include('Layouts.frontend-header-otp')
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('gofundstep-7') }}">
                    @csrf
                        <div class="messages"></div>

                        <div class="controls row">
                            <div class="col-12">
                                <div class="mb-30">
                                    
                            
                                    <h6 class="fw-400">Code</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="otp" placeholder="######" required="required">
                                </div>
                                <p class="text-sm text-danger"></p>
                            </div>
                            
                             
                        </div>   

                            <div class="col-lg-12">
                            
                            

                            <div class="col-12 text-center pt-30">
                                <button type="submit" class="butn butn-md bg-dark-brown text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    <span class="text slide-down">Continue</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
</section>
@endsection