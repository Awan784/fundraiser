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

                                    @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                    
                                    <form  id="formOne" method="post" action="{{  route('submit-step-one')  }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="messages"></div>

                                        <div class="controls row">
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What country are you in?</h6>
                                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                                </div>
                                                <div class="form-group mb-30 ">
                                                    
                                                     <select class="form-select form-control"  name="country">
                                                      <option selected disabled>Select your country</option>
                                                      <option value="Guinea">Guinea</option>
                                                      <option value="Ivory Coast">Ivory Coast</option>
                                                      <option value="Mali">Mali</option>
                                                      <option value="Sierra Leone">Sierra Leone</option>
                                                      <option value="Senegal">Senegal</option>
                                                    </select>
                                                    @error('country')
                                                    <p class="text-sm text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What name would you like to give you fund?</h6>
                                                    <!-- <p class="notice">We use your location to determine your currency.</p> -->
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="name" value="{{ old('name') }}" placeholder="SOS Medical">
                                                    @error('name')
                                                        
                                                    <p class="text-sm text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Where are you located?</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" value="{{ old('location') }}" type="text" name="location" placeholder="Enter your complete address">
                                                @error('location')
                                                <p class="text-sm text-danger">{{ $message }}</p>
                                                @enderror
                                                </div>
                                            </div> --}}
                                             
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">What best describes why you're fundraising?</h6>
                                                </div>
                                                <div class="form-group mb-30">

                                                    <input type="radio" class="btn-check" value="Business" name="why_fundraising" id="option2" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option2">Business</label>
                                                    <input type="radio" class="btn-check" value="Community" name="why_fundraising" id="option6" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option6">Community</label>
                                                    <input type="radio" class="btn-check" value="Events" name="why_fundraising" id="option7" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option7">Events</label>
                                                    <input type="radio" class="btn-check" value="Medical" name="why_fundraising" id="option9" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option9">Medical</label>

                                                    <input type="radio" class="btn-check " value="Education" name="why_fundraising" id="option31" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option31">Education</label>
                                                    <input type="radio" class="btn-check" value="Emergencies" name="why_fundraising" id="option32" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option32">Emergencies</label>
                                                    <input type="radio" class="btn-check" value="Funeral & Memorial" name="why_fundraising" id="option33" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option33">Funeral & Memorial</label>
                                                    <input type="radio" class="btn-check" value="Travel" name="why_fundraising" id="option34" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option34">Travel</label>
                                                    <input type="radio" class="btn-check "  value="Competition" name="why_fundraising" id="option36" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option36">Competition</label>
                                                    <input type="radio" class="btn-check "  value="NGO"  name="why_fundraising" id="option37" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option37">NGO</label>
                                                    <input type="radio" class="btn-check " value="Religion" name="why_fundraising" id="option38" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option38">Religion</label>
                                                    <input type="radio" class="btn-check" value="Others" name="why_fundraising" id="option35" autocomplete="off">
                                                    <label class="btn btn-secondary mb-20 radio-button-custom" for="option35">Others</label>
                                                    @error('why_fundraising')
                                                        
                                                    <p class="text-sm text-danger">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>   

                                            <div class="col-lg-12">
                                            
                                            

                                            <div class="col-12 text-center pt-30">
                                                <button  type="submit" class="btn btn-md bg-success text-light radius-30">
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