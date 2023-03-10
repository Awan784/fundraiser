<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../admin/app-assets/img/favicon.ico" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/app-assets/css/app.css">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      {{-- <div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="../admin/app-assets/img/logo.png" alt="Convex Logo"/></div><span class="text align-middle">Mouliya</span></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="active nav-item"><a href="{{route('AdminDashboard')}}"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
              </li>
              
              <li class=" nav-item"><a href="{{route('active-fundraiser')}}"><i class="icon-book-open"></i><span data-i18n="" class="menu-title">Active Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="{{route('close-fundraiserlose')}}"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">Closed Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="{{route(';')}}"><i class="icon-layers"></i><span data-i18n="" class="menu-title">Feature Topics</span></a>
              </li>
              <li class=" nav-item"><a href="commissions.html"><i class="icon-wallet"></i><span data-i18n="" class="menu-title">Commissions</span></a>
              </li>
              <li class=" nav-item"><a href="withdrawals.html"><i class="icon-paper-plane"></i><span data-i18n="" class="menu-title">Withdrawals</span></a>
              </li>
              <li class=" nav-item"><a href="website-messages.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Contact Us</span></a>
              </li>
              <!-- <li class=" nav-item"><a href="#"><i class="icon-pie-chart"></i><span data-i18n="" class="menu-title">Statistics</span></a>
              </li> -->
              <li class=" nav-item"><a href="reports_list.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Reports</span></a>
              </li>
              <li class=" nav-item"><a href="users.html"><i class="icon-users"></i><span data-i18n="" class="menu-title">Users</span></a>
              </li>
              
              
              
             <!--  <li class=" nav-item d-lg-none"><a href="#"><i class="icon-user"></i><span data-i18n="" class="menu-title">Profile</span></a>
              </li> -->
              <li class=" nav-item d-lg-none"><a href="login-page.html"><i class="icon-power"></i><span data-i18n="" class="menu-title">Sign Out</span></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div> --}}
      @include('Layouts.admin-SideBar');
@include('Layouts.Navbar')

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
              <div class="row">
                
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Commissions <br> Today</span>
                            <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >General Total <br> Commissions</span>
                            <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Commissions <br> Retrieved</span>
                            <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-wallet text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Remaining <br> Commissions</span>
                            <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Amount Funded <br> Today</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Amount <br> Funded</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Amount <br> Retrieved</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Remaining <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >New Fundraisers<br> Today</span>
                            <h3 class="text-white mt-2 card-money">10</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-yellow dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >New Fundraisers<br>This Month</span>
                            <h3 class="text-white mt-2 card-money">100</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-black dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total Active <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">300</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-12">
                  <div class="card gradient-green dashboard-item">
                    <div class="card-body">
                      <div class="px-3 py-3">
                        <div class="media">
                          <div class="align-center">
                            <i class="icon-book-open text-white font-large-2 float-left"></i>
                          </div>
                          <div class="media-body text-white text-right">
                            <span >Total <br> Fundraisers</span>
                            <h3 class="text-white mt-2 card-money">200</h3>
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
    <script src="../admin/app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../admin/app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../admin/app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="../admin/app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../admin/app-assets/vendors/js/prism.min.js"></script>
    <script src="../admin/app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="../admin/app-assets/vendors/js/screenfull.min.js"></script>
    <script src="../admin/app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../admin/app-assets/vendors/js/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="../admin/app-assets/js/app-sidebar.js"></script>
    <script src="../admin/app-assets/js/notification-sidebar.js"></script>
    <script src="../admin/app-assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../admin/app-assets/js/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>