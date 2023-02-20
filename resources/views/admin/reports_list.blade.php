<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - Reports List</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../app-assets/img/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/datatable/datatables.min.css">

    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
      <div class="modal fade " id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel1">Are you sure?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
              <p>You won't be able to revert this!</p>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn_yellow">Yes, Delete it.</button>
              <button type="button" class="btn btn_black" data-dismiss="modal">Cancel</button>

              </div>
            </div>
          </div>
        </div>
        <div class="modal fade " id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel1">Are you sure?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
              <p>Do you want to Mark this Resolved!</p>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn_yellow">Yes, Resolve it.</button>
              <button type="button" class="btn btn_black" data-dismiss="modal">Cancel</button>

              </div>
            </div>
          </div>
        </div>
    <div class="wrapper">


      <div data-active-color="black" data-background-color="white" data-image="" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="../app-assets/img/logo.png" alt="Convex Logo"/></div><span class="text align-middle">Mouliya</span></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="nav-item"><a href="index.html"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
              </li>
              
              <li class=" nav-item"><a href="active-fundraiser.html"><i class="icon-book-open"></i><span data-i18n="" class="menu-title">Active Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="closed-fundraiser.html"><i class="icon-notebook"></i><span data-i18n="" class="menu-title">Closed Fundraisers</span></a>
              </li>
              <li class=" nav-item"><a href="feature-topics-list.html"><i class="icon-layers"></i><span data-i18n="" class="menu-title">Feature Topics</span></a>
              </li>
              <li class=" nav-item"><a href="commissions.html"><i class="icon-wallet"></i><span data-i18n="" class="menu-title">Commissions</span></a>
              </li>
              <li class=" nav-item"><a href="withdrawals.html"><i class="icon-paper-plane"></i><span data-i18n="" class="menu-title">Withdrawals</span></a>
              </li>
              <li class=" nav-item"><a href="website-messages.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Contact Us</span></a>
              </li>
               
              <li class="active nav-item"><a href="reports_list.html"><i class="icon-support"></i><span data-i18n="" class="menu-title">Reports</span></a>
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
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-faded ">
        <div class="container-fluid">
          <div class="navbar-header">
            <div class="logo "><a href="index.html" class="logo-text d-lg-none float-left">
              <div class="logo-img"><img class="mobile-logo" src="../app-assets/img/logo.png" alt="Convex Logo"/></div></a></div>
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-right"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"></span>
          </span>
              <h6 class="welcome-admin">Welcome <span class="gr-green-text"> Mouctar Yali Bah </span></h6>
            
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
              
              <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title">Website Reports list</h4>
                                </div>
                            </div>
                            <div class="card-body collapse show">
                                <div class="card-block card-dashboard">
                                    <table class="table  zero-configuration table-responsive12">
                                        <thead>
                                            <tr>                           
                                              <th class="border-top-0">#</th>
                                              <th class="border-top-0">Date</th>

                                              <th class="border-top-0">Name</th>
                                              <th class="border-top-0">Telephone</th>
                                              <th class="border-top-0">Email</th>
                                              <th class="border-top-0">Status</th>
                                              <th class="border-top-0">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td class="text-truncate">
                                                  1
                                              </td>
                                              <td class="text-truncate">
                                                  07/01/2022
                                              </td>
                                              <td class="text-truncate">
                                                  Faizan
                                              </td>
                                              <td class="text-truncate">
                                                  092 123 456 7892
                                              </td>
                                              <td class="text-truncate">
                                                  Faizan@example.com
                                              </td>
                                              
                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">New</button>
                                                </td>
                                              <td>
                                                    <a href="view-report-details.html" class="color-black p-0" data-original-title="" title="View">
                                                        <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a href="" class="color-black p-0" data-original-title="" title="Mark it Resolved" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-check font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-red p-0" data-original-title="" title="Delete" data-toggle="modal" data-target="#default">
                                                        <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                    </a>
                              
                                                </td>
                                          </tr>
                                        </tbody>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>


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
    <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../app-assets/vendors/js/prism.min.js"></script>
    <script src="../app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="../app-assets/vendors/js/screenfull.min.js"></script>
    <script src="../app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/js/datatable/datatables.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="../app-assets/js/app-sidebar.js"></script>
    <script src="../app-assets/js/notification-sidebar.js"></script>
    <script src="../app-assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/data-tables/datatable-basic.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>