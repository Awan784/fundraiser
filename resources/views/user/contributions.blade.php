@extends('Layouts.UserDashboard-Interface')
@section('content')
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Your Contribution’s List</h4>
                        
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
                                  <th class="border-top-0">Time</th>
                                  <th class="border-top-0">Amount</th>
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
                                  <td class="text-truncate">
                                      SOS Medical
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">
                                      2:05 PM
                                  </td>
                                  
                                  <td class="text-truncate">3 000 000 GNF</td>
                                  <td>
                                      <a href="#" class="color-black p-0" data-original-title="" title="View">
                                          <i class="fa fa-eye font-medium-3 mr-2"></i>
                                      </a>
                                  </td>

                                 
                              </tr>

                                
                            </tbody>
                            <tfoot>
                                <tr>                                
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0">GNF 234120000</th>
                              </tr>
                            </tfoot>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

@endsection