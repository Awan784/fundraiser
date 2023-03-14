<!DOCTYPE html>
<html lang="en" class="loading">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Mouliya Admin - Users</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../app-assets/img/favicon.ico" />
    
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
              <p>Do you want to block this user!</p>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn_yellow">Yes, Block it.</button>
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
              
              <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title">Users list</h4>
                                    <a href="add-user.html" class="btn  btn-add btn-round btn-min-width add-button-mobile mb-2 btn-outline-bitbucket">
                                    <span class="fa fa-plus"></span> Add User</a>
                                </div>
                            </div>
                            <div class="card-body collapse show">
                                <div class="card-block card-dashboard">
                                    <table class="table  zero-configuration table-responsive12">
                                        <thead>
                                            <tr>                           
                                              <th class="border-top-0">#</th>
                                              <th class="border-top-0">Full Name</th>
                                              <th class="border-top-0">Email</th>
                                              <th class="border-top-0">Telephone</th>
                                              <th class="border-top-0">Date</th>
                                              <th class="border-top-0">Added By</th>
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
                                                  Faizan Saeed
                                              </td>
                                              <td class="text-truncate">
                                                  faizansaeed@example.com
                                              </td>
                                              <td class="text-truncate">+224 628 68 62 34</td>

                                              <td class="text-truncate">
                                                  07/01/2022
                                              </td>
                                              <td class="text-truncate">
                                                  Admin
                                              </td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">Active</button>
                                                </td>
                                              <td>
                                                    
                                                    <a href="edit-user.html" class="color-black p-0" data-original-title="" title="Edit">
                                                        <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-black p-0" data-original-title="" title="Block" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-flag font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-red p-0" data-original-title="" title="Delete" data-toggle="modal" data-target="#default">
                                                        <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                    </a>
                                                    
                              
                                                </td>
                                          </tr>
                                          <tr>
                                              <td class="text-truncate">
                                                  1
                                              </td>
                                              <td class="text-truncate">
                                                  Rizwan Ahmad 
                                              </td>
                                              <td class="text-truncate">
                                                  razi@example.com
                                              </td>
                                              <td class="text-truncate">+224 628 68 62 34</td>

                                              <td class="text-truncate">
                                                  07/01/2022
                                              </td>
                                              <td class="text-truncate">
                                                  Admin
                                              </td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Blocked</button>
                                                </td>
                                              <td>
                                                    
                                                    <a href="edit-user.html" class="color-black p-0" data-original-title="" title="Edit">
                                                        <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-black p-0" data-original-title="" title="Block" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-flag font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-red p-0" data-original-title="" title="Delete" data-toggle="modal" data-target="#default">
                                                        <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                    </a>
                                                    
                              
                                                </td>
                                          </tr>
                                          <tr>
                                              <td class="text-truncate">
                                                  3
                                              </td>
                                              <td class="text-truncate">
                                                  Faizan Saeed
                                              </td>
                                              <td class="text-truncate">
                                                  faizansaeed@example.com
                                              </td>
                                              <td class="text-truncate">+224 628 68 62 34</td>

                                              <td class="text-truncate">
                                                  07/01/2022
                                              </td>
                                              <td class="text-truncate">
                                                  Website Registered
                                              </td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">Active</button>
                                                </td>
                                              <td>
                                                    
                                                    <a href="edit-user.html" class="color-black p-0" data-original-title="" title="Edit">
                                                        <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-black p-0" data-original-title="" title="Block" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-flag font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-red p-0" data-original-title="" title="Delete" data-toggle="modal" data-target="#default">
                                                        <i class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                    </a>
                                                    
                              
                                                </td>
                                          </tr>
                                          <tr>
                                              <td class="text-truncate">
                                                  4
                                              </td>
                                              <td class="text-truncate">
                                                  Rizwan Ahmad 
                                              </td>
                                              <td class="text-truncate">
                                                  razi@example.com
                                              </td>
                                              <td class="text-truncate">+224 628 68 62 34</td>
                                              
                                              <td class="text-truncate">
                                                  07/01/2022
                                              </td>
                                              <td class="text-truncate">
                                                  Admin
                                              </td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-danger round">Blocked</button>
                                                </td>
                                              <td>
                                                    
                                                    <a href="edit-user.html" class="color-black p-0" data-original-title="" title="Edit">
                                                        <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-black p-0" data-original-title="" title="Block" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-flag font-medium-3 mr-2"></i>
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
    <script src="{{asset('admin/app-assets/vendors/js/core/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/core/popper.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/core/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/prism.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/screenfull.min.js')}}"></script>
    <script src="{{asset('admin/app-assets/vendors/js/pace/pace.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('admin/app-assets/vendors/js/datatable/datatables.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{asset('admin/app-assets/js/app-sidebar.js')}}"></script>
    <script src="{{asset('admin/app-assets/js/notification-sidebar.js')}}"></script>
    <script src="{{asset('admin/app-assets/js/customizer.js')}}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('admin/app-assets/js/data-tables/datatable-basic.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>