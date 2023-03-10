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
    <title>Start GoFundMe</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/frontend/assets/favicons/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/frontend/assets/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/frontend/assets/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/frontend/assets/favicons/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('/frontend/assets/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/frontend/assets/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet"href="{{asset('/frontend/assets/css/plugins.css')  }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet"href="{{ asset('/frontend/assets/css/style.css') }}" />

</head>

<body class="index-bus1">
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

    @include('Layouts.balck-navbar')

    <!-- ==================== End Navbar ==================== -->







    <!-- ==================== Start Slider ==================== -->


    <!-- ==================== End Slider ==================== -->



    <main class="position-re">


        <!-- ==================== Start Blog ==================== -->

        
                <div id="particles-js" ></div>

              
                @yield('content')
            

           

        <!-- ==================== End Blog ==================== -->




    </main>



@yield('scripts')
<script src="{{ asset('/frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/frontend/assets/js/jquery-migrate-3.4.0.min.js') }}"></script>

<!-- plugins -->
<script src="{{ asset('/frontend/assets/js/plugins.js') }}"></script>

<!-- particles -->
<script src="{{ asset('/frontend/assets/js/particles.min.js') }}"></script>
<script src="{{ asset('/frontend/assets/js/stars.js') }}"></script>

<!-- custom scripts -->
<script src="/frontend/assets/js/scripts.js"></script>
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