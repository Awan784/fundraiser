@extends('Layouts.UserDashboard-Interface')
@section('content')

 <!--Statistics cards Starts-->
              @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
              <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title">Active Fundraisers list</h4>
                                    
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
                                        @php
                                          $id = 0;
                                        @endphp
                                        <tbody>
                                          @foreach ($Active_fundrasier as $active)
                                            
                                          @php
                                          $id++;
                                      @endphp
                                            <tr>
                                              <td class="text-truncate">
                                                {{ $id }}
                                              </td>
                                              <td class="text-truncate">
                                                 {{ $active->reference_id }}
                                              </td>
                                              <td class="text-truncate">
                                                {{ $active->why_fundraising }}
                                              </td>
                                              <td class="text-truncate">
                                                  {{ $active->created_at }}
                                              </td>
                                              <td class="text-truncate">
                                                  {{ $active->country }}
                                              </td>
                                              
                                              <td class="text-truncate">{{ $active->goal_amount }}</td>
                                              <td class="text-truncate">2 000 000 GNF</td>

                                              <td>
                                                    <button type="button" class="btn btn-sm btn-outline-warning round">Active</button>
                                                </td>
                                              <td>
                                                    <a href="{{ route('User-ShowActiveFundrasier',$active->id) }}" class="color-black p-0" data-original-title="" title="View">
                                                        <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a href="{{ route('User-editActiveFundrasier',$active->id) }}" class="color-black p-0" data-original-title="" title="Edit">
                                                        <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                    </a>
                                                    <a class="color-black p-0" data-original-title="" title="close" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-lock font-medium-3 mr-2"></i>
                                                    </a>
                                                    <form action="{{ route('activefund_delete', $active->id) }}" method="POST">
                                                      @csrf
                                                      @method('delete')
                                                      <button type="submit" ><i class="fa fa-trash-o font-medium-3 mr-2"></i></button>
                                                  </form>
                                                    {{-- <a class="color-red p-0" title="Delete" href="{{ route('activefund_delete',$active->id) }}">
                                                        
                                                    </a> --}}
                                                    
                              
                                                </td>
                                          </tr>

                                          @endforeach
                                        </tbody>
                                       
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </section>


       
@endsection