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
                          <h4 class="card-title" id="horz-layout-colored-controls">New Withdrawal</h4>
                        </div>
                        <p class="mb-0 mt-2">You can do the new withdrawal here.</p>
                      </div>
                      <div class="card-body">
                        <div class="px-3">

                          <form class="form">
                            <div class="row justify-content-md-center">
                              <div class="col-md-6">
                                <div class="form-body">

                                  <div class="form-group">
                                    <label for="eventInput2">Available Amount</label>
                                    <input type="text" id="eventInput2" class="form-control" name="title" placeholder="2 00 000 000 GNF" disabled>
                                  </div>
                                  <div class="form-group">
                                    <label for="eventInput2">Amount to withdraw</label>
                                    <input type="email" id="eventInput2" class="form-control" placeholder="Enter amount here" name="title">
                                  </div>

                                  


                                </div>
                              </div>
                            </div>

                            <div class="form-actions center">
                              
                              <a href="withdrawals.html"  class="btn btn-success">
                                Withdraw
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