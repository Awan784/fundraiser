@extends('Layouts.UserDashboard-Interface')
@section('content')              
              <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title">Closed Fundraisers list</h4>
                                    
                                </div>
                            </div>
                            <div class="card-body collapse show">
                                <div class="card-block card-dashboard">
                                    <table class="table  zero-configuration table-responsive">
                                        <thead>
                                            <tr> 
                                              <th class="border-top-0">#</th>                          
                                              <th class="border-top-0">Fund Code</th>
                                              <th class="border-top-0">Name</th>
                                              <th class="border-top-0">Date</th>
                                              <th class="border-top-0">Country</th>
                                              <th class="border-top-0">Raised</th>
                                              <th class="border-top-0">Retrieved</th>
                                              <th class="border-top-0">Sponsered</th>
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
                                                  Guinea
                                              </td>
                                              
                                              <td class="text-truncate">3 000 000 GNF</td>
                                              <td class="text-truncate">2 000 000 GNF</td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">Active</button>
                                                </td>
                                              <td>
                                        <a href="view-user-closed-fundraiser.html" class="color-black p-0" data-original-title="" title="View">
                                            <i class="fa fa-eye font-medium-3 mr-2"></i>
                                        </a>
                                        <a href="edit-user-closed-fundraiser.html" class="color-black p-0" data-original-title="" title="Edit">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                        </a>
                                        <a class="color-black p-0" data-original-title="" title="Activate" data-toggle="modal" data-target="#default1">
                                            <i class="fa fa-power-off font-medium-3 mr-2"></i>
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

@endsection