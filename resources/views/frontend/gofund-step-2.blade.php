@extends('Layouts.gofung-interface')
@section('content')
              
                <section class="contact-crv">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="box-shadow to-up">
                                    <form  method="post" action="{{ route('gofundstep-3') }}" enctype="multipart/form-data">
                                            @csrf
                                        <div class="messages"></div>
                
                                        <div class="controls row">
                                            
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What name would you like to give you fund?</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="name_of_fund" placeholder="SOS Medical" required="required">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What is your initial goal amount to raise?</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="amount_goal" placeholder="10.000.000 GNF" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Who are you collecting funds for?</h6>
                                                </div>
                                                <div class="form-group mb-30">
                
                                                    <input type="radio" class="btn-check " value="Yourself" name="fund_for" id="option8" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option8">Yourself</label>
                                                    <input type="radio" class="btn-check " value="Someone Else" name="fund_for" id="option10" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option10">Someone Else</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Where would you like to receive funds to?</h6>
                                                </div>
                                                <div class="form-group mb-30">
                
                                                    <input type="radio" class="btn-check mobile-money" name="fund_recive" value="Orange Money" id="option12" autocomplete="off" onchange="mobilemoneybox()">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option12">Orange Money</label>
                                                    <input  type="radio" class="btn-check bank-account" name="fund_recive" value="Bank" id="option13" autocomplete="off" onchange="banktransferbox()">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option13">Bank</label>
                
                                                    <input id="form_name" class="mobile-money-input" type="text" name="phone_no" placeholder="Enter Phone Number Here" >
                                                    <input id="form_name" class="bank-account-input" type="text" name="bank" placeholder="Enter Full Bank Account Here" >
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