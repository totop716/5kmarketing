@extends('dashboard.base')

@section('css')

@endsection

@section('content')

<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Running Appointments Form Data</h4></div>
            <div class="card-body">
              <form method="post" action="/appointments" enctype="multipart/form-data">
               {{ csrf_field() }}
                <div class="row">
                  <div class="col-sm-12">
                    <ul class="stepbarcontain row">
                      <li class="step-item current col-md-6" id="app_step1" step="1"><p class="stepbar_title">Step 1</p><div class="stepbar"></div></li>
                      <li class="step-item col-md-6" id="app_step2" step="2"><p class="stepbar_title">Step 2</p><div class="stepbar"></div></li>
                    </ul>
                    <p class="complete-text"><span class="percent">0%</span> Complete</p>
                    <div class='form-container' id="app_step1_form">
                      <div class='form-group'>
                        <label class="col-form-label" for="appointmentStatus">Appointment Status</label>
                        <select class="form-control" name="appointmentStatus" id="appointmentStatus">
                          <option value="sale">Sale</option>
                          <option value="nosale">No Sale</option>
                          <option value="noshow">No Show</option>
                          <option value="porched">Porched</option>
                          <option value="canceled">Canceled</option>
                          <option value="oneleg">One Leg</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-container" id="app_step2_form">
                      <div class='form-group'>
                        <label class="col-form-label" for="appointmentleadtype">Lead Type</label>
                        <select class="form-control" name='appointmentleadtype' id="appointmentleadtype">
                          <option value="option1">Option1</option>
                        </select>
                      </div>
                      <div class='form-group'>
                        <label class="col-form-label" for="nameofclient">Name of Client</label>
                        <input type="text" class="form-control" name='nameofclient' id="nameofclient" />
                      </div>
                      <div class='form-group'>
                        <label class="col-form-label" for="appointmentdate">Date of Appointment</label>
                        <input class="form-control" id="appointmentdate" name="appointmentdate" type="date" placeholder="date" />
                      </div>
                      <div class='form-group'>
                        <label class="col-form-label" for="appointmenttime">Time of Appointment</label>
                        <input class="form-control" name="appointmenttime" id="appointmenttime" type="time" placeholder="time">
                      </div>
                      <div class="sale-part">
                        <div class='form-group'>
                          <label class="col-form-label" for="citylocation">City Location</label>
                          <input type="text" class="form-control" name="citylocation" id="citylocation" />
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="countofprivacysold">Number of policy sold in this home</label>
                          <input type="text" class="form-control" name="countofprivacysold" id="countofprivacysold" />
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="companysold">Company sold?</label>
                          <select class="form-control" name="companysold" id="companysold">
                            <option value="option1">Option1</option>
                          </select>
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="productsold">Product Sold?</label>
                          <input type="text" class="form-control" name="productsold" id="productsold" />
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="monthlypremium">Monthly Premium</label>
                          <input type="text" class="form-control" name="monthlypremium" id="monthlypremium" />
                        </div>
                        <div class='form-group additionalsalepossible'>
                          <label class="col-form-label">Any additional sales possible ?</label>
                          <div class="col-sm-12">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="anyadditionalsale1" type="radio" value="1" name="anyadditionalsale">
                              <label class="form-check-label" for="anyadditionalsale1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="anyadditionalsale2" type="radio" value="0" name="anyadditionalsale">
                              <label class="form-check-label" for="anyadditionalsale2">No</label>
                            </div>
                          </div>
                        </div>
                        <div class='form-group whatisavailable'>
                          <label class="col-form-label" for="whatisavailablecon">What is available?</label>
                          <input type="text" class="form-control" name="whatisavailablecon" id="whatisavailablecon" />
                        </div>
                        <div class='form-group retirementpart'>
                          <label class="col-form-label">Did I talk about Retirement?</label>
                          <div class="col-sm-12">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="retirementyes" type="radio" value="1" name="retirementcheck">
                              <label class="form-check-label" for="retirementyes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="retirementno" type="radio" value="0" name="retirementcheck">
                              <label class="form-check-label" for="retirementno">No</label>
                            </div>
                          </div>
                        </div>
                        <div class='form-group rebooktalktime'>
                          <label class="col-form-label">Did you rebook a time to talk about it ?</label>
                          <div class="col-sm-12">
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="rebooktimeyes" type="radio" value="1" name="rebooktime">
                              <label class="form-check-label" for="rebooktimeyes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline mr-1">
                              <input class="form-check-input" id="rebooktimeno" type="radio" value="0" name="rebooktime">
                              <label class="form-check-label" for="rebooktimeno">No</label>
                            </div>
                          </div>
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="doathome">Two things I could have done better in the home?</label>
                          <textarea class="form-control" name="doathome" id="doathome"></textarea>
                        </div>
                        <div class='form-group'>
                          <label class="col-form-label" for="howmanyreferral">How many Referrals?</label>
                          <input type="text" class="form-control" name="howmanyreferral" id="howmanyreferral" />
                        </div>
                      </div>
                      <div class="nosale-part">
                        <div class='form-group'>
                          <label class="col-form-label">Address</label>
                          <input class="form-control" name="appointmentnosaleaddress1" id="appointmentnosaleaddress1" type="text" />
                          <input class="form-control mt-3" name="appointmentnosaleaddress2" id="appointmentnosaleaddress2" type="text" />
                          <div class="row mt-3">
                            <div class="col-sm-4">
                              <input class="form-control" name="appointmentnosalecity" id="appointmentnosalecity" type="text" />
                              <label for="appointmentnosalecity">City</label>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control" name="appointmentnosalestate" id="appointmentnosalestate">
                                <option value=""></option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="Arizona">Arizona</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="DistrictofColumbia">District of Columbia</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota</option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="NewHampshire">New Hampshire</option>
                                <option value="NewJersey">New Jersey</option>
                                <option value="NewMexico">New Mexico</option>
                                <option value="NewYork">New York</option>
                                <option value="NorthCarolina">North Carolina</option>
                                <option value="NorthDakota">North Dakota</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oklahoma">Oklahoma</option>
                                <option value="Oregon">Oregon</option>
                                <option value="Pennsylvania">Pennsylvania</option>
                                <option value="RhodeIsland">Rhode Island</option>
                                <option value="SouthCarolina">South Carolina</option>
                                <option value="SouthDakota">South Dakota</option>
                                <option value="Tennessee">Tennessee</option>
                                <option value="Texas">Texas</option>
                                <option value="Utah">Utah</option>
                                <option value="Vermont">Vermont</option>
                                <option value="Virginia">Virginia</option>
                                <option value="Washington">Washington</option>
                                <option value="WestVirginia">West Virginia</option>
                                <option value="Wisconsin">Wisconsin</option>
                                <option value="Wyoming">Wyoming</option>
                              </select>
                              <label for="appointmentnosalestate">State</label>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" name="appointmentnosalezip" id="appointmentnosalezip" type="text" />
                              <label for="appointmentnosalezip">Zip/Postal</label>
                            </div>
                          </div>
                          <div class='form-group'>
                            <label class="col-form-label" for="whathappen">What Happened?</label>
                            <textarea class="form-control" name="whathappen" id="whathappen"></textarea>
                          </div>
                          <div class='form-group'>
                            <label class="col-form-label">Was it Rescheduled?</label>
                            <div class="col-sm-12">
                              <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="wasrescheduledyes" type="radio" value="1" name="wasrescheduled">
                                <label class="form-check-label" for="wasrescheduledyes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline mr-1">
                                <input class="form-check-input" id="wasrescheduledno" type="radio" value="0" name="wasrescheduled">
                                <label class="form-check-label" for="wasrescheduledno">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="button" class="btn btn-primary mb-3 gotoprevstep" value="Previous" />
                    <input type="button" class="btn btn-primary mb-3 gotonextstep" value="Next" />
                    <input type="submit" class="btn btn-primary mb-3 submitform" value="Submit" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')

@endsection