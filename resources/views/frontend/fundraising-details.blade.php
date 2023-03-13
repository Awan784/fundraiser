@extends('Layouts.gofundDetail-interface')
@section('content')

        <section class="section-padding left-menu-mobile-nopadding mt-50 mt-50-mobile-no">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="main-post md-mb50">
                            <div class="item pb-60">
                                <div class="cont text-center">
                                    <div class="title">
                                        <h3 class="fw-800">{{ $fetchFund->fund_name }}</h3>
                                    </div>
                                    <div class="info flex mt-15 justify-content-center">
                                        <div class="author mr-30 opacity-8 fz-14">
                                            <span>{{ $fetchFund->name }}</span>
                                        </div>
                                        <div class="tags mr-30 opacity-8 fz-14">
                                            <a href="blog-grid-clean.html" class="gat">{{ $fetchFund->why_fundraising }}</a>
                                        </div>
                                        <div class="date mr-30 opacity-8 fz-14">
                                            <span>{{ $fetchFund->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="date fz-14">
                                            <span><a href="report.html" class="reportpost"> Report</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-img mt-40 mb-40 radius-5">
                                    <img src="{!! asset( $fetchFund->banner_image) !!}" >
                                </div>
                                <div class="text mb-20">
                                    <p>{{ $fetchFund->l_description  }}</p>
                                </div>
                                <div class="text">
                                    <p>However, Apple might not include it in the Air series when it launches it. As for
                                        the notebook’s release date, the 15-inch MacBook isn’t coming soon. It’ll get a
                                        late 2023 release at best, according to the new claims.</p>
                                </div>
                                
                                <button href="#" class="butn butn-md bg-dark-brown text-light radius-30 mt-30 mobile-contribute-button">
                                    <span class="text slide-up">Contribute</span>
                                    <span class="text slide-down">Contribute</span>
                                </button>
                                

                                <div class="mb-50 mt-50">
                                    <div class="row">
                                        @foreach ( $images as $image) 
                                            
                                        <div class="col-6 mt-50">
                                            <div class="iner-img">
                                                <img src="{!! asset( $image) !!}" >
                                            </div>
                                        </div>
                                        @endforeach
                                     
                                    </div>
                                </div>

                            </div>
                            

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="side-bar">
                            <section class="pt-130 no-pt130-on-mobile">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <div class="skills-box full-width">
                                                <div class="skill-item">
                                                    <h4 class="text-u ls3  mb-10">{{ $fetchFund->reference_id }}</h4>
                                                    <h6 class="text-u ls3 fz-13">Goal Amount : {{ $fetchFund->goal_amount }}  GNF</h6>

                                                    <h6 class="text-u ls3 fz-13">Goal Acheived :  0 GNF</h6>
                                                    <div class="skill-progress">
                                                        <div class="progres gr-green-light-bg" data-value="90%"></div>
                                                    </div>
                                                    <div class="flex mt-20">
                                                        <h2 class="fw-200">85 <span class="fz-30">%</span></h2>
                                                        <p>Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justoe.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button class="butn butn-md bg-dark-brown text-light radius-30 mt-30">
                                                <span class="text slide-up">Contribute</span>
                                                <span class="text slide-down">Contribute</span>
                                            </button>
                                        </div>
                                        <div class="col-6">
                                            <a href="more-details.html" class="butn butn-md gr-green-light-bg text-light radius-30 mt-30">
                                                <span class="text slide-up">More Details</span>
                                                <span class="text slide-down">More Details</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="share.html" class="butn butn-md btn-bg-yellow text-light radius-30 mt-10 btn-share" >
                                                <span class="text slide-up">Share fundraiser</span>
                                                <span class="text slide-down">Share fundraiser</span>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="withdrawals.html" class="butn butn-md gr-light-green-bg text-light radius-30 mt-10">
                                                <span class="text slide-up">Withdrawals</span>
                                                <span class="text slide-down">Withdrawals</span>
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                                

                            </section>

                            <div class="comments-post">
                                <div class="container">
                                    
                                    <div class="row">
                                        <div class="col-12 ">
                                            <div class="text mt-30">
                                                <h4>Fundraiser Messages</h4>
                                            </div>
                                            <div class="item-box">
                                                <div class="flex mb-20">
                                                    
                                                    <div class="cont">
                                                        <h6>Update about progression 1</h6>
                                                        <span class="fz-13 mb-15 opacity-8">14 sept 2021, 07:00 AM</span>
                                                        <p>Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget
                                                            urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-20">
                                                    
                                                    <div class="cont">
                                                        <h6>Update about progression 2</h6>
                                                        <span class="fz-13 mb-15 opacity-8">14 sept 2021, 07:00 AM</span>
                                                        <p>Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget
                                                            urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-20">
                                                    
                                                    <div class="cont">
                                                        <h6>Update about progression 3</h6>
                                                        <span class="fz-13 mb-15 opacity-8">14 sept 2021, 07:00 AM</span>
                                                        <p>Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget
                                                            urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-20">
                                                    
                                                    <div class="cont">
                                                        <h6>Update about progression 4</h6>
                                                        <span class="fz-13 mb-15 opacity-8">14 sept 2021, 07:00 AM</span>
                                                        <p>Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget
                                                            urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                                    </div>
                                                </div>
                                                <div class="flex mb-20">
                                                    
                                                    <div class="cont">
                                                        <h6>Update about progression 5</h6>
                                                        <span class="fz-13 mb-15 opacity-8">14 sept 2021, 07:00 AM</span>
                                                        <p>Ut elementum turpis lorem, id vulputate risus consequat vitae. Morbi eget
                                                            urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>
            </div>

            

        </section>
        <div class="recent-posts recent-post-bottom-padding">
                <div class="blog-grid">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center mb-60">
                                    <h4>Recent Posts</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($FundRaising as $fund)
                                
                            <div class="col-lg-4">
                                <div class="item box-shadow crv mb-30">
                                    <div class="img">
                                        <img src="{{asset( $fund->banner_image) }}" alt="" style="height: 250px">

                                        <div class="tags">
                                            <a href="{{ route('fetchFund' , $fund->id) }}" class="gat">6 donations</a>
                                            <a href="{{ route('fetchFund' , $fund->id) }}" class="tag text-white">
                                                {{ $fund->goal_amount }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cont">
                                        
                                        <div class="title">
                                            <h5><a href="{{ route('fetchFund' , $fund->id) }}">{{ $fund->s_description }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        <!-- ==================== End Blog ==================== -->


    <!-- ==================== Start Footer ==================== -->


    <footer class="main-footer bg-dark-blue bg-img" data-background="/assets/img/background/8.jpg" data-overlay-dark="0" style="background-image: url(&quot;assets/img/background/8.jpg&quot;);">

        <div class="cal pb-80 pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-end d-block d-sm-none">
                        <div>
                            <img src="assets/img/orange-money.png" class="orange-money-img mb-30">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="cont">
                            <h6 class="sub-title gr-green-text">Safety first</h6>
                            <h4 class="fz-50">Ready to make a payment?</h4>
                            <p class="mt-5 fw-300 fz-20">Use our partner service Orange Money for safe et secure payment.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end d-none d-sm-block">
                        <div>
                            <img src="{{ asset('/frontend/assets/img/orange-money.png') }}" class="orange-money-img mb-30">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="container pt-80 pb-80">
            <div class="row">
                <div class="col-lg-4">
                    <div class="clumn">
                        <div class="logo mb-30">
                            <a href="http://demo.octasolutions.pk/mouliya/admin/demo-2/login-page.html">
                                <img src="assets/img/logowebsite1.png" alt="">
                            </a>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum is a pseudo-Latin text used in web design, typography, <br> layout, and printing in place of English.</p>
                        </div>
                        <div class="social circle-bord mt-30">
                            <ul class="rest horizontal-link">
                                <li>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="contact-us.html"><i class="fa fa-envelope"></i></a>
                                    <a href="http://mftx.com/"><i class="fa fa-globe"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="col-lg-3">
                    <div class="clumn">
                        <h5 class="title fz-20 mb-30">Learn More</h5>
                        <ul class="address">
                            <li class="mb-10">
                                <a href="#">    How Fundraiser Works</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Why Fundraiser</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Common questions</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Success stories</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Supported countries</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Charity fundraising</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clumn">
                        <h5 class="title fz-20 mb-30">Resources</h5>
                        <ul class="rc-post">
                            <li class="mb-10">
                                <a href="#">Help center</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Blog</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Fundraiser Stories</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Press center</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">Careers</a>
                            </li>
                            <li class="mb-10">
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                   
                    <div class="clumn">
                        <section class="contact-crv ">
                        <form id="contact-form" method="post" action="#" novalidate="true">
                                <div class="col-lg-12">
                                    <p class="notice mt-20 mb-10 ">Country</p>
                                    <div class=" ">
                                                    
                                        <select class="selectpicker country-list">
                                          <option value="1">  🇬🇳 &nbsp; Guinea</option>
                                          <option value="2">🇨🇮 &nbsp; Ivory Coast</option>
                                          <option value="3"> 🇲🇱 &nbsp; Mali</option>
                                          <option value="2">🇸🇱 &nbsp; Sierra Leone</option>
                                          <option value="3">🇸🇳 &nbsp; Senegal</option>
                                        </select>
                                         
                                    </div>

                                </div>
                                <div class="col-lg-12">
                                    <p class="notice mt-20 mb-10">Language</p>

                                    <div class="">
                                                    
                                        <select class="form-control country-list">
                                          <option value="1">🇫🇷 &nbsp; French</option>
                                          <option value="2">🇬🇧 &nbsp; English</option>
                                        </select>
                                    </div>
                                </div>
                        </form>
                        </section>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer pt-0 pb-50 no-bord">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="horizontal-link fz-13">
                            <ul class="rest">
                                <li class="mr-30">
                                    <a href="terms.html">Terms</a>
                                </li>
                                <li class="mr-30">
                                    <a href="privacy.html">Privacy</a>
                                </li>
                                <li class="mr-30">
                                    <a href="legal.html">Legal</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyrights d-flex justify-content-end">
                            <p class="fz-13">© 2022 Mouliya is Proudly Designed by <span class="underline"><a href="mailto:faizansaeed6089@gmail.com" target="_blank" class="gr-green-text">Faizan Saeed</a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ==================== End Footer ==================== -->

@endsection