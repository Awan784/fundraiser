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
                                                    <input id="form_name" type="text" name="name_of_fund" placeholder="SOS Medical">
                                                    @error('name_of_fund')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What is your initial goal amount to raise?</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="amount_goal" placeholder="10.000.000 GNF" required="required">
                                                    @error('amount_goal')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
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
                                                    <div>
                                                        <input type="radio" class="btn-check mobile-money" name="payment_method" id="option12" value="bank_transfer" required >
                                                        <label class="btn btn-secondary mb-20 radio-button-custom"  for="option12">Bank Transfer</label> 
                                                        <input type="radio" name="payment_method" value="phone_payment"  id="option13" class="btn-check mobile-money" required> 
                                                        <label class="btn btn-secondary mb-20 radio-button-custom"  for="option13">Orange Transfer</label> 
                                                    </div>
                                                     <div id="phone_div"> 
                                                    <input id="form_name" class="mobile-money-input" type="number" id="phone_number" name="phone_no" placeholder="Enter Phone Number Here" >
                                                    </div>
                                                    <div id="bank_div">
                                                    <input id="form_name" class="bank-account-input" type="number" id="bank_id" name="bank_id" placeholder="Enter Full Bank Account Here" >
                                                    </div>
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
    $(document).ready(function() {
        $('#bank_div').hide();
        $('#phone_div').hide();
        $('input[type=radio][name=payment_method]').change(function() {
            if (this.value == 'bank_transfer') {
                $('#bank_div').show();
                $('#phone_div').hide();
                $('#bank_id').attr('required', 'required');
                $('#phone_number').removeAttr('required');
            }
            else if (this.value == 'phone_payment') {
                $('#phone_div').show();
                $('#bank_div').hide();
                $('#phone_number').attr('required', 'required');
                $('#bank_id').removeAttr('required');
            }
        });
    });
</script>

@endsection