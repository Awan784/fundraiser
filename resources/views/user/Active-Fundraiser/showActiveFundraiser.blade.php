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
                                    <div class="card-title">Active Fundraiser Details</div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="text-bold-500 primary"><a class="color-light-black"> Fundraiser Code:</a></span>
                                                    <span class="display-block overflow-hidden">{{ $showActive->registration_id }}</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-bold-500 primary"><a class="color-light-black">Fund Name:</a></span>
                                                    <span class="display-block overflow-hidden">SOS Medical</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-bold-500 primary"><a class="color-light-black">Country:</a></span>
                                                    <span class="display-block overflow-hidden">{{ $showActive->country }} </span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="text-bold-500 primary"><a class="color-light-black">Date:</a></span>
                                                    <a class="display-block overflow-hidden">{{ $showActive->created_at->diffForHumans() }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Objective</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">GNF 10 000 000</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">% of Objective</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">30%</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Total Commission</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">GNF 10 000 000</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Funds Transfered</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">GNF 0</span>
                                                </li>
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Sponsered</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">Active</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                            <ul class="no-list-style">
                                                <li class="mb-2">
                                                    <span class="primary text-bold-500"><a class="color-light-black">Total Raised</a></span>
                                                    <span class="line-height-2 display-block overflow-hidden">GNF 3 000 000</span>
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
                                                    <span class="line-height-2 display-block overflow-hidden">628686234</span>
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
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Fundraiser Transactions list</h4>
                        
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table  zero-configuration table-responsive12">
                            <thead>
                                <tr> 
                                  <th class="border-top-0">#</th>                          
                                  <th class="border-top-0">Fund Code</th>
                                  <th class="border-top-0">Name</th>
                                  <th class="border-top-0">Date</th>
                                  <th class="border-top-0">Country</th>
                                  <th class="border-top-0">Raised</th>
                            </thead>
                            <tbody>
                                <tr>
                                  <td class="text-truncate">
                                     1
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000001
                                  </td>
                                  <td class="text-truncate">
                                      Faizan Saeed
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">
                                      Guinea
                                  </td>
                                  
                                  <td class="text-truncate">1 00 000 GNF</td>
                                  
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     2
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000002
                                  </td>
                                  <td class="text-truncate">
                                      Faizan Saeed
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">
                                      Guinea
                                  </td>
                                  
                                  <td class="text-truncate">1 00 000 GNF</td>
                                  
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     3
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000003
                                  </td>
                                  <td class="text-truncate">
                                      Faizan Saeed
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">
                                      Guinea
                                  </td>
                                  
                                  <td class="text-truncate">1 00 000 GNF</td>
                                  
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     4
                                  </td>
                                  <td class="text-truncate">
                                      MFTX000004
                                  </td>
                                  <td class="text-truncate">
                                      Faizan Saeed
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">
                                      Guinea
                                  </td>
                                  
                                  <td class="text-truncate">1 00 000 GNF</td>
                                  
                              </tr>

                                
                            </tbody>
                           
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection