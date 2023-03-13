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
                                            <h4 class="card-title" id="horz-layout-colored-controls">Basic Details</h4>
                                          </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="text-bold-500 primary"><a class="color-light-black"> Fundraiser Code:</a></span>
                                                                <span class="display-block overflow-hidden">MFTX000001</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="primary text-bold-500"><a class="color-light-black">Fundraiser Name:</a></span>
                                                                <span class="line-height-2 display-block overflow-hidden">SOS Medical</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <ul class="no-list-style">
                                                            <li class="mb-2">
                                                                <span class="primary text-bold-500"><a class="color-light-black">Date</a></span>
                                                                <span class="line-height-2 display-block overflow-hidden">12-01-2023</span>
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

              <section id="horizontal-form-layouts">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title-wrap bar-warning">
                          <h4 class="card-title" id="horz-layout-colored-controls">Communications</h4>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="px-3">

                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
              </section>

@endsection