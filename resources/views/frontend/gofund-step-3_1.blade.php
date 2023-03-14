@extends('Layouts.gofung-interface')
@section('content')
<header class="pg-header-sipm gr-purple-light-bg valign">
    <div class="container mt-60">
        <div class="row justify-content-center">
            <div class="col-lg-9 ">
                <div class="caption text-center">
                    <span class="fz-14 mb-10 text-u ls4 text-main-color">We're here to guide you every step of the way.</span>
                    <h1 class="fz-50 fw-600 text-main-color">Let's begin fundraising </h1>
                </div>
            </div>
        </div>

    </div>
</header>
<section class="contact-crv">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="box-shadow to-up">
                    <form  method="post" action="{{ route('submit-step-four') }}" enctype="multipart/form-data">
                           @csrf
                           <div class="messages"></div>

                           <div class="controls row">
                               
                               <div class="col-12">
                                   <div class="mb-30">
                                       <h6 class="fw-400">Fundraiser main banner image</h6>
                                   </div>
                                   <div class="form-group has-error has-danger mb-30">
                                    <input type="file" name="banner_image" class="file-input-image">
                                    @error('banner_image')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="mb-30">
                                       <h6 class="fw-400">Other Fundraiser images</h6>
                                   </div>
                                   <div class="form-group has-error has-danger mb-30">
                                    <input type="file" name="raiser_images[]" class="file-input-image" multiple>
                                    @error('raiser_images')
                                    <p class="text-sm text-danger">{{ $message }}</p>
                                    @enderror
                                   </div>
                               </div>
                               <div class="col-12 mb-30">
                                   
                                   <div class="form-group has-error has-danger mb-30 ">
                                    
                                    <input type="checkbox" name="prog" class="checkboxterms" value="">Do you agree all the <span class="underline"> <a href="terms.html">terms and conditions</a></span>
                                </div>
                               </div>

                               
                           </div>  

                            <div class="col-lg-12">
                            
                            

                            <div class="col-12 text-center pt-30">
                                <button type="submit"  id="submit_prog" class="btn btn-md bg-success  text-light radius-30">
                                    <span class="text slide-up">Continue</span>
                                    
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- ==================== End Blog ==================== -->




    </main>


@endsection
@section('scripts')
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function() {

        var $submit = $("#submit_prog").hide(),
            $cbs = $('input[name="prog"]').click(function() {
                $submit.toggle( $cbs.is(":checked") );
            });
    
    });
</script>
@endsection