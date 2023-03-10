@extends('Layouts.gofung-interface')

@section('content')
<header class="pg-header-sipm gr-purple-light-bg valign " style="padding-bottom: 10px !important;">
    <div class="container mt-60">
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="caption text-center">
                    <span class="fz-14 mb-10 text-u ls4 text-main-color">YOU HAVE SUCCESFULLY STARTED A FUND RAISER</span>
                    <span class="fz-14 mb-10 text-u ls4 text-main-color underline"><a href="{{ route('userlogin') }}" class="share-text">Login</a> to your account to manage all your fundraising activities.</span>
                    <span class="fz-14 mb-10 text-u ls4 text-main-color underline">PLEASE <a href="share.html" class="share-text">SHARE</a>  THE INFORMATION BELOW TO YOURS PEERS SO THEY
                    CAN EASILY </span>
                    

                </div>
            </div>
        </div>
    </div>
</header>
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