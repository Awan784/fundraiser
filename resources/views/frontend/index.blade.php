<!DOCTYPE html>
<html lang="zxx">


<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Mouliya - Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/assets/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="frontend/assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="frontend/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,800,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet"href="frontend/assets/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet"href="frontend/assets/css/style.css" />
    
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet" crossorigin="anonymous">

</head>

<body class="land-demo2">



    <div class="se-pre-con d-none d-sm-block">
        <div style="text-align: center !important;">   
            <p class="d-none d-sm-block" style="position: fixed; bottom: 65px; width:100%; font-size: 15px; text-align: center">from</p>
            <img src="{{ asset('frontend/assets/img/mftx-new.jpg') }}" class="d-none d-sm-block" style="position: fixed; width:80px; position: fixed;
            top: 92%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, 0%);
            -ms-transform: translate(-50%, 0%);
            -webkit-transform: translate(-50%, 0%);
            -moz-transform: translate(-50%, 0%);
            -o-transform: translate(-50%, 0%);">
        </div> 
       </div>
    <div class="se-pre-con1 d-block d-sm-none">
        <div style="text-align: center !important;">   
            <p class="d-block d-sm-none" style="position: fixed; bottom: 55px; width:100%; font-size: 15px; text-align: center">from</p>
            <img src="{{ asset('frontend/assets/img/mftx-new.jpg') }}" class="d-block d-sm-none " style="  width:80px; 
             position: fixed;
            top: 92.5%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, 0%);
            -ms-transform: translate(-50%, 0%);
            -webkit-transform: translate(-50%, 0%);
            -moz-transform: translate(-50%, 0%);
            -o-transform: translate(-50%, 0%);">
        </div> 
       </div>

   <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->

    <!-- ==================== Start Navbar ==================== -->

  @include('Layouts.frontend-navbar')

    <!-- ==================== End Navbar ==================== -->

    <div class="fixed-search">
        <div class="search-area">
            <div class="search-icon cursor-pointer">
                <span class="pe-7s-search serch-icon"></span>
                <span class="pe-7s-close close-icon"></span>
            </div>
            <div class="search-form">
                <form action="#">
                    <div class="form-group">
                        <input type="text" name="search" placeholder="Search for a Fundraiser">
                        <button type="submit"><span class="pe-7s-search"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <!-- ==================== Start Slider ==================== -->

    <header class="full-height rshp valign hide-xsmall">
        <div class="front bg-img" data-background="frontend/assets/img/slider/d322.png">
        </div>
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="cont">
                        <div class="sub-head radius green-light-bg mb-10">
                            <span>Amazing Fundraising Services</span>
                        </div>

                        <h1 class="fw-800 fz-45 text-main-color mt-10">Home for all  <br>your Fundraising needs. </h1>
                        <p class="mt-10">MOULIYA Welcomes your to it’s wonderful world of fundraising. With millions of great ideas only waiting to be funded, MOULIYA is the right place for you. Explore, create and reap benefits of easy and secure online fundraising.</p>

                        <div class="mt-40 flex">
                            <div>
                                <a href="{{ route('fundraising') }}" class="butn butn-md bg-dark-brown text-light radius-30">
                                    <span class="text slide-up home-btn-bold">Contribute to a Fund</span>
                                    <span class="text slide-down home-btn-bold">Contribute to a Fund</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="particles-js" ></div>

            </div>
        </div>
    </header>



    <header class="slider slider-prlx o-hidden d-block d-sm-none">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="frontend/assets/img/slider/home-bg-2.jpg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption text-center mt-30">
                                    <h6 class="sub-title fw-400 fz-12 radius-30">Amazing Fundraising Services</h6>

                                        <h1 class="fw-800" data-splitting>Home for all your Fundraising needs.</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <p class="fz-16">MOULIYA Welcomes your to it’s wonderful world of fundraising. With millions of great ideas only waiting to be funded, MOULIYA is the right place for you. Explore, create and reap benefits of easy and secure online fundraising.</p>
                                            </div>

                                        </div>
                                        <div class="mt-30">
                                            <a href="{{  route('fundraiser') }}" class="butn butn-md green-dark-bg text-light radius-30">
                                                <span class="text slide-up home-btn-bold">Start a Fundraiser</span>
                                                <span class="text slide-down home-btn-bold">Start a Fundraiser</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="frontend/assets/img/slider/slide2.jpeg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption text-center mt-30">
                                    <h6 class="sub-title fw-400 fz-12 radius-30">Mouliya Fundraising Services</h6>

                                        <h1 class="fw-800" data-splitting>Home for all your Fundraising needs.</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <p class="fz-16">MOULIYA Welcomes your to it’s wonderful world of fundraising. With millions of great ideas only waiting to be funded, MOULIYA is the right place for you. Explore, create and reap benefits of easy and secure online fundraising.</p>
                                            </div>

                                        </div>
                                        <div class="mt-30">
                                            <a href="{{  route('fundraiser') }}" class="butn butn-md green-dark-bg text-light radius-30">
                                                <span class="text slide-up home-btn-bold">Start a Fundraiser</span>
                                                <span class="text slide-down home-btn-bold">Start a Fundraiser</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="frontend/assets/img/slider/slide3.jpeg" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption text-center mt-30">
                                    <h6 class="sub-title fw-400 fz-12 radius-30">Africa Fundraising Services</h6>

                                        <h1 class="fw-800" data-splitting>Home for all your Fundraising needs.</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-10">
                                                <p class="fz-16">MOULIYA Welcomes your to it’s wonderful world of fundraising. With millions of great ideas only waiting to be funded, MOULIYA is the right place for you. Explore, create and reap benefits of easy and secure online fundraising.</p>
                                            </div>

                                        </div>
                                        <div class="mt-30">
                                            <a href="{{  route('fundraiser') }}" class="butn butn-md green-dark-bg text-light radius-30">
                                                <span class="text slide-up home-btn-bold">Start a Fundraiser</span>
                                                <span class="text slide-down home-btn-bold">Start a Fundraiser</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

           

            
        </div>

        <div class="curve-buttom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none" height="100">
                <path d="M 0 0 L0 100 L100 100 L100 0 Q 50 200 0 0" fill="#fff"></path>
            </svg>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->




    


    <!-- ==================== Start Process ==================== -->

    <section class="process-simp section-padding position-re pb-40 shad-up">



        <div class="simple-head md-mb10 mb-80 text-center">
            <div>
                <h6 class="sub-head radius green-light-bg mb-20">
                    <span class="fz-12 ls2 text-u ">What to expect</span>
                </h6>
            </div>
            <h2 class="fz-40 fw-800 text-main-color inline">Fundraising on GoFundMe takes <br> just a few minutes</h2>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item md-mb50">
                        <div class="step mb-30">
                            <div class="numb green-dark-bg">1</div>
                            <span class="icon pe-7s-mouse bg-gray green-light-bg"></span>
                        </div>
                        <h6 class="mb-10 fw-700">Start with the basics</h6>
                        <p>Tell us your name and location.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item md-mb50">
                        <div class="step mb-30">
                            <div class="numb green-dark-bg">2</div>
                            <span class="icon pe-7s-rocket bg-gray green-light-bg"></span>
                        </div>
                        <h6 class="mb-10 fw-700">Tell your story</h6>
                        <p>We'll guide you with tips along the way.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="step mb-30">
                            <div class="numb green-dark-bg">3</div>
                            <span class="icon pe-7s-like2 bg-gray green-light-bg"></span>
                        </div>
                        <h6 class="mb-10 fw-700">Share with friends and family</h6>
                        <p>People out there want to help you.</p>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ==================== End Process ==================== -->

    <!-- ==================== Start Skills ==================== -->

    <section class="process-simp section-padding position-re pb-40 shad-up">

        <div class="simple-head md-mb10 mb-80 text-center">
            <div>
                <h6 class="sub-head radius green-light-bg mb-20">
                    <span class="fz-12 ls2 text-u ">Happening near you</span>
                </h6>
            </div>
            <h2 class="fz-40 fw-800 text-main-color inline">Fundraisers in your community</h2>
        </div>

        
    </section>
    <section class="blog-grid blog-grid1 section-padding zero-top-padding ">
            <div class="container">

                <div class="row">
                    @foreach ($FundRaising as  $fund)
                        
                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img" >
                                <img src="{!! asset( $fund->banner_image) !!}" alt="" style="height: 273px" >


                                <div class="tags">
                                    <a href="{{ route('fetchFund' , $fund->id) }}" class="gat">0 donations</a>
                                    <a href="{{ route('fetchFund' , $fund->id) }}" class="tag text-white">
                                        {{ $fund->goal_amount }}
                                    </a>
                                </div>

                            </div>
                            <div class="cont">
                                <div class="info1">
                                    <div class="author">
                                        <span>{{ $fund->why_fundraising }}</span>
                                    </div>
                                    <div class="date">
                                        <span>{{ $fund->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                                <div class="title mb-10">
                                    <h5 class="mb-10"><a href="{{ route('fetchFund' , $fund->id) }}">  {{ $fund->fund_name }} </a></h5>
                                    <p class="mb-10 text-truncate">{{  $fund->s_description }}</p>
                                </div>

                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 0 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="0%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

      
                    <div class="col-12 text-center pt-10">
                        <a href="fundraising.html" class="butn butn-md btn-secondary text-light radius-30 mobile-contribute-button">
                            <span class="text slide-up">Load more..</span>
                            <span class="text slide-down">Load more..</span>
                        </a>
                    </div>

                    

                </div>

            </div>
        </section>

    <!-- ==================== End Skills ==================== -->

     


    <section class="sec-half position-re ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="content">
                            <span class="sub-title fade-in-right">Trust & Safety</span>
                            <h3 class="mb-20 fz-45 fw-700 main-color">We have your back.</h3>
                            <p class="para-font">With one-quarter of our global team dedicated to trust and safety, we’ve successfully managed fundraisers worldwide for more than a decade. Don’t worry about a thing, we’ve got you covered.</p>

                            <div class="accordion mt-50">

                                <a href="#0" class="butn butn-md bg-light radius-30">
                                <span class="text text-dark slide-up">Explore Trust & Safety</span>
                                <span class="text text-dark slide-down">Explore Trust & Safety</span>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <!-- ==================== Start Process ==================== -->

    <section class="process-simp section-padding position-re pb-40 shad-up">

        <div class="simple-head md-mb10 mb-80 text-center">
            <div>
                <h6 class="sub-head radius green-light-bg mb-20">
                    <span class="fz-12 ls2 text-u ">Where you can help</span>
                </h6>
            </div>
            <h2 class="fz-40 fw-800 text-main-color inline">Featured topics</h2>
        </div>

        
    </section>
    <section class="blog-grid section-padding zero-top-padding">
            <div class="container">

                <div class="row">
                    @foreach($topics as $topic)
                    <div class="col-lg-4">
                        <div class="item box-shadow mb-30 feature-item">
                            <div class="img">
                                @php 
                                $imageUrl = asset('topicImages/' . $topic->topic_image);
                                
                                @endphp
                                <img src="{{ $imageUrl }}" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">Trending</a>
                                </div>
                            </div>
                            <div class="cont">
                                
                                <div class="title">
                                    <h5><a href="#">{{$topic->title}}</a></h5>
                                </div>
                                <a href="feature-topic-details.html" class="butn butn-inline butn-gr mt-20 opacity-9">
                                    <span class="text">Continue Reading</span>
                                    <span class="underline-gr aqua-bg"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </section>

    <!-- ==================== End Process ==================== -->

    

    <section class="mobile-app-section pb-90" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 offset-lg-1">
                        <div class="img hf-circle md-mb50">
                            <img src="frontend/assets/img/1.png" alt="" class="app-image-mobile">
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 valign">
                        <div class="content">
                            <div class="cont pb-80">
                                <div class="fz-12 ls2 text-u mb-10">
                                    <span class="text-main-color">Download Mouliya App</span>
                                </div>
                                <h2 class="mb-20 fw-500 text-main-color">We available on store download now.</h2>
                                <p>Morbi sagittis hendrt nulla ultricies. Cras en diam ips elementum pretium hendrerit
                                    ultricies.</p>

                                <div class="download-button mt-40">
                                    <a href="#0" class="butn butn-lg butn-rounded down-butn bg-white mr-5">
                                        <span class="slide-up">Apple Store</span>
                                        <span class="icon ml-10 slide-up"><i class="fab fa-apple"></i></span>
                                        <span class="slide-down">Apple Store <i class="fab fa-apple ml-10"></i> </span>
                                    </a>
                                    <a href="#0" class="butn butn-lg butn-rounded down-butn bord-white">
                                        <span class="slide-up">Google play</span>
                                        <span class="icon ml-10 slide-up"><i class="fab fa-google-play"></i></span>
                                        <span class="slide-down">Google play <i class="fab fa-google-play ml-10"></i> </span>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="circle-blur"></div>
            
        </section>



  

@include('Layouts.frontend-footer')




   <!-- jQuery -->
   <script src="frontend/assets/js/jquery-3.6.0.min.js"></script>

   <script src="frontend/assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="frontend/assets/js/plugins.js"></script>

    <!-- particles -->
    <script src="frontend/assets/js/particles.min.js"></script>
    <script src="frontend/assets/js/stars.js"></script>

    <!-- custom scripts -->
    <script src="frontend/assets/js/scripts.js"></script>

    <script type="text/javascript">
        $(window).load(function() {
        // Animate loader off screen
        window.setTimeout(function(){ 
            $('.se-pre-con').attr('style', 'display: none !important');
            }, 500);
            window.setTimeout(function(){ 
            $('.se-pre-con1').attr('style', 'display: none !important');
            }, 500);
    });
    </script>

    

</body>

</html>