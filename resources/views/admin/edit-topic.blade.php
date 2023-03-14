<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - Edit Feature Topic</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/app-assets/img/favicon.ico')}}" />
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/app.css')}}">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
   
    <div class="wrapper">
      @include('Layouts.admin-SideBar');
      @include('Layouts.Navbar');
      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
              
              <section id="horizontal-form-layouts">
  <div class="row">
    <div class="col-sm-12">
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="card-title-wrap bar-warning">
            <h4 class="card-title" id="horz-layout-colored-controls">Edit Feature Topic</h4>
          </div>
          <p class="mb-0 mt-2">You can edit the feature topics details here.</p>
        </div>
        <div class="card-body">
          <div class="px-3">

            <form class="form" action="{{route('update-topic')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="row justify-content-md-center">
                <input type="hidden" name="id" value="{{$topic->id}}">
                <div class="col-md-6">
                  <div class="form-body">

                    <div class="form-group">
                      <label for="eventInput2">Title</label>
                      <input type="text" id="eventInput2" class="form-control" name="title" value="{{$topic->title}}">
                    </div>

                    <div class="form-group">
                      <label for="eventInput5">Description</label>
                      <textarea id="donationinput7" rows="7" class="form-control square" name="description" >{{$topic->description}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="eventInput5">Topic Image</label>
                      <input type="file" id="eventInput2" class="form-control" name="topic_image">

                    </div>

                    <div class="form-group">
                      <label>Show on home page</label>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="status" @if($topic->status==1)checked="" @endif class="custom-control-input" value="1">
                        <label class="custom-control-label" for="customRadioInline1">Yes</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" @if($topic->status==0)checked="" @endif name="status" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customRadioInline2">No</label>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="form-actions center">
                
                <button type="submit"  class="btn btn-success">
                  Save
                </button>
              </div>
            </form>

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