@extends('Layouts.UserDashboard-Interface')
@section('content')
              
              <section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Communications</h4>
                        <a href="new-messages.html" class="btn  btn-add btn-round btn-min-width add-button-mobile mb-2 btn-outline-bitbucket">
                        <span class="fa fa-plus"></span> New Communication</a>
                    </div>
                </div>
                <div class="card-body collapse show">
                    <div class="card-block card-dashboard">
                        <table class="table  zero-configuration table-responsive12">
                            <thead>
                                <tr> 
                                  <th class="border-top-0">#</th>                          
                                  <th class="border-top-0">Date</th>
                                  <th class="border-top-0">Fundraiser Code</th>
                                  <th class="border-top-0">Fundraiser Name</th>

                                  <th class="border-top-0">Title</th>
                                  <th class="border-top-0">Action</th>
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
                                  <td class="text-truncate">MFTX000001</td>

                                  <td class="text-truncate"> SOS Medical</td>

                                  <td class="text-truncate"> Thanks Users</td>
                                  <td>
                                        <a href="view-message.html" class="color-black p-0" data-original-title="" title="View">
                                            <i class="fa fa-eye font-medium-3 mr-2"></i>
                                        </a>
                                        <a href="edit-message.html" class="color-black p-0" data-original-title="" title="Edit">
                                            <i class="fa fa-pencil font-medium-3 mr-2"></i>
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