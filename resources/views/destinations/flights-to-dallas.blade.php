@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="Flights to Dallas ">
  <title>tripdear.com | Flights to Dallas </title>

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

  <section class="banner-section" style="background-image: url(assets/images/route/Dallas.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">Flights to Dallas </h1>
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
						<input class="form-control custom-form rounded-0" type="text" placeholder="Origin" name="origin" id="origin" value="" autocomplete="off" required >
						<div id="success" class="search_result search_result1" style="position: absolute; z-index: 1;"></div>
						<button class="exchange"><i class="fa fa-exchange"></i></button>
						</div>
						<div class="col-md-6 col-12 pl-md-0 position-relative">
						<span class="t-lable">Destination</span>
						<input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" value="DFW" autocomplete="off" required>
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
            <div class="col-md-12 col-12">
              <h2 class="text-center mb-4">Explore The Best Metropolitan City By Taking Flights To Dallas </h2>
            </div>

            <div class="col-12 col-md-12 mb-4">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/route/Dallas.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Dallas.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Dallas.jpg" class="d-block w-100" alt="Routes">
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
              <p>Travel plans for the near future? Plan your travel to Dallas for the best vacation experience. Dallas is a famous tourist destination and your vacation will be the best one here. People from different parts of the World visit Dallas for a number of reasons be it a vacation, work, studies, or some other purpose. It is best known for its museums and Dallas cowboys. It is a number one leisure destination. Dallas is a booming city best place to live and visit in America. Get all the important information you’ll need here in this blog about Dallas, flights, places to visit, and what all to explore when in the city. Book your flights to Dallas and it will be worth it.</p>

              <h3>Which Airlines have Flights to Dallas? </h3>
              <p>Some of the best airlines have flights available for Dallas. These airlines offer top-notch services at great prices and a variety of cabin classes to choose from. Passengers can choose the airline of their choice according to the budget and comfort needs.</p>
              <p>Airlines having flights to Dallas:-</p>


              <ul class="list-types">
                <li>Alaska Airlines</li>
                <li>British Airways</li>
                <li>American Airlines</li>
                <li>Air Canada</li>
                <li>Cathay Pacific</li>
                <li>Emirates</li>
                <li>Delta Airlines</li>
                <li>ANA</li>
                <li>Jet Blue</li>
                <li>Gulf Air</li>
                <li>Fly Dubai</li>
                <li>KLM</li>
                <li>Lufthansa Airlines</li>
                <li>Korean Air</li>
                <li>Malaysia Airlines</li>
                <li>United Airlines</li>
                <li>SWISS</li>
                <li>Turkish Airlines</li>
                <li>Qatar Airways</li>
                <li>Singapore Airlines</li>
              </ul>

              <h4>Dallas at a Glance!</h4>
              <p>Dallas is a famous city in Texas. It is known as the cultural and commercial hub of the region. The area in Dallas is the largest metropolitan area in the nation. It is a famous tourist leisure destination. It is also the home to the richest Americans. It is a fantastic city with so many good things to explore. The weather is perfect for a visit from September till May. It is the safest city in America to visit. It is a must-visit place for art lovers.</p>
              <p>The top visited places by tourists in Dallas are:-</p>

              <ul class="list-types">
                <li>Dallas Museum of Art</li>
                <li>Six Flags Over Texas</li>
                <li>Dallas Zoo</li>
                <li>The Sixth Floor Museum of Dealey</li>
                <li>Klyde Warren Park</li>
                <li>Nasher Sculpture Center</li>
                <li>The Dallas World Aquarium</li>
                <li>Reunion Tower</li>
                <li>White Rock Lane</li>
                <li>Crow Museum of Asian Art</li>
                <li>Cedar Hill State Park</li>
                <li>Frontiers of Flight Museum</li>
                <li>African American Museum of Dallas</li>
              </ul>
              <p>The most loved restaurants by tourists and locals in Dallas</p>
              <ul class="list-types">
                <li>The Rustic</li>
                <li>Eno’s Pizza Tavern</li>
                <li>Velvet Taco</li>
                <li>Café 43</li>
                <li>Commons Club</li>
                <li>Eatzi’s Market and Bakery</li>
                <li>Rodeo Goat</li>
                <li>Emporium Pies</li>
                <li>S & D Oyster Co. </li>
              </ul>

              <p>Shopping in Dallas</p>
              <ul class="list-types">
                <li>Galleria Dallas</li>
                <li>The North Parks Centre</li>
                <li>The shops at Park lane</li>
                <li>Uptown Plaza Dallas</li>
                <li>Highland Park Village</li>
                <li>West Village</li>
                <li>Quadrangle Shopping Centre</li>
                <li>Inwood Village </li>
              </ul>

              <h5>Airport Information </h5>
              <p class="mb-0">Dallas Fort Worth International Airport</p>
              <p class="mb-0">Code- DFW</p>
              <p class="mb-3">Phone Number- +1 972-973—3112 </p>

              <p class="mb-0">Dallas Love Field Airport</p>
              <p class="mb-0">Code- DAL</p>
              <p>Phone Number- +1-214-670- 6080</p>

              <h5>How to book Affordable Flights to Dallas? </h5>
              <p>Booking flights on affordable fares are no longer a hassle if you make the bookings mindfully. Get the best price and best services for your Dallas flights booked with ease.<br>Follow these tips while making or looking for reservations to get the flights booked at the best fares. </p>

              <ul class="list-types">
                <li><strong>Flexible Travel Dates-</strong> Having flexible travel dates makes it easier for the passengers to look for different flights on different dates and make the bookings for the flights with the lowest fares. </li>
                <li><strong> Book tickets with local Airlines-</strong> Booking local airlines would cost you much lesser than booking an international airline. </li>
                <li><strong>Advance Bookings- </strong> Making the flight reservations in advance would cost you much lesser as flight fares are low when the departure date is far. </li>
                <li><strong>Set Fare Alerts- </strong> Setting price alerts on airline websites will send you an alert every time the fares go down.</li>
                <li><strong> Compare and Book-</strong> Book your flights to Dallas after comparing different flights and airlines. This will help you book flights on cheat fares. </li>
              </ul>

              <h5>What is the best time to visit Dallas? </h5>
              <p>The best time to visit Dallas is between September to November. The Texas State Fair is ongoing, the weather is perfect and the city is less crowded. The best time to visit Dallas, Texas is during Spring (March to May) and Fall (September to November). The ideal time one needs in Dallas is 3-4 days to explore the city properly. </p>

              <h5>Top destinations worldwide taking Flights to Dallas</h5>
              <ul class="list-types">
                <li>Denver to Dallas</li>
                <li>Houston to Dallas</li>
                <li>Los Angeles to Dallas</li>
                <li>Atlanta to Dallas</li>
                <li>Chicago to Dallas</li>
                <li>Seattle to Dallas</li>
                <li>Orlando to Dallas</li>
              </ul>
             
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->
      </div><!--/container-->
    </section><!--/inner-page-section-->
	
	    <!--pop-up css-->
