@extends('Layouts.UserDashboard-Interface')
@section('content')
              
              <section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Withdrawals</h4>
                        <a href="{{ route('User-NewWithdrawals') }}" class="btn  btn-add btn-round btn-min-width add-button-mobile  mb-2 btn-outline-bitbucket">
                        <span class="fa fa-plus"></span> New Withdrawals</a>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table  zero-configuration table-responsive12">
                            <thead>
                                <tr> 
                                  <th class="border-top-0">#</th>                          
                                  <th class="border-top-0">Date</th>
                                  <th class="border-top-0">Time</th>

                                  <th class="border-top-0">Retrieval Number</th>
                                  <th class="border-top-0">Amount</th>
                                  <th class="border-top-0">Status</th>
                                  <th class="border-top-0">Remaining Funds</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td class="text-truncate">
                                     1
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">11:49 AM</td>
                                  <td class="text-truncate"> R000001</td>
                                  <td class="text-truncate">2 000 000 GNF</td>
                                  <td class="text-truncate"><button type="button" class="btn btn-sm btn-outline-warning round">Active</button></td>
                                  <td>2 000 000 GNF
                                    </td>
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     2
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">11:49 AM</td>

                                  <td class="text-truncate"> R000002</td>
                                  <td class="text-truncate">2 000 000 GNF</td>
                                  <td class="text-truncate"><button type="button" class="btn btn-sm btn-outline-warning round">Active</button></td>
                                  <td>2 000 000 GNF
                                    </td>
                              </tr>
                              <tr>
                                  <td class="text-truncate">
                                     3
                                  </td>
                                  <td class="text-truncate">
                                      07/01/2022
                                  </td>
                                  <td class="text-truncate">11:49 AM</td>

                                  <td class="text-truncate"> R000003</td>
                                  <td class="text-truncate">2 000 000 GNF</td>
                                  <td class="text-truncate"><button type="button" class="btn btn-sm btn-outline-warning round">Active</button></td>
                                  <td>2 000 000 GNF
                                    </td>
                              </tr>
                            </tbody>
                            <tfoot>
                                <tr>                                
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0">2 341 200 GNF</th>
                                  <th class="border-top-0"></th>
                                  <th class="border-top-0"></th>
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

