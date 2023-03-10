@extends('Layouts.UserDashboard-Interface')
@section('content')

<!--Statistics cards Starts-->
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-yellow dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-book-open text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Active <br> Fundraisers</span>
                      <h3 class="text-white mt-2 card-money">10</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-black dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-book-open text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Closed <br> Fundraisers</span>
                      <h3 class="text-white mt-2 card-money">2</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-green dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-book-open text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Total <br> Fundraisers</span>
                      <h3 class="text-white mt-2 card-money">12</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-black dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-wallet text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Amount Raised  <br> Today</span>
                      <h3 class="text-white mt-2 card-money">10.000.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-green dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-wallet text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Amount Raised <br> This Month</span>
                      <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-yellow dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-wallet text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Total Amount  <br> Raised</span>
                      <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-green dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Total Personnal <br> Contributions</span>
                      <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-yellow dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Total Amount <br> withdrawn</span>
                      <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-12">
            <div class="card gradient-black dashboard-item">
              <div class="card-body">
                <div class="px-3 py-3">
                  <div class="media">
                    <div class="align-center">
                      <i class="icon-paper-plane text-white font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-white text-right">
                      <span >Total Amount<br> Remaining</span>
                      <h3 class="text-white mt-2 card-money">5.000.000 GNF</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
@endsection