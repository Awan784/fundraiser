<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - View Active Fundraiser</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../app-assets/img/favicon.ico" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/app-assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin/app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/admin/app-assets/css/app.css') }}">
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
    <div class="wrapper">
        @include('Layouts.admin-SideBar');
        @include('Layouts.Navbar')
      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
              
              <section id="user-area">
    <div class="row">
        <div class="col-xl-3 col-lg-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title-wrap bar-primary">
                        <div class="card-title">Basic Information</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        
                        <div class="row">
                            <div class="col-12 ">
                                <ul class="no-list-style pl-0">
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a class="color-light-black"> Fundraiser Code:</a></span>
                                        <span class="display-block overflow-hidden">{{$fundraiser->code}}</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a class="color-light-black">Fund Name:</a></span>
                                        <span class="display-block overflow-hidden">{{$fundraiser->fund_name}}</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a class="color-light-black">Country:</a></span>
                                        <span class="display-block overflow-hidden">{{$fundraiser->country}} </span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="text-bold-500 primary"><a class="color-light-black">Date:</a></span>
                                        <a class="display-block overflow-hidden">{{$fundraiser->created_at}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-12">
            <!--About div starts-->
            <div id="about">
                <div class="row">
                   
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-warning">
                                    <div class="card-title">Additional Information</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Objective</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">{{$fundraiser->bank_id}}</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">% of Objective</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">NA</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Total Commission</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">NA</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Funds Transfered</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">{{$fundraiser->why_fundraising}}</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Sponsered</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">@if( $fundraiser->staus==1)Active @else Deactive @endif</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Total Raised</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">{{$fundraiser->goal_amount}}</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">% of Objective</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">30%</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Commission on rate</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">10%</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Receiver Number/Bank</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">{{$fundraiser->bank_id}}</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Total Retrieved</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">GNF 980000</span>
                                                </li>

                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--About div ends-->
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