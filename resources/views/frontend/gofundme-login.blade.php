@extends('Layouts.gofung-interface')
@section('content')
<header class="pg-header-sipm gr-purple-light-bg valign">
    <div class="container mt-60">
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="caption text-center">
                    <span class="fz-14 mb-10 text-u ls4 text-main-color">SIGN IN TO SAVE AND CONTINUE</span>
                    <h1 class="fz-50 fw-600 text-main-color">Your account details</h1>
                </div>
            </div>
        </div>
     
    </div>
</header>
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="p-3">
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            </div>
            @endif
            @error('email')
            <div class="alert alert-danger">
                {{ $message }}
            </div>  
            @enderror 
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('fund_login') }}" enctype="multipart/form-data">
                      @csrf
                        <div class="messages"></div>

                        <div class="controls row">

                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_email" type="email" name="email" placeholder="Email Address" >
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-30 has-error has-danger">
                                    <input id="form_name" type="password" name="password" placeholder="Password" >
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-12 text-center pt-30">
                                <button type="submit" class="btn btn-md bg-success text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    
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