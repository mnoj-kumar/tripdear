@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Affiliate Network</title>

<style type="text/css">
.banner-secs {
  padding: 70px 0px 70px;
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
.affiliate-section-a {
	padding: 60px 0px;
	background-color: #003d70;
}
.aff-box {
  border: 1px solid #f9c922;
  padding: 30px;
  min-height: 240px;
}
.aff-box h4 {
  color: #f9c922;
}
/*--------affiliate-section-a-------*/

.trip-page-section{
	padding: 60px 0px;
}
</style>

@include('includes.header')

<section class="banner-secs" style="background-image: url(assets/images/affiliat-banner.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h1 class="b-head">A prominent affiliate Network for Worldwide Customers</h1>
        <p class="text-white">Score endless opportunities through affiliate marketing. <strong>Tripdeal.com</strong> is all set, to become the first top-notch meta-search affiliate network partner for travel.</p>
      </div>
    </div>
  </div>
</section>

<section class="affiliate-section-a">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-12 text-center mb-3">
				<div class="aff-box">
					<h4>Brands & Verticals</h4>
					<p class="text-white">Join the biggest network of esteemed travel brands and get access of perks through bookings, clicks, and ad revenue for hotels, flights, packages and cars.</p>
				</div>
			</div>
			<div class="col-md-4 col-12 text-center mb-3">
				<div class="aff-box">
					<h4>Customised Products</h4>
					<p class="text-white">Get world class service of customising the products that matches with your requirements. White label, widgets, deep links, API, search box and what’s more?</p>
				</div>
			</div>
			<div class="col-md-4 col-12 text-center mb-3">
				<div class="aff-box">
					<h4>Authentic Assistance</h4>
					<p class="text-white">The professional technical team is ready to assist you round the clock. From the step of Set-up to scalability, the team ensures flexibility.</p>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="trip-page-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-12 mb-4 text-center">
				<h2>How to Make Money?</h2>
				<p>A Few Steps to your Success:</p>
			</div>

			<div class="col-12 col-md-8 offset-md-2">
				<div class="row">
					<div class="col-md-6 col-12">
						<img src="assets/images/integrate-img.jpg" alt="Integrate" class="img-fluid">
					</div>
					<div class="col-md-6 col-12">
						<h4 class="mt-md-5 m-2">Integrate</h4>
						<p>Once you become the part of this marketing, go ahead with another step which is Integrate. The team helps you with this step in the effective way. </p>
					</div>
					
				</div><!--/row-->
				<div class="row">
					<div class="col-md-6 col-12">
						<h4 class="mt-md-5 m-2">Earn</h4>
						<p>Now it’s time to keep 50% commission in your pocket through Bookings, clicks and ad revenue for flights, packages, hotels and cars.</p></div>
					<div class="col-md-6 col-12">
						<img src="assets/images/earn-img.jpg" alt="Earn" class="img-fluid">
					</div>
				</div><!--/row-->
				<div class="row">
					<div class="col-md-6 col-12">
						<img src="assets/images/track-expand-img.jpg" alt="Track & Expand" class="img-fluid">
					</div>
					<div class="col-md-6 col-12">
						<h4 class="mt-md-5 m-2">Track & Expand</h4>
						<p>Examine your performance and total earnings of the year. Track & grow your business into next level.</p>
					</div>
				</div><!--/row-->
			</div><!--/col-12 col-md-8 offset-md-2-->
		</div><!--/row-->


	</div>
</section>

@include('includes.footer')