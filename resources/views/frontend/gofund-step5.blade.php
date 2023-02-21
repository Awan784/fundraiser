@extends('Layouts.gofung-interface')
@section('content')
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('gofund_otp') }}" >
                      @csrf
                        <div class="messages"></div>
                          
                        <div class="controls row">
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Full Name</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="full_name" placeholder="Enter your full name" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Email</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="email" name="email" placeholder="Enter your email address" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Username</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="username" placeholder="Enter your username" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Telephone</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="telephone" placeholder="Enter your telephone " required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Password</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="password" placeholder="*************" required="required">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Confirm Password</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="confirm_password" placeholder="*************" required="required">
                                </div>
                            </div>
                            
                             
                        </div>   

                            <div class="col-12 text-center pt-30">
                                <button  class="butn butn-md bg-dark-brown text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    <span class="text slide-down">Continue</span>

                                </button>
                            </div>
                            <div class="col-12 text-center pt-30">
                                
                                <p>Already have an account ? <a href="{{ route('gofundLogin') }}" class="text-center text-main-color"> Login</a></p>
                                
                            </div>

                    </form>
                    

                </div>

            </div>

        </div>
    </div>

   
</section>
@endsection

