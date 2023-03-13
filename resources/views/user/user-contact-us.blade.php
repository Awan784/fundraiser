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
            <h4 class="card-title" id="horz-layout-colored-controls">Support Contact</h4>
          </div>
          <p class="mb-0 mt-2">You can enter the details here.</p>
        </div>
        <div class="card-body">
          <div class="px-3">

            <form class="form" method="post" action="{{ route('UserContactUs') }}"  enctype="multipart/form-data">
              @csrf
             
              <div class="row justify-content-md-center">
                <div class="col-md-6">
                  <div class="form-body">

                    <div class="form-group">
                      <label for="eventInput2">Title</label>
                      <input type="text" id="eventInput2" class="form-control" name="title" value="{{ old('title') }}">
                      @error('title')
                        <p class="text-sm text-danger">{{ $message }}</p>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="eventInput5">Description</label>
                      <textarea id="donationinput7" rows="7" class="form-control square"   name="description">{{ old('description') }}</textarea>
                      @error('description')
                      <p class="text-sm text-danger">{{ $message }}</p>
                    @enderror
                    </div>


                  </div>
                </div>
              </div>

              <div class="form-actions center">
                
                <button type="submit" class="btn btn-success">
                  Send
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  
</section>

@endsection