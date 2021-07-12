@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="Chicago- Hongkong">
  <title>tripdear.com |Chicago- Hongkong </title>

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

  <section class="banner-section" style="background-image: url(assets/images/route/Chicago-Hongkong.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">Cheap flight from Chicago- Hongkong</h1>
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
						<input class="form-control custom-form rounded-0" type="text" placeholder="Origin" name="origin" id="origin" value="ORD" autocomplete="off" required >
						<div id="success" class="search_result search_result1" style="position: absolute; z-index: 1;"></div>
						<button class="exchange"><i class="fa fa-exchange"></i></button>
						</div>
						<div class="col-md-6 col-12 pl-md-0 position-relative">
						<span class="t-lable">Destination</span>
						<input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" value="HKG" autocomplete="off" required>
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
              <h2 class="text-center mb-4">Everything you need to know about your next Hongkong Trip</h2>

              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/images/route/Chicago-Hongkong.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Chicago-Hongkong.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Chicago-Hongkong.jpg" class="d-block w-100" alt="Routes">
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
              <p>Now that all the countries are opening their borders to travelers, it’s the perfect time to bring out your best clothes and set out. Traveling to the other end of the world is much more rewarding when you have done your research in advance. You will feel more prepared and excited with the information we have curated for you.</p>

              <h3>Get information on Chicago-Hongkong routes</h3>

              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Distance between airports</td>
                        <td>12551 miles</td>
                      </tr>
                      <tr>
                        <td>Time Taken</td>
                        <td>15h 40 m</td>
                      </tr>
                      <tr>
                        <td>Time Difference</td>
                        <td>-13 hours</td>
                      </tr>
                      <tr>
                        <td>Popular Airlines for Chicago- Hongkong</td>
                        <td>American Airlines</td>
                      </tr>
                      <tr>
                        <td>Airports</td>
                        <td>Hongkong (China); Hongkong International Airport (HKG)<br/>
                            Chicago (USA); Chicago O’Hare International Airport (CHI)
                        </td>
                      </tr>
                      <tr>
                        <td>Cheapest Airlines </td>
                        <td>Cathay Pacific</td>
                      </tr>
                      <tr>
                        <td>Flights per week</td>
                        <td>15 flights per week</td>
                      </tr>
                      <tr>
                        <td>Cheapest Month</td>
                        <td>December</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->

              <p>NOTE: The number of flights operated per week are prone to fluctuation.</p>

              <h4>Things to keep in mind before making a Chicago- Hongkong trip</h4>

              <ul class="list-types">
              	<li>To make sure your long-haul flights do not get uncomfortable, try to get some sleep while on board.</li>
              	<li>For cheaper deals on Chicago-Hongkong flights, try to book at least 3 weeks in advance.</li>
              	<li>You will get a better deal on flights when you book your flight during the low season.</li>
              	<li>Travel light and pack one extra empty duffle bag in your luggage. </li>
              	<li>Sign up for a great TSA Precheck plan as soon as possible. You will have an easier time at the check-in and security.
              	</li>
              </ul>
              <h4> Most Popular Airlines on Chicago-Hongkong route</h4>
              <p>Check out the list to get all the information on top airlines operating Chicago-Hongkong flights at the moment. These are the top airlines and the prices they offer for flight fares for a one-way trip. Have a look:</p>


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
                        <td>American Airlines</td>
                        <td>700-750USD</td>
                      </tr>
                      <tr>
                        <td>Emirates</td>
                        <td>800-880USD</td>
                      </tr>
                      <tr>
                        <td>Delta Airlines</td>
                        <td>600-750USD</td>
                      </tr>
                      <tr>
                        <td>Turkish Airlines</td>
                        <td>500-700 USD</td>
                      </tr>
                      <tr>
                        <td>Qatar Airways</td>
                        <td>800-900USD</td>
                      </tr>
                      <tr>
                        <td>British Airways</td>
                        <td>900-1200USD</td>
                      </tr>
                      <tr>
                        <td>KLM</td>
                        <td>600-690USD</td>
                      </tr>
                      <tr>
                        <td>SWISS</td>
                        <td>700-780USD</td>
                      </tr>
                      <tr>
                        <td>Cathay Pacific</td>
                        <td>600-640USD</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->

              <p>Note: The prices vary for different travel classes. These prices are noted for the last 7 days. Fluctuations are possible.</p>

              <h5>Get to know origin and destination</h5>
              <p><strong>Chicago</strong></p>
              <p>Chicago is home to 2.7 million residents and is the largest city in Illinois. The city is always buzzing with tourists getting their fill of this vibrant city. By going on a Hongkong-Chicago trip, you will realize how different these two (Hongkong and Chicago) cities are. The contrast in their culture will only make this excursion more exciting. Chicago has many museums and takes immense pride in displaying its history. Visit Science Museum and Chicago Cultural center to get yourself a crash course on Chicago. Do not forget to try their much-loved doughnuts.</p>

              <p><strong>Hongkong</strong></p>
              <p>Get your share of delicious dim sums at Temple Street Night Market. The city is a sight for sour eyes. Hongkong is a beautiful landscape of traditional Chinese architecture and a modern skyscraper. Bless your taste buds with food from Michelin-star restaurants. Learn about Chinese history from the preserved relics.</p>

              
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->
      </div><!--/container-->
    </section><!--/inner-page-section-->


@include('includes.footer')