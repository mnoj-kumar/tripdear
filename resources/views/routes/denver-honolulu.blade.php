@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Leave all the stress at home and start working on Hawaiian time. Learn flight information, major airlines, and more for a trip from Denver to Honolulu.">
  <meta name="keywords" content="Denver to Honolulu">
  <title>tripdear.com |Denver to Honolulu </title>

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


  <section class="banner-section" style="background-image: url(assets/images/route/Denver-to-Honolulu.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">Cheap flight from Denver to Honolulu</h1>
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
						<input class="form-control custom-form rounded-0" type="text" placeholder="Origin" name="origin" id="origin" value="DEN" autocomplete="off" required >
						<div id="success" class="search_result search_result1" style="position: absolute; z-index: 1;"></div>
						<button class="exchange"><i class="fa fa-exchange"></i></button>
						</div>
						<div class="col-md-6 col-12 pl-md-0 position-relative">
						<span class="t-lable">Destination</span>
						<input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" value="HNL" autocomplete="off" required>
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
            <h2 class="text-center mb-4">Beaches have been calling your name. Plan a trip from Denver to Honolulu.</h2>
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
                    <img src="assets/images/route/Denver-to-Honolulu.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Denver-to-Honolulu.jpg" class="d-block w-100" alt="Routes">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/images/route/Denver-to-Honolulu.jpg" class="d-block w-100" alt="Routes">
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
              <p>We have great news for you! Honolulu is welcoming tourists now. With proper testing, precautions, and vaccine rollout, you can now spend your summer holidays getting that long-overdue tan on the best in Honolulu. We know how important traveling is for you and therefore have curated the list of all major airlines flying from Denver to Honolulu.</p>
              <p>Discover the magic of beaches and sunsets in Honolulu. Keep scrolling for important tips to make the best of your trip from Denver to Honolulu.</p>

              <h3>Time to look at some essential information about flights from Denver to Honolulu</h3>
              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Distance</td>
                        <td>5381 km</td>
                      </tr>
                      <tr>
                        <td>Time Taken</td>
                        <td>7h 15 m</td>
                      </tr>
                      <tr>
                        <td>Time Difference</td>
                        <td>-4 hours</td>
                      </tr>
                      <tr>
                        <td>Best Airlines for Denver to Honolulu</td>
                        <td>United Airlines</td>
                      </tr>
                      <tr>
                        <td>Airport</td>
                        <td>Denver International Airport (DEN)<br/>
                        	Honolulu International Airport (HNL)
                    	</td>
                      </tr>
                      <tr>
                        <td>Cheapest Airlines </td>
                        <td>Southwest Airlines</td>
                      </tr>
                      <tr>
                        <td>Flights per week</td>
                        <td>19 flights per week</td>
                      </tr>
                      <tr>
                        <td>Cheapest Month</td>
                        <td>August</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->


              <h4>Airports in Honolulu and nearby areas and their distance from Central Honolulu</h4>

              <div class="row">
                <div class="col-12 col-md-12">
                  <table class="table table-bordered">
                    <tbody>
                      <tr>
                        <td>Airport</td>
                        <td>Distance from Central Honolulu</td>
                      </tr>
                      <tr>
                        <td>Honolulu International Airport</td>
                        <td>7 km</td>
                      </tr>
                      <tr>
                        <td>Pokakuloa Airport</td>
                        <td> 14 km</td>
                      </tr>
                      <tr>
                        <td>Oahu Airport</td>
                        <td>2 km</td>
                      </tr>
                      <tr>
                        <td>Kalaeloa Airport</td>
                        <td>22 km</td>
                      </tr>
                      <tr>
                        <td>Wahiawa Airport</td>
                        <td>28km</td>
                      </tr>
                      <tr>
                        <td>Hoolehua Airport</td>
                        <td>80km</td>
                      </tr>
                      <tr>
                        <td>Kalaupapa International Airport</td>
                        <td>92km</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->


              <h4>Things you should know before traveling from Denver to Honolulu</h4>

              <ul class="list-types">
                <li>The temperature on the planes tends to drop. We advise you to bring a light sweater or fleece in your purse.</li>
                <li>The government of the U.S has given a green signal to Honolulu to open up for leisure travels, but some restrictions are still in place. Learn about the latest COVID-19 travel advisories for your destination.</li>
                <li>Visit the CDC website to get the latest updates on the travel advisories, before booking a flight from Denver to Honolulu.</li>
                <li>Being flexible with your travel dates to Honolulu can land savings in your pockets.</li>
                <li>If adjusting your travel dates is not possible for you, then set the price alert on those travel dates.</li>
                <li>August is a low-season month for Honolulu, thus leading to a drop in ticket fares. To make a budget-friendly trip from Denver to Honolulu, book your flights in August.</li>
                <li>It is considered rude in Honolulu to pass by strangers without acknowledging them. Say a polite “Aloha” to the locals.</li>
                <li>Locals show their respect to mother nature by caring for it. They say “Malama ka ‘Aina, which is “take care of the land”.</li>
              </ul>
              <h4>Top 5 airlines for flights from Denver to Honolulu</h4>
              <p>We have compiled a list of the top 5 airlines and their price range that fly frequently from Denver to Honolulu. Have a look</p>


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
                        <td>United Airlines</td>
                        <td>200-280USD</td>
                      </tr>
                      <tr>
                        <td>Frontier Airlines</td>
                        <td>280-300USD</td>
                      </tr>
                      <tr>
                        <td>Delta Airlines</td>
                        <td>280-300USD</td>
                      </tr>
                      <tr>
                        <td>Southwest Airlines</td>
                        <td>200-250USD</td>
                      </tr>
                      <tr>
                        <td>American Airlines</td>
                        <td>250-290USD</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div><!--/row-->
              <p><strong>Note</strong>: The flight fares mentioned here are estimated prices. Since the pandemic, many airlines have made changes in their routes. Visit their individual website to learn more about their routes, flight timings, and travel classes.</p>

              <h5>Information about origin and destination</h5>
              <p><strong>Know about Denver</strong></p>
              <p>Denver proudly boasts the world’s natural wonders. It is also home to major sports teams, museums, and other attractions. Get a taste of nature in Denver Botanic Gardens or enjoy watching your favorite team play at Coors Field. Spend an evening understanding history at the Denver Museum of Nature and Science.</p>
              <p><strong>Know about Honolulu </strong></p>
              <p>Honolulu is one of the top destinations in Hawaii. It must be the concoction of splendid beaches, delicious local food, and lively locals. Aloha your way into the world of wonders. Explore places such as Diamond Head State Monument, Bishop Museum and have a quiet time at Waikiki beach. Learn from the locals how to live in the moment. Now is the perfect time to book a flight from Denver to Honolulu. Get exploring.</p>
              
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->
      </div><!--/container-->
    </section><!--/inner-page-section-->


@include('includes.footer')