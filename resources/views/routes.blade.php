@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Routes</title>

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
  min-height: 340px;
}
.popular-img {
  width: 100%;
  height: 250px;
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
.popular-routes-box h5 {
  color: #9a9a9a;
}
.popular-routes-box {
  padding: 15px 20px;
  position: relative;
  text-align: center;
}
.popular-routes-box h4 {
  color: #222222;
  font-size: 15px;
  border-bottom: 2px solid #f9bf08;
  padding: 5px 0px;
  display: inline-block;
}
/*------popular destination end------*/
</style>


<section class="banner-secs" style="background-image: url(assets/images/destination/banners.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <h1 class="b-head"><strong>Routes</strong></h1>
      </div>
    </div>
  </div>
</section>

<section class="popular-destinations">
  <div class="container">
    <div class="row mb-4">
         <div class="col-md-8 offset-md-2">
            <div class="rout-box text-center">
              <h2><strong>Popular Routes</strong></h2>
            </div>
         </div>
      </div><!--/row-->

    <div class="row">

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/miami-quito">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Quito-Miami.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Miami to Quito</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/los-angeles-shangai">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Shangai-to-LA.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Los Angeles to Shangai</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/las-vegas-denver">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Denver-Minneapolis.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Las Vegas to Denver</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/las-vegas-seattle">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Las-Vegas-to-Seattle.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Las Vegas to Seattle</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/los-angeles-christchurch">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Los-Angeles-to-Christchurch.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Los Angeles to Christchurch</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/denver-minneapolis">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Denver-to-Minneapolis.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Denver to Minneapolis</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/minneapolis-denver">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/minneapolis-denver.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Minneapolis to Denver</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/seattle-las-vegas">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Las-Vegas-to-Seattle.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Seattle to Las Vegas</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-tokyo">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(destination/assets/images/destination/new-york-to-paris.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from New York to Tokyo</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/chicago-hyderabad">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/chicago-hyderabad.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Chicago to Hyderabad</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/chicago-hongkong">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Chicago-Hongkong.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Chicago to Hongkong</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/new-york-rome">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Rome-to-New-York.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from New York to Rome</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="route/anchorage-san-diego">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/san-diego.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Anchorage to San Diego</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="route/denver-honolulu">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Denver-to-Honolulu.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Denver to Honolulu</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="route/las-vegas-san-diego">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/Las-Vegas-to-San-Diego.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Las Vegas to San Diego</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="route/atlanta-fort-lauderdale">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/atlanta-to-fort--lauderdale.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Atlanta to Fort Lauderdale</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="route/las-vegas-los-angeles">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/las-vegas-to-los-angeles.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Las Vegas to Los Angeless</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4">
        <a href="/route/anchorage-san-francisco">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(route/assets/images/route/San-Francisco.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Cheap flight from Anchorage to San Francisco</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

      <div class="col-md-4 col-12 mb-4 d-none">
        <a href="">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(destination/assets/images/destination/new-york-to-paris.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>text</strong></h4>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->

    </div><!--/row-->
  </div><!--/container-->
</section>

@include('includes.footer')