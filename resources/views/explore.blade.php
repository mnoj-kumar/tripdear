@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>tripdear.com | Explore</title>

<style type="text/css">
  section.banner-section{
  padding: 50px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
}
.black-overlay {
  background-color: rgba(0, 0, 0, 0.2);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
.form-section {
  padding: 15px;
  background-color: #10366d85;
  position: relative;
  /*margin-top: 1.5em;*/
}
button.exchange {
  position: absolute;
  top: 10px;
  right: -13px;
  z-index: 1;
  border: 0px;
  background-color: #f9bf08;
  color: #ffffff;
  border-radius: 20px;
  cursor: pointer;
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
  font-size: 11px;
  left: 32px;
  top: 5px;
}
/*--------/banner-section----------*/


section.section-b {
  background-color: #ffffff;
  padding: 30px 0px;
}
.d-nation {
  height: 350px;
  width: 100%;
  background-size: cover;
  background-position: center, center;
  border-radius: 10px;
  padding: 10px;
  position: relative;
}
.d-nation-a {
  height: 710px;
  width: 100%;
  background-size: cover;
  background-position: center, center;
  border-radius: 10px;
  padding: 10px;
  position: relative;
}
.o-lay {
  background-color: #00193f94;
  background: linear-gradient(to top, #010714b8, #0744bc00);
  width: 100%;
  height: 100%;
  top: 0px;
  left: 0px;
  position: absolute;
  border-radius: 10px;
}
.Booking-box {
  width: 94%;
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: 20px;
}
.city-name {
  font-size: 15px;
}
.d-name {
  position: relative;
  display: inline-block;
  left: 15px;
  top: 30px;
  padding: 2px 0px;
  border-bottom: 2px solid #f9bf08;
}
.d-name h4 {
  font-size: 18px;
}
/*----------/section-b----------*/
.exp-section-a{
	padding: 50px 0px;
	background-color: #fff;
}
.exp-content-box {
  border-left: 3px solid #f9bf08;
  padding: 15px;
  min-height: 153px;
  box-shadow: 0px 0px 10px #00000029;
  border-radius: 5px;
  background-color: #ffffff;
}
/*-------/exp-section-a-----*/
section.exp-section-b {
  padding: 50px 0px;
  background-color: #f2f2f2;
}
.exp-c-box {
  padding: 15px;
  min-height: 200px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px #0000003b;
  border: 1px solid #fff;
}
/*-------/exp-section-b-----*/
</style>

@include('includes.header')

<section class="banner-section" style="background-image: url(assets/images/home-banner2.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      @include('includes.form')
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="exp-section-a">
  	<div class="container">
  		<div class="row">
  			<div class="col-12 col-md-4">
  				<div class="exp-content-box">
            <h4>Cheap Flights to Asia</h4>
  					<p class="mb-0 text-justify">Don’t forget to pack your camera to captures breathtaking & magnificent views during your Asian trip. Our Cheap flights to Asia are ready to fuel your journey!</p>
  				</div>
  			</div>
  			<div class="col-12 col-md-4">
  				<div class="exp-content-box">
            <h4>Cheap Flights to Europe</h4>
  					<p class="mb-0 text-justify">Flights to Europe will give you a lifetime experience. With the easy booking, explore the magical urban areas that are worth exploring!</p>
  				</div>
  			</div>
  			<div class="col-12 col-md-4">
  				<div class="exp-content-box">
            <h4>Cheap Domestic Flights</h4>
  					<p class="mb-0 text-justify">We are offering you the opportunity to explore more domestic destinations within your reach-avail an excellent price for all your flight booking with us!</p>
  				</div>
  			</div>
  		</div><!--/row-->
  	</div>
  </section>

  <section class="exp-section-b">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 mb-4">
          <h2 class="text-center">Vacation Packages</h2>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center orange-bg">
            <h4 class="text-white">Romantic Getaway Need</h4>
            <p class="mb-0 text-white">Beat the lockdown blues with your loved one & plan a Romantic Getaway with us! Don’t wait anymore- and exotic destination awaits you!</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center blue-bg">
            <h4 class="text-white">Family Travel</h4>
            <p class="mb-0 text-white">Get closer to your loved ones by planning your family trip to one of your favorite destinations. Keep scrolling until you find the one! We will get you going within your budget! </p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center orange-bg">
            <h4 class="text-white">Spring Vacations</h4>
            <p class="mb-0 text-white">Exhilarating water sports & popular sunrise trek awaits you! Plan your Spring Vacation & explore all the wonders of the world during your Spring trip! </p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center blue-bg">
            <h4 class="text-white">International Travel</h4>
            <p class="mb-0 text-white">International travel return!!! We are ready to serve you to your destination wherever you want to fly. What are you waiting for? Check out our vacation package for better savings!</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center orange-bg">
            <h4 class="text-white">Student Tours</h4>
            <p class="mb-0 text-white">Student Tours Holidays that combine learning with enjoyment! We offer a variety of destinations in our Student Tour package that will make your vacation more enjoyable!!!</p>
          </div>
        </div>
        <div class="col-12 col-md-4 mb-3">
          <div class="exp-c-box text-center blue-bg">
            <h4 class="text-white">Worcation</h4>
            <p class="mb-0 text-white">Making people love their job!!! Stay connected to your work while you are on vacation!!! Our ultimate vacation package gives you the perfect blend of leisure & productive time!</p>
          </div>
        </div>
      </div><!--/row-->
    </div>
  </section>

  <section class="section-b">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 mb-4">
          <h2 class="text-center"><strong>Explore Popular Cities</strong></h2>
        </div>
        <div class="col-md-3 col-12 pr-md-1 d-none">
          <a href="#">
            <div class="d-nation-a mb-2" style="background-image: url(assets/images/denver.jpg);">
              <div class="o-lay"></div>
              <div class="d-name">
                <h4 class="text-white mb-0">Denver</h4>
              </div>
              <div class="Booking-box">
                <div class="row">
                  <div class="col-12 text-center">
                    <!-- <h4 class="city-name text-white">City in Denver</h4> -->
                  </div>
                  <div class="col-12">
                    <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                  </div>
                </div>
              </div>
            </div><!--/d-nation-->
          </a>
        </div>

        <div class="col-md-12 col-12">
          <div class="row mb-1">
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/Los-Angeles.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">Los Angeles</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">City in Los Angeles</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/Chicago.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">Chicago</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">City in Chicago</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/San-Fransico.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">San Fransico</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">Country in San Fransico</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
          </div><!--/row-->

          <div class="row">
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/new-york.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">New York</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">City in New York</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/Las-Vegas.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">Las Vegas</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">City in Las Vegas</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
            <div class="col-md-4 col-12">
              <a href="/cities">
                <div class="d-nation mb-2" style="background-image: url(assets/images/Cancun.jpg);">
                  <div class="o-lay"></div>
                  <div class="d-name">
                    <h4 class="text-white mb-0">Cancun</h4>
                  </div>
                  <div class="Booking-box">
                    <div class="row">
                      <div class="col-12 text-center">
                        <!-- <h4 class="city-name text-white">City in Cancun</h4> -->
                      </div>
                      <div class="col-12">
                        <button type="button" class="white-btn-sm btn-block">BOOK FLIGHTS</button>
                      </div>
                    </div>
                  </div>
                </div><!--/d-nation-->
              </a>
            </div>
          </div><!--/row-->
        </div>
      </div><!--/row-->

      <style type="text/css">
        .g-touch {
          background-color: #eee;
          padding: 10px 15px;
          border-radius: 6px;
        }
      </style>
      <div class="row mt-md-4 mt-2">
        <div class="col-12 col-md-12">
          <div class="g-touch text-center"><h4 class="mt-0 mb-0"><i class="fa fa-volume-control-phone orange-color"></i> Call <strong><a href="tel:(888) 481-1227" class="text-dark">(888) 481-1227</a></strong> <span class="orange-color">for deals too good to be published.</span></h4></div>
        </div>
      </div><!--/row-->

    </div><!--/container-->
  </section>
  <!--/section-b-->

  @include('includes.footer')