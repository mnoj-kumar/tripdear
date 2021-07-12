@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ready to escape to a land where happiness and excitement are filled in the air? Book flights to Mexico and dive into a world of art, food, fun, and festivals.">
  <meta name="keywords" content="Flights to Mexico">
  <title>tripdear.com | Flights to Mexico</title>

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
          <h1 class="text-white"> Flights to Mexico </h1>
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
						<input class="form-control custom-form rounded-0" type="text" placeholder="Destination" name="destination" id="destination" value="MEX" autocomplete="off" required>
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
              <h2 class="text-center mb-4">Book Flights To Mexico And Prepare Yourself For An Unforgettable Time</h2>
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
            	<p>If you don’t know about Mexico you must be living under a rock. That’s okay. It's time you get to know about this glamorous destination. Mexico has been a favorite travel destination for decades now. Its beauty casts a spell on travelers and lures them in for an adventurous time. Mexico has a lot to offer in terms of music, entertainment, and tourist attractions. You can never have a dull time in the land of festivals. Read this blog and learn why you should book flights to Mexico right now.</p>
            	<p>We have covered all the details you need to know about the country and major airports before you decide to visit Mexico.</p>

              <h3>Let’s begin with the busiest airports operating flights to Mexico</h3>
			  <ul class="list-types">
                <li>Cancun International Airport</li>
                <li>Cozumel International Airport</li>
                <li>Del Bajjo International Airport</li>
                <li>Guadalajara International Airport</li>
                <li>Los Cabos International Airport</li>
                <li>Mazatlan International Airport</li>
                <li>Mexico City International Airport</li>
                <li>Monterrey International Airport</li>
                <li>Morelia International Airport</li>
                <li>Puerto Vallarta International Airport</li>
              </ul>
              <p>With such a popular destination, it is no surprise that many popular airlines operate flights to Mexico daily. The number has gone down since the pandemic hit but we are optimistic that soon the aviation industry will bounce back with more power.</p>

              <h4>List of airlines operating domestic and international flights to Mexico</h4>
              <ul class="list-types">
                <li>Aeromar</li>
                <li>Aermexico</li>
                <li>Air Canada</li>
                <li>American Airlines</li>
              </ul>

              <h4>Information about Mexico City International Airport</h4>
              <p>Mexico City International International Airport(Aeropuerto Internacional de la Ciudad de México) is the most popular airport in Mexico city. The IATA code for the airport is MEX. It serves Greater Mexico City and surrounding cities. MEX ranks 33 on the list of busiest airports in the world. The airport gives employment to 35,000 citizens every year. MEX is served by 30 domestic and international air carriers. It is the hub airport for airlines such as Aeromar, Interjet, and Volaris.</p>
              <p>The airport was declared to open for business on May 15, 1931. It is located in the Carranza area of Mexico City. MEX has two fully functioning terminals. There were plans for a third terminal but was canceled due to the low rate at which flights were arriving during the pandemic.</p>

              <h4>Why you should book flights to Mexico. And why will you regret it if you don’t</h4>
              <p><strong>Colors</strong> <br>The country is brimming with colors. The locals are fond of putting colorful clothes and accessories. It’s a visual treat to walk around and look at the houses painted in all sorts of colors. Cafes and restaurants have their own color scheme and none is dull, subtle, and sober. It feels like life is really lived in the streets of Mexico.</p>
              <p><strong>Ruins and Relics</strong> <br>The country has its own share of rich and interesting pasts. You can go ahead and get a taste of it in the architecture and archaeological ruins spread all over the country. Tulum has become a recent favorite among history buffs all over the globe. Visit the pyramids of Chichen Itza to realize the enormity of Mexico’s history.</p>
              <p><strong>Culture</strong> <br>It is so refreshing to see people so in love with their indigenous culture. You can see how much locals revere their culture and heritage by the way they dress in hand-woven textiles and how they talk and behave. From unique designs to colorful patterns, everything is fascinating for a foreign eye.</p>
              <p><strong>Music</strong> <br>How can we forget the addictive music of Mexico? The country beams with various genres of music. You can dance to the tunes of Mariachi to Modern rock and pop here. There is no limit to how much a tune can affect a person’s mood. Maybe this is why the locals are so vibrant and full of life.</p>
              <p><strong>Tequila</strong> <br>We advise taking a tour of the country to understand people’s love for Tequila and Mescal. The top cities where you can learn about the process and have a go at different flavors of Tequila and Mescal are Oaxaca and Jalisco. The country also specializes in making 100% agave-made Tequila. Go ahead, book flights to Mexico, and taste it yourself.</p>
              <p><strong>Local Spirit</strong> <br>People are friendly and ready to help foreigners. Mexicans do not mind taking casual breaks from time to time. You will never see them stressing over their job. They know how to take the edge off and live fully. They always have an assuring smile on their face even in times of adversities.</p>
              <p><strong>Lifestyle</strong> <br>When you book flights to Mexico you are making a conscious decision to slow down your overthinking brain and work on “Mexican “time. Many tourists have given a negative connotation to this laid-back lifestyle. Nothing could be farther from the truth. Mexican are not lazy,they just know their priorities. And stressing over nonsensical things is not one of them.</p>
              <p>This brings us to the end of our blog. We hope you were able to secure some useful information from it. Let us know how your trip to Mexico went. We will be waiting.</p>
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
                <p class="blue-color fares">Are you Looking For<br><span class="text-danger"> Cheap Flights to Mexico </span></p>
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
