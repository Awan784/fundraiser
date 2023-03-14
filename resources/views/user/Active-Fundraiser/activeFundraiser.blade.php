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
                                    <table class="table  zero-configuration table-responsive " >
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
                                            <tr >
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
                                                    {{-- <input data-id="{{$active->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approved" data-off="Rejected" {{ $active->status == 0 ? 'checked' : '' }}> --}}

                                                    <a class="color-black p-0 status" data-original-title="" data-id="{{ $active->id }}" title="close" data-toggle="modal" data-target="#default1">
                                                        <i class="fa fa-lock font-medium-3 mr-2"></i>
                                                    </a>
                                                 
                                                    <a class="color-red p-0" href="{{route('activefund_delete',$active->id)}}" data-original-title=""
                                                        title="Delete" >
                                                        <i
                                                            class="fa fa-trash-o font-medium-3 mr-2"></i>
                                                    </a>
                                                    
                                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
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
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
$(function() {
$('.status').click(function (e) { 
    var el = this;
    var id = $(this).data('id');
    var url = '/activeFundraiser/' + id + '/status';
    var data = {
        "_token": $('#token').val()
    };
    e.preventDefault();
     $.ajax({
        url: url,
        type: 'PUT',
        data :data,
        dataType: 'json',
        success: function(response) {
         
            // Update the status button text
            $(el).closest('tr').fadeOut(800, function(){
                  $(this).remove();
                });
                
               

        }
    });
    
});
});
</script>
@endsection