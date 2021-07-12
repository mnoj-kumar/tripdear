@extends('includes.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>tripdear.com | Client Testimonial</title>

<style type="text/css">
.banner-secs {
  padding: 60px 0px;
  position: relative;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
.b-head {
  color: #ffffff;
  font-size: 50px;
}
.overlay {
background-color: #255f7696;
width: 100%;
height: 100%;
position: absolute;
top: 0px;
left: 0px;
}
/*-----/banner sections-----*/
.trip-page-section{
	padding: 60px 0px;
}
.trip-client-reviews {
border-left: 5px solid #e3ebec;
padding: 20px;
border-radius: 10px;
}
@media (max-width: 425px) {
	.trip-client-reviews {
	border-left: 0px solid #e3ebec;
	border-top: 5px solid #e3ebec;;
	}
}
/*------------/top-review-box-------------*/
.top-review-box {
  background-color: #f4f4f4;
  padding: 50px 0px;
  }
.top-in-review-box {
  padding: 15px;
  background-color: #ffffff;
  border: 2px solid #eee;
  border-radius: 8px;
}
.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #04AA6D;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

</style>

@include('includes.header')

<section class="banner-secs" style="background-image: url(assets/images/trip-testimonial-banner.jpg);">
  	<div class="overlay"></div>
  	<div class="container">
	    <div class="row">
	      <div class="col-md-6 col-12">
	        <h1 class="b-head">Reviews we Earned!</h1>
	        <p class="text-white"><strong>Over all these years, working to give people a safe booking experience, TripDear has gained a hand full of Goodwill. The most important thig that we earned is a strong relationship with our users.</strong></p>
	      </div>
	    </div>
  	</div>
</section>

<section class="top-review-box">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-12">
				<div class="top-in-review-box">
					<span class="heading">User Rating</span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<p>4.1 average based on 254 reviews.</p>
					<hr style="border:3px solid #f1f1f1">
					
					<div class="row">
						<div class="col-md-12 col-12">
						<div class="side">
							<div>5 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-5"></div>
							</div>
						</div>
						<div class="side right">
							<div>150</div>
						</div>
						<div class="side">
							<div>4 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-4"></div>
							</div>
						</div>
						<div class="side right">
							<div>63</div>
						</div>
						<div class="side">
							<div>3 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-3"></div>
							</div>
						</div>
						<div class="side right">
							<div>15</div>
						</div>
						<div class="side">
							<div>2 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-2"></div>
							</div>
						</div>
						<div class="side right">
							<div>6</div>
						</div>
						<div class="side">
							<div>1 star</div>
						</div>
						<div class="middle">
							<div class="bar-container">
							<div class="bar-1"></div>
							</div>
						</div>
						<div class="side right">
							<div>20</div>
						</div>
						</div>
					</div><!--/row-->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="trip-page-section">
	<div class="container">
		<div class="trip-review-box  mb-3">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>Oscar Zamorano</strong></p>
					<p class="text-secondary font-13">rincipal Channel Consultant, HubSpot</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>It was the very first time when I have booked with TripDear.com & here I got the best booking experience. My booking process was so hassle-free.  Also, I got a discounted price for my flight booking. 100% Recommended!</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">First Time User!</span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div>

		<div class="trip-review-box mb-3">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>Mark Sabourin</strong></p>
					<p class="text-secondary font-13">Sponsorship Week</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>When I was looking lowest flight booking site I checked out TripDear.com. Here, I have got the best price as the site promise itself to offer the lowest price & it's completely true. Plus, there was no hassle in booking as the website is easy to use.</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">Very Satisfied!</span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/trip-review-box-->

		<div class="trip-review-box mb-3">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>Heather Spurrell</strong></p>
					<p class="text-secondary font-13">Coach</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>I have booked my flight ticket six times with TripDear.com. During this COVID era & New Normal, this website made my cancellation & rebooking process easy & hassle-free.</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">User Friendly!</span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/trip-review-box-->

		<div class="trip-review-box mb-3">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>Shawn Freeman</strong></p>
					<p class="text-secondary font-13">TWT Group Inc.</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>The website helps me to book my flight with full of ease. Also, I got a good booking price. Payment options are secured & trustable. I will book again with TripDear.com!</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">Good experience with TripDear.com!</span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/trip-review-box-->

		<div class="trip-review-box mb-3">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>Tim Byrnes</strong></p>
					<p class="text-secondary font-13">Sales & Marketing Professional</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>Quick booking process! Easy to book!! Good discount!!! Secure payment!!!!</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">Fully Recommended!! </span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/trip-review-box-->

		<div class="trip-review-box mb-3 d-none">
			<div class="row">
				<div class="col-md-2 col-12 text-center">
					<i class="fa fa-user-circle-o fa-4x blue-color"></i>
					<p class="mb-0"><strong>name</strong></p>
					<p class="text-secondary font-13">desination</p>
				</div>
				<div class="col-md-10 col-12">
					<div class="trip-client-reviews">
						<p>content</p>
						<p>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<i class="fa fa-star orange-color fa-lg"></i>
						<span class="ml-2">name</span>
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/trip-review-box-->

	</div>
</section>

@include('includes.footer')