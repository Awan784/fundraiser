@extends('Layouts.gofung-interface')
@section('content')

<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-11">
                <div class="logo">
                </div>
                <div class="box-shadow to-up text-center " style="padding-top: 10px;" >
                    <img src="assets/img/logowebsite1.png" alt=""  style="width: 100px;" class="pb-4">


                    <p>YOUR FUNDRAISER REFERENCE IS </p> 
                    <h5 class="mb-10">{{ $formInfo->reference_id }}</h5>
                    <p>YOUR FUNDRAISER NAME IS</p> 
                    <h5 class="mb-10">{{ $formInfo->fund_name }}</h5>
                    
                    <p>FUNDS WILL BE TRANSFERRED UPDON YOUR REQUEST TO</p> 
                    <h5 class="mb-10">{{  $formInfo->phone_no }} {{$formInfo->bank_id  }}</h5>
                    <p>THIS FUND IS PRIVATE. ACCESS CODE FOR DETAILS</p> 
                    <h5 class="mb-10">{{ $formInfo->code }}</h5>
                    <p>Your Fundraiser is accessible on website below</p>
                    <h5 class="mb-10"><a href="index.html">www.mouliya.com</a></h5>

                    <p>Download the Mouliya App for live tracking of fundraisers</p> 

                    <div class="download-button mt-15">
                    <a href="#0" class="butn butn-lg butn-rounded down-butn bg-white mr-5">
                        <span>Apple Store</span>
                        <span class="icon ml-10"><i class="fab fa-apple"></i></span>
                    </a>
                    <a href="#0" class="butn butn-lg butn-rounded down-butn bord-white">
                        <span>Google play</span>
                        <span class="icon ml-10"><i class="fab fa-google-play"></i></span>
                    </a>
                </div>

                </div>
            </div>
        </div>
    </div>


</section>
@endsection