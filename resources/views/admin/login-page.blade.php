<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin Login</title>
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
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/app-assets/css/app.css')}}">
  </head>
  <body data-col="1-column" class=" 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper"><!--Login Page Starts-->

<section id="login">

    <div class="container-fluid">
        <div class="row full-height-vh" >

            <div class="col-12 d-flex align-items-center justify-content-center yellow-bg" >
                <div id="particles-js"></div>
                
                <div class="card py-2 box-shadow-2 width-400" style="position:relative;">
                    <div class="card-header text-center">
                        <a href="http://demo.octasolutions.pk/mouliya/v2/"><img src="../admin/app-assets/img/logo.png" alt="company-logo" class="mb-3" width="80"></a> 
                        <h4 class="text-uppercase text-bold-400 color-black">Let's get started</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <form action="{{ route('AdminDashboard') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control form-control-lg" name="email" id="inputEmail" placeholder="Email Address" required email>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-lg" name="password" id="inputPass" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-3">
                                                <input type="checkbox" class="custom-control-input" checked id="rememberme">
                                                <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="text-center col-md-12">
                                        <button type="submit" class="btn btn_black btn-block px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Login</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
                

    </div>
</section>

<!--Login Page Ends-->
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('/admin/app-assets/vendors/js/core/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/core/popper.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/prism.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/screenfull.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/vendors/js/pace/pace.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/js/particles.min.js')}}"></script>
    <script src="{{asset('/admin/app-assets/js/stars.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{asset('admin/app-assets/js/app-sidebar.js')}}""></script>
    <script src="{{asset('admin/app-assets/js/notification-sidebar.js')}}""></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
  </body>

</html>