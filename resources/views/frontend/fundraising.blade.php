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
    <title>Mouliya - Fundraising</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/assets/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="frontend/assets/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="frontend/assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="frontend/assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
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

    

</head>

<body class="land-demo2">



   <div class="se-pre-con"></div>

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



    

    <!-- ==================== Start Skills ==================== -->

    <section class="process-simp section-padding position-re pb-40 shad-up mt-50">

        <div class="simple-head md-mb10 mb-80 text-center">
            
            <h2 class="fz-40 fw-800 text-main-color inline">Fundraisers in your community</h2>

            <div class="fixed-search-1">
                <div class="search-area search-on">
                    
                    <div class="search-form mt-30">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" name="search" placeholder="Search for specific fundraising compaign">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
        
    </section>
    
    <section class="blog-grid section-padding zero-top-padding pb-80">
            <div class="container">
                <div class="row">
                <div class="col-12">
                    <div class="mb-20">
                        <div class="flex no-flex">
                            <div class="m-title valign">
                                <div>
                                    <div class="form-group mb-30 ">
                                            
                                            <select class="form-select" >
                                              <option selected>Filter by number of items</option>
                                              <option value="1">12</option>
                                              <option value="1">18</option>
                                              <option value="1">24</option>
                                              <option value="1">30</option>
                                              <option value="1">39</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="s-title valign ml-auto">
                                <div class="form-group mb-30 ">
                                            
                                            <select class="form-select " >
                                              <option selected>Filter by country</option>
                                              <option value="1">Guinea</option>
                                              <option value="2">Ivory Coast</option>
                                              <option value="3">Mali</option>
                                              <option value="2">Sierra Leone</option>
                                              <option value="3">Senegal</option>
                                            </select>
                                        </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b1.jpg" alt="">

                                <div class="tags">
                                    <a href="fundraising-details.html" class="gat">9 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="fundraising-details.html">ways to quickly increase traffic to your website</a></h5>
                                    
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b2.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                    
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b3.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b4.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">12 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b5.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b6.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b1.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">9 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b2.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b3.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b4.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">12 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b5.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="item box-shadow crv mb-30">
                            <div class="img">
                                <img src="assets/img/blog/b/b6.jpg" alt="">

                                <div class="tags">
                                    <a href="#" class="gat">6 donations</a>
                                    <a href="fundraising-details.html" class="tag text-white">
                                        12.000.000 GNF
                                    </a>
                                </div>
                            </div>
                            <div class="cont">
                                <div class="title mb-10">
                                    <h5><a href="#">ways to quickly increase traffic to your website</a></h5>
                                   
                                    <p class="mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                                <div class="skills-box full-width">
                                    <div class="skill-item">
                                        <h4 class="text-u ls3  mb-10">MTFX000001</h4>

                                        <h6 class="text-u ls3 fz-13">Goal Acheived : 85 %</h6>
                                        <div class="skill-progress">
                                            <div class="progres gr-green-light-bg" data-value="85%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-12 text-center pt-10">
                        <a href="#" class="butn butn-md btn-secondary text-light radius-30 mobile-contribute-button">
                            <span class="text slide-up">Load more..</span>
                            <span class="text slide-down">Load more..</span>
                        </a>
                    </div>
                </div>

            </div>
        </section>



   <!-- ==================== Start Footer ==================== -->

    <footer class="main-footer bg-dark-blue bg-img" data-background="assets/img/background/8.jpg" data-overlay-dark="0" style="background-image: url(&quot;assets/img/background/8.jpg&quot;);">

            <div class="cal pb-80 pt-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="cont">
                                <h6 class="sub-title gr-green-text">Stay Connected</h6>
                                <h4 class="fz-50">Ready to get started?</h4>
                                <p class="mt-5 fw-300 fz-20">Join thousands of others today.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex justify-content-end">
                            <div>
                                <a href="gofund.html" class="butn butn-md butn-rounded butn-light mt-30">
                                    <span class="text">Start a GoFundMe</span>
                                </a>
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
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
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
                                    <a href="#">    How GoFundMe Works</a>
                                </li>
                                <li class="mb-10">
                                    <a href="#">Why GoFundMe</a>
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
                                    <a href="#">GoFundMe Stories</a>
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
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>


</body>

</html>