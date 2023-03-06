@extends('Layouts.gofung-interface')
@section('content')
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                            <div class="col-lg-12">
                <div class="main-post main-post1 md-mb50">
                    <div class="item pb-60">
                        <div class="info-area flex mt-20 pb-20">
                        <div>
                            <div class="tags flex">
                                
                                <div>
                                    <a href="#">{{ $preview->name }}</a>
                                    <a href="#">{{ $preview->why_fundraising }}</a>
                                    <a href="#">{{ $preview->country }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <div class="share-icon flex">
                                <div class="valign">
                                    <time>  {{ $preview->created_at->diffForHumans() }}    </time>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="main-img mt-40 mb-40 radius-5">
                            <img src="{!! asset( $preview->banner_image) !!}" alt="">
                        </div>
                        <div class="text mb-20">
                            <p>{{  $preview->l_description }}</p>
                        </div>
                        

                        <div class="mt-50">
                            <h6 class="fz-20">
                                <div>
                                    <div>Total Goal Amount : GNF {{ $preview->goal_amount }}</div>

                                </div>
                            </h6>
                        </div>

                        <div class="mb-50 mt-50">
                            <div class="row">
                                @foreach ( $images as $image) 
                                    
                                <div class="col-6 mt-50">
                                    <div class="iner-img">
                                        <img src="{!! asset( $image) !!}" alt="">
                                    </div>
                                </div>
                                @endforeach
                             
                            </div>
                        </div>

                        
                    </div>
                    
                </div>
            </div>  

                            <div class="col-lg-12">
                            
                            <div class="col-12 text-center pt-30">
                                <a href="{{ route('gofundstep-5') }}" class="butn butn-md bg-dark-brown text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    <span class="text slide-down">Continue</span>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

   
</section>
@endsection
