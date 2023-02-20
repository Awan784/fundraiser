@extends('Layouts.gofung-interface')
@section('content')

<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('gofundstep-4') }}" enctype="multipart/form-data">
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

                                    <input id="form_name" class="private-check-input" type="text"  placeholder="4 DIGIT ACCESS CODE">

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Short Description of your fundraiser?</h6>
                                </div>
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="text" name="s_description" placeholder="Enter 75 character for short description" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Briefly describe why you are starting this fundraiser.</h6>
                                </div>
                                <div class="form-group has-error has-danger mb-30">
                                    <textarea id="form_message" name="l_description" placeholder="Please describe the details here.." rows="3" required="required"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-30">
                                    <h6 class="fw-400">Fundraiser main banner image</h6>
                                </div>
                                <div class="form-group has-error has-danger mb-30">
                                    <input type="file" name="banner_image" class="file-input-image">
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="mb-30">
                                    <h6 class="fw-400">Other Fundraiser images</h6>
                                </div>
                                <div class="form-group has-error has-danger mb-30">
                                    <input type="file" name="raiser_images[]" class="file-input-image" multiple>
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
