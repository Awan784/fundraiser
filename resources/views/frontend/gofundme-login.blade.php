@extends('Layouts.gofung-interface')
@section('content')
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="box-shadow to-up">
                    <form id="contact-form" method="post" action="https://www.smartinnovates.com/uithemez/item/ravo01/contact.php" novalidate="true">

                        <div class="messages"></div>

                        <div class="controls row">

                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_email" type="email" name="email" placeholder="Email Address" required="required">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="name" placeholder="Password" required="required">
                                </div>
                            </div>
                            <div class="col-12 text-center pt-30">
                                <a href="{{ route('gofund_otp') }}" class="butn butn-md bg-dark-brown text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    <span class="text slide-down">Continue</span>
                                </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

   
</section>
@endsection