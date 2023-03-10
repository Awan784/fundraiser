@extends('Layouts.UserDashboard-Interface')
@section('content')
<section id="horizontal-form-layouts">
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-title-wrap bar-warning">
              <h4 class="card-title" id="horz-layout-colored-controls">Edit Active Fundraising</h4>
            </div>
            <p class="mb-0 mt-2">You can edit the active fundraising details here.</p>
          </div>
          <div class="card-body">
            <div class="px-3">
              <form class="form form-horizontal">
                <div class="form-body">
                  <div class="row ">
                    <div class="col-md-6 mt-2">
                      
                      <div class="form-group">
                        <label for="eventInput2">Fund No: </label>
                        <input type="text" id="eventInput2" class="form-control" value="{{ $editActive->reference_id }}" name="title" placeholder="MFTX000001" disabled>
                      </div>
                      <div class="form-group">
                        <label for="projectinput6">What country are you in? </label>
                        <select class="form-select form-control"  name="country">
                            <option selected disabled>Select your country</option>
                            <option value="Guinea" {{ $editActive->country == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                            <option value="Ivory Coast"  {{ $editActive->country == 'Ivory Coast' ? 'selected' : '' }}>Ivory Coast</option>
                            <option value="Mali" {{ $editActive->country == 'Mali' ? 'selected' : '' }}>Mali</option>
                            <option value="Sierra Leone" {{ $editActive->country == 'Sierra Leone' ? 'selected' : '' }}>Sierra Leone</option>
                            <option value="Senegal" {{ $editActive->country == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                          </select>
                       
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">Where are you located? </label>
                        <input type="text" id="eventInput2" value="{{ $editActive->location }}" class="form-control" name="title" placeholder="Street # 1, house # 1 , Guinea, Africa" >
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">What best describes why you're fundraising?</label>
                        
                          <div class="form-group mt-1">
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Business</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Enviornment</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Event</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Medical</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">What is the type of confidentiality for this funds ?</label>
                        <div class="form-group mt-1">
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Public</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Private</label>
                          <input type="text" class="form-control" name="">
                        </div>
                    </div>
                      </div>
            
                    <div class="col-md-6 mt-2">
                      
                      <div class="form-group">
                        <label for="eventInput2">What name would you like to give you fund? </label>
                        <input type="text" id="eventInput2" class="form-control" name="title" placeholder="SOS Medical" >
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">What is your name? </label>
                        <input type="text" id="eventInput2" value="{{ $editActive->name }}" class="form-control" name="title" placeholder="MFTX000001">
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">What is your initial goal amount to raise? </label>
                        <input type="text" id="eventInput2" value="{{ $editActive->goal_amount }}" class="form-control" name="title" placeholder="3.00.000.000 GNF" >
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">Who are you collecting funds for?</label>
                        
                        <div class="form-group mt-1">
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Yourself</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Someone else</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="eventInput2">Where would you like to receive funds to?</label>
                        <div class="form-group mt-1">
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Mobile money account</label>
                          <input type="checkbox" id="switcherySize3" class="switchery" data-size="xs" checked/>
                          <label for="switcherySize3" >Bank Account</label>
                          <input type="text" class="form-control" name="">
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="eventInput2">Fundraiser main banner image</label>
                            <input type="file" id="eventInput2" class="form-control" name="title" placeholder="Street # 1, house # 1 , Guinea, Africa" >
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="mt-2">
                            <img src="{!! asset( $editActive->banner_image) !!}" alt="" style="height: 130px; width:200px;">
                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <label for="eventInput2">Other Fundraiser images</label>
                            <input type="file" id="eventInput2" class="form-control" name="title" placeholder="Street # 1, house # 1 , Guinea, Africa" >
                          </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <div class="mt-2 d-flex">
                                @foreach ( $images as $image) 
                                    
                                <div class="col-2 mx-1 ">
                                    <div class="iner-img">
                                        <img src="{!! asset( $image) !!}" alt="" style="height: 70px; width:70px;">
                                    </div>
                                </div>
                                @endforeach
                          
                        </div>
                    </div>
                </div>
                </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="eventInput5">Short description of fundraiser.</label>
                        <textarea id="donationinput7" rows="2" class="form-control square"  name="comments">{{ $editActive->s_description }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="eventInput5">Briefly describe why you are starting this fundraiser.</label>
                        <textarea id="donationinput7" rows="4" class="form-control square" name="comments">{{ $editActive->l_description }}</textarea>
                      </div>
                    </div>
                  </div>
  
                </div>
  
                <div class="form-actions right">
                  
                  <a href="active-fundraiser.html" class="btn btn-success btn_black">
                    <i class="icon-note"></i> Save
                  </a>
                </div>
              </form>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
  </section>

@endsection