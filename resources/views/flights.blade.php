@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Flights</title>

@include('includes.header')

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
  text-align: center;
  font-size: 60px;
}
.overlay {
background-color: #00000047;
width: 100%;
height: 100%;
position: absolute;
top: 0px;
left: 0px;
}
/*-----/banner sections-----*/

/*------popular destination------*/
.popular-destinations {
  padding: 60px 0px;
  background-color: #fbfdff;
}
.popular-dest-box {
  border-radius: 5px;
  box-shadow: 0px 0px 15px #00000029;
  background-color: #ffffff;
  overflow: hidden;
  min-height: auto;
  position: relative;
}
.popular-img {
  width: 100%;
  height: 300px;
  transition: transform .4s;
  margin: 0 auto;
  text-align: center;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
.popular-dest-box:hover .popular-img {
  -ms-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.popular-routes-box {
  padding: 15px 20px;
  text-align: center;
  position: absolute;
  bottom: 0px;
  left: 0px;
  background-image: linear-gradient(transparent, #003d70);
  width: 100%;
}
.popular-routes-box h5 {
  color: white;
  font-size: 20px;
  text-shadow: 0px 0px 10px #000;
}
.col-md-3.col-12.mb-3 a {
  text-decoration: none;
}
.hover-box {
  display: none;
}
.popular-dest-box:hover .hover-box {
  display: block;
}
/*------popular destination end------*/
</style>


<section class="banner-secs" style="background-image: url(assets/images/destination/banners.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <h1 class="b-head"><strong>Cheap flights</strong></h1>
		@include('includes.form')
      </div>
    </div>
  </div>
</section>

<section class="popular-destinations">
  <div class="container">
    <div class="row mb-4">
         <div class="col-md-8 offset-md-2">
            <div class="rout-box text-center">
              <h2><strong>Popular Flights</strong></h2>
            </div>
         </div>
      </div><!--/row-->

    <div class="row">

      <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/SAL-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">New York City</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">San Salvador,El Salvador</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$347<sup>.98</sup></small></del> <strong>$158<sup>.14</sup></strong></h4>
                <p class="mb-1 text-white"><span>JFK</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>SAL</span></p>
                <p class="mb-1 text-white"><span>Mar 23 - Mar 29</span></p>
                <a href="https://tripdear.com/flight-search?origin=JFK&destination=SAL&departureDate=2022-03-23&returnDate=2022-03-29&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/CUN-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">New York City</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Cancun, Mexico</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$426<sup>.60</sup></small></del> <strong>$334<sup>.78</sup></strong></h4>
                <p class="mb-1 text-white"><span>JFK</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>CUN</span></p>
                <p class="mb-1 text-white"><span>Oct 04 - Oct 14</span></p>
                <a href="https://tripdear.com/flight-search?origin=JFK&destination=CUN&departureDate=2021-10-04&returnDate=2021-10-14&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/STI-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">New York City</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Santiago, Dominican Republic</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$352<sup>.45</sup></small></del> <strong>$346<sup>.71</sup></strong></h4>
                <p class="mb-1 text-white"><span>EWR</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>STI</span></p>
                <p class="mb-1 text-white"><span>Jun 29 - Jul 01</span></p>
                <a href="https://tripdear.com/flight-search?origin=EWR&destination=STI&departureDate=2021-06-29&returnDate=2021-07-01&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/MEX-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">San Francisco</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Mexico City, Mexico</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$421<sup>.44</sup></small></del> <strong>$352<sup>.62</sup></strong></h4>
                <p class="mb-1 text-white"><span>SFO</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>MEX</span></p>
                <p class="mb-1 text-white"><span>Aug 16 - Aug 24</span></p>
                <a href="https://tripdear.com/flight-search?origin=SFO&destination=MEX&departureDate=2021-08-16&returnDate=2021-08-24&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/BKK-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">Los Angeles</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Bangkok, Thailand</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$744<sup>.64</sup></small></del> <strong>$740<sup>.64</sup></strong></h4>
                <p class="mb-1 text-white"><span>LAX</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>BKK</span></p>
                <p class="mb-1 text-white"><span>Mar 21 - Mar 28</span></p>
                <a href="https://tripdear.com/flight-search?origin=LAX&destination=BKK&departureDate=2022-03-21&returnDate=2022-03-28&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/LON-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">Atlanta</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">London, United Kingdom</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$1,450<sup>.38</sup></small></del> <strong>$656<sup>.63</sup></strong></h4>
                <p class="mb-1 text-white"><span>ATL</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>LHR</span></p>
                <p class="mb-1 text-white"><span>Jul 22 - Jul 30</span></p>
                <a href="https://tripdear.com/flight-search?origin=ATL&destination=LHR&departureDate=2021-07-22&returnDate=2021-07-30&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/SGN-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">Los Angeles</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Ho Chi Minh City, Vietnam</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$670<sup>.06</sup></small></del> <strong>$624<sup>.07</sup></strong></h4>
                <p class="mb-1 text-white"><span>LAX</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>SGN</span></p>
                <p class="mb-1 text-white"><span>Nov 04 - Dec 02</span></p>
                <a href="https://tripdear.com/flight-search?origin=LAX&destination=SGN&departureDate=2021-11-04&returnDate=2021-12-02&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  
	  <div class="col-md-3 col-12 mb-3">
		 <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/flight/MNL-rx.jpg);"></div>
            <div class="popular-routes-box">
              <h5 class="mb-0 mt-0 text-center">Los Angeles</h5>
              <h5 class="mb-0 mt-0 text-center">to</h5>
              <h5 class="mb-0 mt-0 text-center">Manila, Philippines</h5>
              <div class="hover-box">
                <h4 class="mb-1 text-white"><del><small>$681<sup>.39</sup></small></del> <strong>$600<sup>.63</sup></strong></h4>
                <p class="mb-1 text-white"><span>LAX</span> <i class="fa fa-exchange ml-1 mr-1 text-white"></i> <span>MNL</span></p>
                <p class="mb-1 text-white"><span>Mar 28 - Apr 18</span></p>
                <a href="https://tripdear.com/flight-search?origin=LAX&destination=MNL&departureDate=2022-03-28&returnDate=2022-04-18&passenger=1&noofadults=1&children=0&infants=0&nonStop=true&class=Economy" class="orange-bg btn btn-warning btn-block text-white">Search Now</a>
              </div>
            </div>
          </div>
      </div><!--/col-md-3 col-12-->
	  

    </div><!--/row-->
  </div><!--/container-->
</section>

@include('includes.footer')