<style type="text/css">
  .Special-offers {
    padding: 15px;
    border:1px dashed #eeeeee;
  }
  .t-bold{
    font-weight: bold;
  }
  .font-30{
    font-size: 28px;
  }
  a.call-btn {
  display: inline-block;
  background-color: #01519a;
  font-size: 20px;
  font-weight: 600;
  color: #ffffff;
  padding: 5px 20px;
  border-radius: 5px;
  text-decoration: none;
  }
  a.call-btn:hover {
    color: #ffffff;
  }
  .fares {
    font-size: 20px;
    font-family: inherit;
  }
  @media (min-width: 576px) {
    .modal-dialog {
      max-width: 430px !important;
      margin: 1.75rem auto;
    }
  }
  @media (max-width: 425px) {
    .modal-content {
    position: absolute !important;
    width: 100%;
    height: 100%;
    }
  }
</style>

<!-- Modal -->
<div class="modal-dialog modal-dialog-centered">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header orange-bg p-2">
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="Special-offers">
            <div class="row">
              <div class="col-md-12 col-12 text-center mb-3">
                <p><img src="assets/images/tech-support.png"></p>
                <h3 class="t-bold blue-color">Hello!</h3>
	 
                <p class="blue-color fares">Are you Looking For<br><span class="text-danger"> Cheap Flights To Dallas? </span></p>
              </div>

              <div class="col-md-12 mb-3 text-center"> 
                <p class="blue-color fares">Get Amazing Fares & <br>Unpublished Fares.</p>
              </div>
           
              <div class="col-md-12 col-12 text-center">
                <h4 class="t-bold">Call Now !</h4>
              </div>
              <div class="col-md-12 col-12 text-center">
                <a href="tel:(888) 481-1227" class="call-btn"><i class="fa fa-phone" style="padding:0px 4px" aria-hidden="true"></i>(888) 481-1227</a>
              </div>
			  <div class="col-md-12 col-12 text-center">
                <h6>This is a <span class="t-bold">Toll-free* Number</span></h6>
              </div>
            </div><!--/row-->
          </div><!--speciel-offers-->
        </div><!--modal-body-->
      </div>
    </div>
  </div>
</div>
<!-- /Modal -->

@include('includes.footer')