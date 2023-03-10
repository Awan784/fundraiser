@extends('Layouts.UserDashboard-Interface')
@section('content')

              <section id="user-area">
                <div class="row">
                    
                    <div class="col-12">
                        <!--About div starts-->
                        <div id="about">
                            <div class="row">
                               
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                          <div class="card-title-wrap bar-warning">
                                            <h4 class="card-title" id="horz-layout-colored-controls">Personal Details</h4>
                                          </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="text-bold-500 primary"><a class="color-light-black"> Username:</a></span>
                                                                <span class="display-block overflow-hidden">{{ auth()->user()->full_name }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="primary text-bold-500"><a class="color-light-black">Phone No</a></span>
                                                                <span class="line-height-2 display-block overflow-hidden">{{ auth()->user()->phone }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="primary text-bold-500"><a class="color-light-black">Country</a></span>
                                                                <span class="line-height-2 display-block overflow-hidden">Guinea</span>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div> --}}
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

              <section id="horizontal-form-layouts">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title-wrap bar-warning">
                          <h4 class="card-title" id="horz-layout-colored-controls">Change Password</h4>
                        </div>
                        <p class="mb-0 mt-2">You can change the user password here.</p>
                      </div>
                      <div class="card-body">
                        <div class="px-3">

                          <form class="form" action="{{ route('user.change-password') }}" method="post" enctype="multipart/form-data">
                           @csrf
                            <div class="row justify-content-md-center">
                              <div class="col-md-6">
                                <div class="form-body">

                                  <div class="form-group">
                                    <label for="eventInput2">Old Password</label>
                                    <input type="password" id="eventInput2"  class="form-control" name="current_password">
                                    @error('current_password')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="eventInput2">New Password</label>
                                    <input type="password" id="eventInput2" class="form-control" name="new_password">
                                    @error('new_password')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                    <label for="eventInput2">Password</label>
                                    <input type="password" id="Confimr New Password" class="form-control" name="confirm_new_password">
                                    @error('confirm_new_password')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                  </div>

                                  


                                </div>
                              </div>
                            </div>

                            <div class="form-actions center">
                              <button type="submit" class="btn btn-success">  Save</button>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
              </section>

@endsection