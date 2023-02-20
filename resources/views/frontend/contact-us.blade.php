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
    <title>Contact Us</title>

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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet"href="frontend/assets/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet"href="frontend/assets/css/style.css" />

</head>

<body class="index-bus1">
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







    <!-- ==================== Start Slider ==================== -->

    <header class="pg-header-sipm gr-purple-light-bg valign">
        <div class="container mt-60">
            <div class="row justify-content-center">
                <div class="col-lg-9 ">
                    <div class="caption text-center">
                        <span class="fz-14 mb-10 text-u ls4 text-main-color">Let's get in touch with us !</span>
                        <h1 class="fz-50 fw-600 text-main-color">Contact Us </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <main class="position-re">


        <!-- ==================== Start Blog ==================== -->

        
                <div id="particles-js" ></div>

                <section class="contact-crv">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="box-shadow to-up">
                                    <form id="contact-form" method="post" action="https://www.smartinnovates.com/uithemez/item/ravo01/contact.php" novalidate="true">

                                        <div class="messages"></div>

                                        <div class="controls row">
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Full Name</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="name" placeholder="Jhon Doe" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Phone Number</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="name" placeholder="+224 628 68 62 34" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Email</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="email" name="name" placeholder="example@gmail.com" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Subject</h6>
                                                </div>
                                                <div class="form-group mb-30 has-error has-danger">
                                                    <input id="form_name" type="text" name="name" placeholder="Want to start fundraising" required="required">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-30">
                                                    <h6 class="fw-400">Briefly describe about the details of your reason.</h6>
                                                </div>
                                                <div class="form-group has-error has-danger mb-30">
                                                    <textarea id="form_message" name="message" placeholder="Please describe the details here.." rows="4" required="required"></textarea>
                                                </div>
                                            </div>
                                        </div>   

                                            <div class="col-lg-12">
                                            
                                            

                                            <div class="col-12 text-center pt-30">
                                                <a href="confirmation.html" class="butn butn-md bg-dark-brown text-light radius-30">
                                                    <span class="text slide-up">Send</span>
                                                    <span class="text slide-down">Send</span>
                                                </a>
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



    <!-- jQuery -->
    <script src="frontend/assets/js/jquery-3.6.0.min.js"></script>
    <script src="frontend/assets/js/jquery-migrate-3.4.0.min.js"></script>

    <!-- plugins -->
    <script src="frontend/assets/js/plugins.js"></script>

    <!-- particles -->
    <script src="frontend/assets/js/particles.min.js"></script>
    <script src="frontend/assets/js/stars.js"></script>

    <!-- custom scripts -->
    <script src="assets/js/scripts.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
    });
    </script>

    

</body>


</html>