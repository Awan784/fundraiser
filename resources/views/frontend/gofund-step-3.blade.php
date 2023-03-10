@extends('Layouts.gofung-interface')
@section('content')
<header class="pg-header-sipm gr-purple-light-bg valign">
    <div class="container mt-60">
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="caption text-center">
                    <span class="fz-14 mb-10 text-u ls4 text-main-color">We're here to guide you every step of the way.</span>
                    <h1 class="fz-50 fw-600 text-main-color">Let's begin fundraising </h1>
                </div>
            </div>
        </div>

    </div>
</header>
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('submit-step-three') }}" enctype="multipart/form-data">
                           @csrf
                        <div class="messages"></div>

                        <div class="controls row">
                            
                            
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">What is the type of confidentiality for this funds ?</h6>
                                </div>
                                <div class="form-group mb-30">

                                    <input type="radio" class="btn-check public-check" name="fund_type"  value="Public" id="option14" autocomplete="off" onchange="publicCheckbox()">
                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option14">Public</label>
                                    <input type="radio" class="btn-check private-check" name="fund_type"  value="Private" id="option15" autocomplete="off" onchange="privateCheckbox()" >
                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option15">Private</label>
                                    <input type="radio" class="btn-check public-check" name="fund_type" value="Anonymous" id="option16" autocomplete="off" onchange="publicCheckbox()">
                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option16">Anonymous</label>
                                    <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" class="private-check-input" type="text" name="code" placeholder="4 DIGIT ACCESS CODE" maxlength="4">
                                    @error('fund_type')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Short Description of your fundraiser?</h6>
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="short_description" placeholder="Enter 75 character for short description"  maxlength="75">
                                    @error('short_description')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Briefly describe why you are starting this fundraiser.</h6>
                                </div>
                                <div class="form-group has-error has-danger mb-30">
                                    <textarea id="form_message" name="long_description" placeholder="Please describe the details here.." rows="3" ></textarea>
                                    @error('long_description')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
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


    <!-- ==================== End Blog ==================== -->




    </main>


@endsection
@section('scripts')
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(".private-check-input").hide();
        $(".mobile-money-input").hide();
        $(".bank-account-input").hide();
        function privateCheckbox()
        {
            if($('.private-check').is(":checked"))
                $(".private-check-input").show();
        }
        function publicCheckbox()
        {
            if($('.public-check').is(":checked"))
                $(".private-check-input").hide();
        }
        function mobilemoneybox()
        {
            if($('.mobile-money').is(":checked"))
                $(".mobile-money-input").show();
            $(".bank-account-input").hide();
        }
        function banktransferbox()
        {
            if($('.bank-account').is(":checked"))
                $(".bank-account-input").show();
            $(".mobile-money-input").hide();

        }
    </script>
@endsection
