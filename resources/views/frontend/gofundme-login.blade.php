@extends('Layouts.gofung-interface')
@section('content')
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('fund_login') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="messages"></div>

                        <div class="controls row">

                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_email" type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="password" placeholder="Password" required="required">
                                </div>
                            </div>
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