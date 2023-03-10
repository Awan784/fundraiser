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
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/vendors/css/chartist.min.css ')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/app-assets/css/app.css') }}">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('Layouts.user-navbar')
    <div class="wrapper">
        @include('Layouts.user-sidebar')
        <div class="main-panel">
            <div class="main-content">
              <div class="content-wrapper">
                <div class="container-fluid">

 
             @yield('content')

    </div>
    @include('Layouts.user-footer')
</div>
</div>
</div>
</div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('/user/app-assets/vendors/js/core/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ '/user/app-assets/vendors/js/core/popper.min.js' }}"></script>
    <script src="{{ asset('/user/app-assets/vendors/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/user/app-assets/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('/user/app-assets/vendors/js/prism.min.js') }}"></script>
    <script src="{{ asset('/user/app-assets/vendors/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('/user/app-assets/vendors/js/screenfull.min.js') }}"></script>
    <script src="{{ '/user/app-assets/vendors/js/pace/pace.min.js' }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('/user/app-assets/vendors/js/chartist.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{ asset('/user/app-assets/js/app-sidebar.js') }}"></script>
    <script src="{{ asset('/user/app-assets/js/notification-sidebar.js') }}"></script>
    <script src="..{{ asset('/user/app-assets/js/customizer.js') }}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('/user/app-assets/js/dashboard-ecommerce.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>