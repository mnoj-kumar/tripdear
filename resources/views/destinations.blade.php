@extends('includes.app')
@section('content')
<div class="loading" style="display: flex; justify-content: center; width: 100%;height: 100%;background: white; position: fixed; z-index: 10;">
  <img class="loaderImg" style="width:120px; align-self: center" src="{{ asset('assets/images/loader.gif') }}" alt="Loading">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Destinations</title>

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
/*-----banner sections-----*/
.destination-sec {
  margin-top: 2em;
}
 .main-box {
  min-height: 180px;
  width: 100%;
  position: relative;
  overflow: hidden;
  margin-bottom: 15px;
  border-radius: 20px;
}
.main-box2 {
  min-height: 376px;
  width: 100%;
  position: relative;
  overflow: hidden;
  margin-bottom: 0px;
  border-radius: 20px;
}
.blog-box {
position: absolute;
width: 100%;
height: 100%;
transition: transform .4s;
margin: 0 auto;
text-align: center;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
border-radius: 20px;
}
.main-box:hover .blog-box {
-ms-transform: scale(1.2); /* IE 9 */
-webkit-transform: scale(1.2); /* Safari 3-8 */
transform: scale(1.2); 
}
.main-box2:hover .blog-box {
-ms-transform: scale(1.2); /* IE 9 */
-webkit-transform: scale(1.2); /* Safari 3-8 */
transform: scale(1.2); 
}
.dest-overlay {
background-color: #00000047;
width: 100%;
height: 100%;
position: absolute;
top: 0px;
left: 0px;
text-align: center;
z-index: 1;
padding: 15px;
}
.dest-overlay2 {
background-color: #00000047;
width: 100%;
height: 100%;
position: absolute;
top: 0px;
left: 0px;
text-align: center;
z-index: 1;
padding: 100px 15px;
}
.dest-overlay2:hover, .dest-overlay:hover {
background-color: #f9bf08ab;
}
.dest-overlay2 h2, .dest-overlay h2 {
color: #fff;
font-family: sans-serif;
font-weight: 600;
font-size: 40px;
}
.dest-overlay2 p, .dest-overlay p{
color: #fff;
font-family: serif;
font-weight: 600;
}

.desctinations-c-box {
text-align: center;
margin-bottom: 3em;
}
.desctinations-c-box h2 {
font-size: 45px;
}

/*------popular destination------*/
.popular-destinations {
  padding: 60px 0px;
  background-color: #fbfdff;
  margin-top: 3em;
}
.popular-dest-box {
  border-radius: 5px;
  box-shadow: 0px 0px 15px #00000029;
  background-color: #ffffff;
  overflow: hidden;
  min-height: 360px;
  margin-bottom: 2em;
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
}
.popular-routes-box h4 {
  color: #222222;
  font-size: 15px;
  border-bottom: 2px solid #f9bf08;
  padding: 5px 0px;
  display: inline-block;
}
.popular-routes-box p {
  color: #1a5586;
  font-size: 14px;
  letter-spacing: 0.5px;
  margin-bottom: 0px;
}
/*------popular destination end------*/
</style>

@include('includes.header')

<section class="banner-secs" style="background-image: url(assets/images/bg-destinations.jpg);">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <h1 class="b-head"><strong>Destination</strong></h1>
      </div>
    </div>
  </div>
</section>

<section class="destination-sec">
   <div class="container">
      <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="desctinations-c-box text-center">
              <h2>Top Destinations</h2>
              <p>Lorem ipsum dolor sit amet, ad mea porro integre, feugiat efficiantur vis eu, te sit illum dolorum. Fugit scriptorem mea at. Ad eros invenire incorrupte nam, vim in mazim scripserit.</p>
            </div>
         </div>
      </div><!--/row-->

      <div class="row">
        <div class="col-12 col-md-6 pl-zero pr-zero">
          <a href="#">
            <div class="main-box2">
               <div class="blog-box" style="background-image: url(assets/images/destination/dubai.jpg);">
               </div>
               <div class="dest-overlay2">
                  <h2 class="mt-3">Dubai</h2>
                  <p><strong>Explore the Beauty</strong></p>
               </div>
            </div>
          </a>
         </div><!--/col-12 col-md-6-->

         <div class="col-12 col-md-3">
          <a href="#">
            <div class="main-box">
               <div class="blog-box" style="background-image: url(assets/images/destination/bangkok.jpg);">
               </div>
               <div class="dest-overlay">
                  <h2 class="mt-3">Bangkok</h2>
                  <p><strong>Explore the Beauty</strong></p>
               </div>
            </div>
          </a>
          <a href="#">
              <div class="main-box">
                <div class="blog-box" style="background-image: url(assets/images/destination/berlin.jpg);">
              </div>
               <div class="dest-overlay">
                  <h2 class="mt-3">Berlin</h2>
                  <p><strong>Explore the Beauty</strong></p>
               </div>
            </div>
          </a>
         </div><!--/col-12 col-md-3-->

         <div class="col-12 col-md-3">
          <a href="#">
            <div class="main-box">
               <div class="blog-box" style="background-image: url(assets/images/destination/paris.jpg);">
               </div>
               <div class="dest-overlay">
                  <h2 class="mt-3">Paris</h2>
                  <p><strong>Explore the Beauty</strong></p>
               </div>
            </div>
          </a>
          <a href="#">
            <div class="main-box">
               <div class="blog-box" style="background-image: url(assets/images/destination/singapore.jpg);">
               </div>
               <div class="dest-overlay">
                  <h2 class="mt-3">Singapore</h2>
                  <p><strong>Explore the Beauty</strong></p>
               </div>
            </div>
          </a>
         </div><!--/col-12 col-md-3-->
      </div><!--/row-->
   </div><!--/container-->
</section>


<section class="popular-destinations">
  <div class="container">
    <div class="row">
         <div class="col-md-8 offset-md-2">
            <div class="desctinations-c-box text-center">
              <h2>Popular Destinations</h2>
              <p>Lorem ipsum dolor sit amet, ad mea porro integre, feugiat efficiantur vis eu, te sit illum dolorum. Fugit scriptorem mea at. Ad eros invenire incorrupte nam, vim in mazim scripserit.</p>
            </div>
         </div>
      </div><!--/row-->

    <div class="row">
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/bangkok.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>American Parks Trail end Rapid City</strong></h4>
              <p>5 hours - Paris</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/Africa.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>New York: Museum of Modern Art</strong></h4>
              <p>7 hours - Paris</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/Asia.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Los Angeles to San Francisco Express</strong></h4>
              <p>8 hours - Paris</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/USA.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Paris Vacation Travel</strong></h4>
              <p>1 hour - New York, United States</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/Latin-America.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Southwest States (Ex Los Angeles)</strong></h4>
              <p>7 hours - New York, United States</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
      <div class="col-md-4 col-12">
        <a href="#">
          <div class="popular-dest-box">
            <div class="popular-img" style="background-image: url(assets/images/destination/Middle-East.jpg);"></div>
            <div class="popular-routes-box">
              <h4><strong>Eastern Discovery (Start New Orleans)</strong></h4>
              <p>3 hours - New York, United States</p>
            </div>
          </div>
        </a>
      </div><!--/col-md-4 col-12-->
    </div><!--/row-->
  </div><!--/container-->
</section>


@include('includes.footer')