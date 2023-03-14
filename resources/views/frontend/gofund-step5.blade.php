@extends('Layouts.gofung-interface')
@section('content')
@include('Layouts.frontend-sidebar-login')


<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">

                    <form  method="post" action="{{ route('gofund_otp') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="messages"></div>
                          
                        <div class="controls row">
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Full Name</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" value="{{ old('full_name') }}" type="text" name="full_name" placeholder="Enter your full name">
                                    @error('full_name')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Email</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="email" value="{{ old('email') }}" name="email" placeholder="Enter your email address" >
                                    @error('email')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Phone No</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="number" value="{{ old('telephone') }}" name="telephone" placeholder="Enter your telephone">
                                    @error('telephone')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Confirm Phone No</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="number" value="{{ old('confirm_telephone') }}" name="confirm_telephone" placeholder="Confirm your telephone " >
                                    @error('confirm_telephone')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Password</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="password" placeholder="*************" >
                                    @error('password')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Confirm Password</h6>
                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="confirm_password" placeholder="*************" >
                                    @error('confirm_password')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Would you like to receive your confirmation code by Email or SMS ?</h6>
                                </div>
                                <div class="form-group mb-30">

                                    <input type="radio" class="btn-check " name="options" id="option8" autocomplete="off">
                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option8">Email</label>
                                    <input type="radio" class="btn-check " name="options" id="option10" autocomplete="off">
                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option10">SMS</label>
                                </div>
                            </div>
                             
                        </div>   

                            <div class="col-12 text-center pt-30">
                                <button type="submit"  class="btn btn-md bg-success text-light radius-30">
                                    <span class="text slide-up">Continue</span>

                                </button>
                            </div>
                    </form>
                    

                </div>

            </div>

        </div>
    </div>

   
</section>
@endsection

