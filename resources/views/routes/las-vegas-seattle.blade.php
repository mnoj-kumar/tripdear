@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A trip from Las Vegas to Seattle is all you need right now. Learn important flight details and some important tips for your first trip post- COVID-19.">
  <meta name="keywords" content="Las Vegas to Seattle">
  <title>tripdear.com | Las Vegas to Seattle</title>

<style type="text/css">
  section.banner-section{
  padding: 50px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  min-height:200px;
}
.p-overlay {
  background-color: #0000005e;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
/*--------/banner-section----------*/
.inner-page-section {
padding: 60px 0px;
background-color: #ffffff;
}
ul.flight-points>li:before {
content: "\f072";
font-family: 'FontAwesome';
float: left;
margin-left: -1.5em;
color: #006d9e;
}
.trip-in-content-box p {
font-weight: 300;
letter-spacing: 0.5px;
text-align: justify;
font-size: 15px;
}
.trip-in-content-box {
box-shadow: 0px 0px 10px #00000024;
padding: 15px 15px;
margin-top: 10px;
border-top: 3px solid #f9bf08;
border-bottom: 2px solid #1a5586;
}
/*-----------/form----------------------------*/
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

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/route/Las-Vegas-to-Seattle.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">Cheap flight from Las Vegas to Seattle</h1>
        </div>
      </div><!--/row-->

	  <div class="fform">
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
						<input class="form-control custom-form rounded-0" type="text" placeholder="Origin" name="origin" id="origin" value="LAS" autocomplete="off" required >
						<div id="success" class="search_result search_result1" style="position: absolute; z-index: 1;"></div>
						<button class="exchange"><i class="fa fa-exchange"></i></button>
						</div>
						<div class="col-md-6 col-12 pl-md-0 position-relative">
						<span class="t-lable">Destination</span>
						<input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" value="SEA" autocomplete="off" required>
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
	  </div>

    </div><!--/container-->
  </section>
  <!--/banner-section-->

    <section class="inner-page-section">
      <div class="container">
        <div class="trip-in-content-box">
         <div class="row">
            <div class="col-12 col-md-12 mb-4">
              <h2 class="text-center mb-4">Break the spell of the pandemic by booking a trip from Las Vegas to Seattle</h2>

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/route/Las-Vegas-to-Seattle.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Las-Vegas-to-Seattle.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Las-Vegas-to-Seattle.jpg" class="d-block w-100" alt="Routes">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <!--/slider banner-->


            <div class="col-12 col-md-12">
              
              <p>Welcome! We have been waiting for you. We understand how boring and suffocating it must get for you to stay at home during the entire 2020. Well now thanks to the vaccine rollout, many states in the U.S have started accepting tourists. Summer is here. Why not plan a trip from Las Vegas to Seattle?</p>
              <p>It does not have to be a luxurious one, a budget-friendly one will work just as fine. As long as you are taking some time out from your busy schedule, there could no trip that is a waste of time.</p>

              <h3>Time to look at some essential information about flights from Las Vegas to Seattle</h3>
              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Distance</td>
                        <td>1797 km</td>
                      </tr>
                      <tr>
                        <td>Time Taken</td>
                        <td>2h 40 m</td>
                      </tr>
                      <tr>
                        <td>Time Difference</td>
                        <td>None</td>
                      </tr>
                      <tr>
                        <td>Best Airlines for Las Vegas to Seattle</td>
                        <td>Alaska Airlines</td>
                      </tr>
                      <tr>
                        <td>Airport</td>
                        <td>Mc Carran International Airport (LAS) Seattle/Tacoma International Airport (SEA)</td>
                      </tr>
                      <tr>
                        <td>Cheapest Airlines </td>
                        <td>Alaska</td>
                      </tr>
                      <tr>
                        <td>Flights per week</td>
                        <td>220 flights per week</td>
                      </tr>
                      <tr>
                        <td>Cheapest Month</td>
                        <td>July</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->

              <h4>Airports in Seattle and their distance from Central Seattle</h4>
              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Airport</td>
                        <td>Distance from Central Seattle</td>
                      </tr>
                      <tr>
                        <td>Seattle/Tacoma International Airport</td>
                        <td>18km</td>
                      </tr>
                      <tr>
                        <td>Seattle Lake Unison SPB</td>
                        <td>2km</td>
                      </tr>
                      <tr>
                        <td>Seattle Boeing Fld</td>
                        <td>9km</td>
                      </tr>
                      <tr>
                        <td>Everett Airport</td>
                        <td>34km</td>
                      </tr>
                      <tr>
                        <td>Bremerton Airport</td>
                        <td>35km</td>
                      </tr>
                      <tr>
                        <td>Tacoma Industrial Airport</td>
                        <td>41km</td>
                      </tr>
                      <tr>
                        <td>Anacortes Airport</td>
                        <td>102km</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->

              <h4>Things to know before traveling from Las Vegas to Seattle</h4>
              <ul class="list-types">
                <li>Flights from Las Vegas to Seattle come under short-haul flights. Carry a light sweater as the temperature on planes tend to fluctuate.</li>
                <li>Although states are opening up, there are still restrictions in place. Make sure you do your research.</li>
                <li>Before looking for a destination, visit the CDC website to get the latest updates on the pandemic.</li>
                <li>Being flexible with your travel dates gets you better deals on flights from Las Vegas to Seattle.</li>
                <li>If you cannot adjust your travel dates, then set the price alert on the fixed travel dates.</li>
                <li>Ticket fares from Las Vegas to Seattle tend to drop during July. If you are looking for cheaper flights, July is a great option.</li>
              </ul>

              <h4>Top 5 airlines for flights from Las Vegas to Seattle</h4>
              <p>We have compiled a list of the top 5 airlines that fly frequently from Las Vegas to Seattle. Have a look</p>

              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>AIRLINES</th>
                        <th>PRICE RANGE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Aero Mexico</td>
                        <td>50-57USD</td>
                      </tr>
                      <tr>
                        <td>Delta Airlines</td>
                        <td>55-68USD</td>
                      </tr>
                      <tr>
                        <td>Korean Air</td>
                        <td>60-75USD</td>
                      </tr>
                      <tr>
                        <td>Alaska Airlines</td>
                        <td>50-60USD</td>
                      </tr>
                      <tr>
                        <td>KLM</td>
                        <td>50-53USD</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->

              <p>Note: The flight fares are subjected to fluctuation. Since the pandemic, many airlines have made changes in their routes. Visit their individual website to learn more about their routes and flight timings.</p>

              <h5>Information about origin and destination</h5>
              <p><strong>Las Vegas-the sin city</strong></p>
              <p>All of us know this saying-What happens in Vegas, stays in Vegas. Well, for all the fun things the city has, it will be a sin to not tell you about it. The city has Neon Museum which is a genius hybrid of architecture and technology. Fountains of Bellagio come to life at night time. You can also find unique things like Elvis Presley Wedding at The Little Vegas Chapel.</p>

              <p><strong>Seattle- the futuristic city</strong></p>
              <p>Seattle is much loved for its geographical location. The city is surrounded by water, mountains, and lush evergreen forests. The city is home to the futuristic Space Needle which looks like a lighthouse from another planet. With nature on one side and futuristic architecture on the other, the city is a dream destination for our users. With nothing to lose, plan your journey from Las Vegas to Seattle now.</p>

            </div>
          </div><!--/row-->
        </div><!--/trip-in-content-box-->
      </div><!--/container-->
    </section><!--/inner-page-section-->
@include('includes.footer')