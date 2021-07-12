@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>tripdear.com | Welcome</title>

<style type="text/css">
  section.banner-section{
  padding: 50px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  min-height: 400px;
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

section.section-a {
  background-color: #fafcff;
  padding: 20px 0px;
}
/*----------/section-a----------*/

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
.g-touch {
  background-color: #eee;
  padding: 10px 15px;
  border-radius: 6px;
}
</style>
@include('includes.header')

<section class="banner-section" style="background-image: url(assets/images/home-banner2.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h1 class="text-white text-center"><b>Comfortable and</b> Convenient Bookings</h1>
        </div>
      </div><!--/row-->

      @include('includes.form')

      <!--/form-section-->
      <div class="row mt-4">
        <div class="col-md-5 col-12">
          <div class="row">
            <div class="col-md-6 col-6 text-center">
              <h5 class="text-white mb-1">World</h5>
              <p class="text-white mb-1">Flight</p>
              <p><i class="fa fa-map text-white fa-2x"></i></p>
            </div>
            <div class="col-md-6 col-6 text-center">
              <h5 class="text-white mb-1">Ten years</h5>
              <p class="text-white mb-1">Experience</p>
              <p><i class="fa fa-pagelines text-white fa-2x"></i></p>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12">
          <div class="row">
            <div class="col-md-4 col-4 text-center">
              <h5 class="text-white mb-1">100 000</h5>
              <p class="text-white mb-1">Customers</p>
              <p><i class="fa fa fa-users text-white fa-2x"></i></p>
            </div>
            <div class="col-md-4 col-4 text-center">
              <h5 class="text-white mb-1">Safe</h5>
              <p class="text-white mb-1">Payment</p>
              <p><i class="fa fa-shield text-white fa-2x"></i></p>
            </div>
            <div class="col-md-4 col-4 text-center">
              <h5 class="text-white mb-1">Warranty</h5>
              <p class="text-white mb-1">Lowest Price</p>
              <p><i class="fa fa-trophy text-white fa-2x"></i></p>
            </div>
          </div>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-12 ">
          <div class="media">
            <img src="assets/images/check.png" class="mr-1" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-0 bold">Simple & Easy</h5>
              <p class="mb-0 font-12">No more waiting to get your e-tickets</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 ">
          <div class="media">
            <img src="assets/images/check.png" class="mr-1" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-0 bold">We Know Flights</h5>
              <p class="mb-0 font-12">Be served by flight experts</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 ">
          <div class="media">
            <img src="assets/images/check.png" class="mr-1" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-0 bold">Customer support</h5>
              <p class="mb-0 font-12">Multilingual customer support service</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 ">
          <div class="media">
            <img src="assets/images/check.png" class="mr-1" alt="...">
            <div class="media-body">
              <h5 class="mt-0 mb-0 bold">Save More</h5>
              <p class="mb-0 font-12">Lowest price guarantee with incredible.. <span class="d-none"> deals </span></p>
            </div>
          </div>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/section-a-->


  <style type="text/css">
    .covid-box {
    background-color: #f2f3f9;
    padding: 30px 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 2px #0000004f;
  }
  </style>
  <section class="section-b">
    <div class="container mb-4">
      <div class="covid-box">
        <div class="row">
          <div class="col-12 col-md-6">
            <h3 class="mt-md-2 mt-0"><strong>Get COVID-19 Related Info for Your Next Trip </strong></h3>
            <p><strong>Before you plan your travel, do check the COVID-19 related travel restrictions and quarantine info.</strong></p>
            <p class="mb-0"><a href="covid-travel" class="btn orange-bg btn-sm text-white">Get Travel Updates here</a></p>
          </div>

          <div class="col-12 col-md-6">
            <img src="assets/images/destination/maps.png" alt="Get COVID-19 Related Info for Your Next Trip" class="img-fluid">
          </div>
        </div><!--/row-->
      </div>
    </div><!--/container-->


    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 mb-4">
          <h2 class="text-center"><strong>Favorite US Cities</strong></h2>
        </div>
        <div class="col-md-3 col-12 pr-md-1 d-md-block d-none">
          <a href="cities">
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

        <div class="col-md-9 col-12 pl-md-1">
          <div class="row mb-1">
            <div class="col-md-4 col-12 pr-md-1">
              <a href="cities">
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
            <div class="col-md-4 col-12 pr-md-1 pl-md-1">
              <a href="cities">
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
            <div class="col-md-4 col-12 pl-md-1">
              <a href="cities">
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
            <div class="col-md-4 col-12 pr-md-1">
              <a href="cities">
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
            <div class="col-md-4 col-12 pr-md-1 pl-md-1">
              <a href="cities">
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
            <div class="col-md-4 col-12 pl-md-1">
              <a href="cities">
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
      <div class="row mt-md-4 mt-2">
        <div class="col-12 col-md-12">
          <div class="g-touch text-center"><h4 class="mt-0 mb-0"><i class="fa fa-volume-control-phone orange-color"></i> Call <strong><a href="tel:(888) 481-1227" class="text-dark">(888) 481-1227</a></strong> <span class="orange-color">for deals too good to be published.</span></h4></div>
        </div>
      </div>
    </div><!--/container-->
  </section>
  <!--/section-b-->

<style type="text/css">
.popular-routes {
  padding: 40px 0px;
  background-color: #fbfdff;
  margin-top: 3em;
}
.popular-desti-box {
  width: 100%;
  height: 400px;
  transition: transform .4s;
  margin: 0 auto;
  text-align: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.popular-desti-box:hover .popular-box {
  position: absolute;
  bottom: 3em;
}
.popular-box {
  padding: 15px 50px;
  position: absolute;
  width: 100%;
  left: 0px;
  bottom: 0;
  transition: 0.3s;
}
.popular-box h2 {
  text-shadow: 0px 0px 10px #000;
}
/*------popular routes------*/
</style>

  <section class="popular-routes">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-8 offset-md-2">
          <div class="desctinations-c-box text-center">
            <h2><strong>Top Destinations</strong></h2>
          </div>
        </div>
      </div><!--/row-->

      <div class="row">
        <div class="col-md-4 col-12 mb-4">
          <a href="/route/chicago-hongkong" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/bangkok.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Cheap flight from Chicago to Hongkong</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->

        <div class="col-md-4 col-12 mb-4">
          <a href="/route/new-york-tokyo" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/Africa.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Cheap flight from New York to Tokyo</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->

        <div class="col-md-4 col-12 mb-4">
          <a href="/route/los-angeles-shangai" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/Asia.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Cheap flight from Los Angeles to Shangai</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->


        <div class="d-none">
        <div class="col-md-4 col-12 mb-4">
          <a href="#" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/USA.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Paris Vacation Travel</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->
        <div class="col-md-4 col-12 mb-4">
          <a href="#" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/Latin-America.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Southwest States (Ex Los Angeles)</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->
        <div class="col-md-4 col-12 mb-4">
          <a href="#" class="text-white">
            <div class="popular-desti-box" style="background-image: url(assets/images/destination/Middle-East.jpg);">
              <div class="popular-box">
                <h2 class="text-white"><strong>Eastern Discovery (Start New Orleans)</strong></h2>
                <p>Read More</p>
              </div>
            </div>
          </a>
        </div><!--/col-md-4 col-12-->
      </div><!--/d-none-->

      </div><!--/row-->
    </div>
  </section>
  <!--/popular-routes-->



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
 
</style>

<!-- Modal -->
<div class="modal-dialog modal-dialog-centered">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header blue-bg p-2">
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="Special-offers">
            <div class="row">
              <div class="col-md-12 mb-3 text-center">
                <h3 class="t-bold blue-color">EXCLUSIVE CALL ONLY DEALS</h3>
                <h3>Upto <span class="t-bold orange-color">50%*</span> OFF on Flights</h3>
              </div>
              <div class="col-md-8 offset-md-2 col-12 mb-2">
                <div class="callbtn">
					<a href="tel:(888) 481-1227" class="blue-btn-lg btn-block blue-bg t-bold"><i class="fa fa-phone" style="padding:0px 4px" aria-hidden="true"></i>(888) 481-1227</a>
				</div>
              </div>
              <div class="col-md-12 mt-4 text-center">
                <h5><i class="fa fa-info-circle blue-color fa-lg"></i> <span class="orange-color t-bold"> Unpublished Fares </span> <span class="blue-color">for both International & Domestic Flights</span></h5>
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