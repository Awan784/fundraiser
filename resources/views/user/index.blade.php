<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya User - Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../user/app-assets/img/favicon.ico" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="../user/app-assets/css/app.css">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="../user/app-assets/img/logo.png" alt="Convex Logo"/></div><span class="text align-middle">Mouliya</span></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="active nav-item"><a href="index.html"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
              </li>
              
              <li class=" nav-item"><a href="active-user-fundraiser.html"><i class="icon-book-open"></i><span data-i18n="" class="menu-title">Active Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="closed-user-fundraiser.html"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">Closed Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="messages.html"><i class="icon-speech"></i><span data-i18n="" class="menu-title">Communications</span></a>
              </li>
              <li class=" nav-item"><a href="user-contact-us.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Contact Us</span></a>
              </li>
              <li class=" nav-item"><a href="withdrawals.html"><i class="icon-paper-plane"></i><span data-i18n="" class="menu-title">Withdrawals</span></a>
              </li>
              <li class=" nav-item"><a href="profile.html"><i class="icon-users"></i><span data-i18n="" class="menu-title">Profile</span></a>
              </li>
              <li class=" nav-item d-lg-none"><a href="login-page.html"><i class="icon-power"></i><span data-i18n="" class="menu-title">Sign Out</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-faded ">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="logo "><a href="index.html" class="logo-text d-lg-none float-left">
              <div class="logo-img"><img class="mobile-logo" src="../app-assets/img/logo.png" alt="Convex Logo"/></div></a></div>
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-right"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"></span>
          </span>
              <h6 class="welcome-admin">Welcome <span class="gr-green-text"> Mouctar Yali Bah</span></h6>
            
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <a href="login-page.html" class="logout-color"><i class="icon-power mr-2"></i><span>Logout</span></a>

            </div>
          </div>
        </div>
      </nav>

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Active <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">10</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Closed <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">2</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">12</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Amount Raised  <br> Today</span>
                            <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Amount Raised <br> This Month</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Amount  <br> Raised</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Personnal <br> Contributions</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Amount <br> withdrawn</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Amount<br> Remaining</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
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

        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2022 <a href="" id="pixPRentLink" target="_blank" class="text-bold-800 primary darken-2 gr-green-text footer-mouliya">Mouliya </a>, All rights reserved. </span></p>
        </footer>

      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    
    <!-- BEGIN VENDOR JS-->
    <script src="../user/app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../user/app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../user/app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="../user/app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../user/app-assets/vendors/js/prism.min.js"></script>
    <script src="../user/app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="../user/app-assets/vendors/js/screenfull.min.js"></script>
    <script src="../user/app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../user/app-assets/vendors/js/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="../user/app-assets/js/app-sidebar.js"></script>
    <script src="../user/app-assets/js/notification-sidebar.js"></script>
    <script src="../user/app-assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../user/app-assets/js/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>