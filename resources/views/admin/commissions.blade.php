<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - Commissions</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../app-assets/img/favicon.ico" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/css/app.css')}}">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
   
    <div class="wrapper">


      @include('Layouts.admin-SideBar');
     @include('Layouts.Navbar');
      

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
                        <h4 class="card-title">Commissions</h4>
                        
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table  zero-configuration table-responsive12">
                            <thead>
                                <tr> 
                                  <th class="border-top-0">#</th>                          
                                  <th class="border-top-0">Fundraiser Code</th>
                                  <th class="border-top-0">Total Raised</th>
                                  <th class="border-top-0">Total Commissions</th>
                                  <th class="border-top-0">Total User Retrieved</th>
                                  <th class="border-top-0">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td class="text-truncate">
                                     1
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000001
                                  </td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td>
                                        <a href="view-commissions.html" class="color-yellow p-0" data-original-title="" title="View">
                                            <i class="fa fa-eye font-medium-3 mr-2"></i>
                                        </a>
                                    </td>
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     2
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000002
                                  </td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td>
                                        <a href="view-commissions.html" class="color-yellow p-0" data-original-title="" title="View">
                                            <i class="fa fa-eye font-medium-3 mr-2"></i>
                                        </a>
                                    </td>
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     3
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000003
                                  </td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td>
                                        <a href="view-commissions.html" class="color-yellow p-0" data-original-title="" title="View">
                                            <i class="fa fa-eye font-medium-3 mr-2"></i>
                                        </a>
                                    </td>
                              </tr>
                            </tbody>
                            <tfoot>
                                <tr>                                
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0">2 341 200 GNF</th>
                                  <th class="border-top-0">2 341 200 GNF</th>
                                  <th class="border-top-0">2 341 200 GNF</th>
                                  <th class="border-top-0"></th>
                              </tr>
                            </tfoot>
                            
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