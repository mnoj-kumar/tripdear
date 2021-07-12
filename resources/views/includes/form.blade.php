<style type="text/css">
.form-section {
  border-radius: 0px;
  padding: 15px;
  background-color: #003d70 !important;
  border-top: 1px solid #0a4e87;
  position: relative;
}
button.exchange {
  position: absolute;
  top: 9px;
  right: -14px;
  z-index: 1;
  border: 0px;
  background-color: #f9c922;
  color: #ffffff;
  border-radius: 20px;
  cursor: pointer;
  padding: 2px 6px;
  display: inline-block;
  height: 30px;
  width: 30px;
}
button.exchange:focus {
  outline: 0;
}
@media (max-width: 425px) {
  button.exchange {
    position: absolute;
    top: 34px;
    right: 0px;
    left: 0px;
    margin: 0 auto;
  }
}
span.t-lable {
  position: absolute;
  left: 20px;
  top: 4px;
  font-size: 11px;
}
span.t-lable2 {
  position: absolute;
  left: 34px;
  top: 4px;
  font-size: 11px;
}
span.t-lable3 {
  position: absolute;
  right: 20px;
  top: 11px;
  font-size: 19px;
}
span.t-lable5 {
  position: absolute;
  left: 34px;
  top: 4px;
  font-size: 11px;
}
@media (max-width: 425px) {
  span.t-lable {
    position: absolute;
    left: 34px;
    top: 4px;
    font-size: 11px;
  }
  span.t-lable2 {
    left: 34px;
  }
  span.t-lable5 {
    left: 34px;
  }
}
input[type="date"] {
  padding: 10px 14px 0px;
}
input[type="text"] {
  padding: 10px 18px 0px;
}
/*----------new css---------*/
.pointer{
  cursor: pointer;
}
.bold {
  font-weight: 600;
}
/*------------*/
.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
  background-color: #ee0017 !important;
}
.nav-pills a {
  background-color: #f7f7f7 !important;
}
button.faq-tab {
  border: 0px;
  width: 100%;
  background-color: #ff000000;
  color: #fff;
  font-size: 16px;
  padding: 10px 10px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
button.faq-tab:focus {
  outline: 0px;
}
/*-------new css------*/
.passenger-box {
  background-color: #fff;
  position: absolute;
  width: 260px;
  padding: 5px;
  z-index: 1;
  border-radius: 4px;
  box-shadow: 0px 0px 7px #0000004a;
}
.search_item {
    width: 100%;
    height: 42px;
    color: #000;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
    padding: 11px 8px;
    font-size: 13px;
}
.search_item1, .search_item2 {
    background: white;
    width: 160%;
    font-weight: 600;
}
.search_item:hover{
  background: #1a5586;
  color: white;
}
button.blue-btn-lg.btn-block.rounded-0.actives1, button.blue-btn-lg.btn-block.rounded-0.actives2 {
    font-size: 12px !important;
}
</style>
<section>
  <div class="row">
    <div class="col-4 col-md-1 pr-0">
      <button class="blue-btn-lg btn-block rounded-0 actives1" onclick="roundTrip()">Round Trip</button>
    </div>
    <div class="col-4 col-md-1 pl-0">
      
    <button class="blue-btn-lg btn-block rounded-0 actives2" onclick="oneWay()">One Way</button>
    </div>
  </div>
  <form action="/flight-search" method="get"><!------form-------->
    <div class="form-section">
      <div class="row">
        <div class="col-12 col-md-10 pr-md-1 mb-md-0 mb-2">
          <div class="row">
            <div class="col-12 col-md-5 pr-md-1 mb-md-0 mb-2">
              <div class="row">
                <div class="col-md-6 col-12 pr-md-0 position-relative">
                  <!-- <label class="text-white d-none d-md-block">From</label> -->
                  <span class="t-lable2">Origin</span>
                  <input class="form-control custom-form rounded-0" type="text" placeholder="Origin" name="origin" id="origin" autocomplete="off" required>
                  <div id="success" class="search_result search_result1" style="position: absolute; z-index: 1;"></div>
                  <button class="exchange"><i class="fa fa-exchange"></i></button>
                </div>
                <div class="col-md-6 col-12 pl-md-0 position-relative">
                  <span class="t-lable">Destination</span>
                  <input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" autocomplete="off" required>
                  <div id="success1" class="search_result search_result2" style="position: absolute; z-index: 1;"></div>
                </div>
              </div><!--/row-->
            </div>
            <div class="col-12 col-md-4 pl-md-1 pr-md-1 mb-md-0 mb-2">
              <div class="row">
                <div class="col-md-6 col-6 pr-md-0 pr-0 position-relative" id="departureDateDiv">
                  <span class="t-lable5">Depart date</span>
                  <input class="form-control custom-form rounded-0" type="text" placeholder="Depart date" name="departureDate" id="start-date" autocomplete="off" required>
                </div>
                <div class="col-md-6 col-6 pl-md-0 pl-0 position-relative" id="returnDateDiv">
                  <span class="t-lable">Return date</span>
                  <input class="form-control custom-form rounded-0" type="text" placeholder="Return date" name="returnDate" id="end-date" autocomplete="off" required>
                </div>
              </div><!--/row-->
            </div>
            <div class="col-12 col-md-3 pl-md-1">
              <div class="row">
                <div class="col-md-6 col-12 pr-md-0 mb-md-0 mb-2 position-relative">
                  <span class="t-lable ml-md-2">Passenger</span>
                  <input class="form-control custom-form rounded-0" min="0" value="1" type="text" name="passenger" id="passenger" autocomplete="off" required>
                  <div class="passenger-box" id="passengerBox">
                    <div class="row p-2">
                      <div class="col-7">
                        <p class="font-12 mt-0 mb-0"><strong>Adult</strong></p>
                      </div>
                      <div class="col-5 text-right"> 
                        <input class="form-control custom-form rounded-0" type="text" min="0" value="1" id="noofadults" name="noofadults" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer blue-color" id="minusAdults" onclick="decreaseAdultsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="adultsValue"></span><i class="fa fa-plus-circle pointer blue-color"  onclick="increaseAdultsValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
                    <div class="border-bottom"></div>
                    <div class="row p-2">
                      <div class="col-7">
                        <p class="font-12 mt-0 mb-0"><strong>Children</strong> <span class="text-secondary">(Age 2-14)</span></p>
                      </div>
                      <div class="col-5 text-right">
                        <input class="form-control custom-form rounded-0" type="text" min="0" value="0" id="children" name="children" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer blue-color" id="minusChildren" onclick="decreaseChildrenValue()"></i><span class="mr-2 ml-2 font-12 bold" id="childrenValue"></span><i class="fa fa-plus-circle pointer blue-color" onclick="increaseChildrenValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
                    <div class="border-bottom"></div>
                    <div class="row p-2 mb-1">
                      <div class="col-7">
                        <p class="font-12 mt-0 mb-0"><strong>Infants</strong> <span class="text-secondary">(Under 2)</span></p>
                      </div>
                      <div class="col-5 text-right">
                        <input class="form-control custom-form rounded-0" type="text" min="0" value="0" id="infants" name="infants" style="width: 38px;padding: 10px;margin: -12px 0px -32px 16px;background: white;border: none;" autocomplete="off">
                        <p class="d-flex mb-0"><i class="fa fa-minus-circle pointer blue-color" id="minusInfants" onclick="decreaseInfantsValue()"></i><span class="mr-2 ml-2 font-12 bold" id="infantsValue"></span><i class="fa fa-plus-circle pointer blue-color" onclick="increaseInfantsValue()" style="margin-left: 25px;"></i></p>
                      </div>
                    </div><!--/row-->
                    <div class="row mb-2">
                      <div class="col-12">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="stop" name="nonStop" class="custom-control-input" value="false" name="stop" autocomplete="off">
                          <label class="custom-control-label font-13" for="stop">Stop</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="non-stop" name="nonStop" class="custom-control-input" checked="radio" value="true" name="nonStop" autocomplete="off">
                          <label class="custom-control-label font-13" for="non-stop">Non Stop</label>
                        </div>
                      </div>
                    </div><!--/row-->
                    <p class="blue-btn-sm btn-block mb-2" id="done">Done</p>
                    
                  </div><!--/passenger-box-->
                </div><!--col-md-6 col-12-->
                <div class="col-md-6 col-12 pl-md-0 position-relative">
                  <span class="t-lable">Classes</span>
                  <!-- <span class="t-lable3"><i class="fa fa-caret-down blue-color"></i></span> -->
                  <select class="form-control custom-form rounded-0" name="class" id="class">
                    <option>Economy</option>
                    <option>Business</option>
                    <option>First</option>
                  </select>
                </div>
              </div><!--/row-->
            </div>
          </div><!--/row-->
        </div><!--/col-12 col-md-10-->

        <div class="col-12 col-md-2 pl-md-1">
          <button type="submit" class="btn orange-bg btn-lg btn-block text-white rounded-0">Search</button>
        </div><!--/col-12 col-md-2-->
      </div><!--/row-->
    </div><!--/form-section-->
  </form>

  <div class="row mt-3">
    <div class="col-md-12 col-12">
      <label class="parent-checkbox text-white">My Dates are flexible (+ -) days
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
    </div>
  </div><!--/row-->
</section>
