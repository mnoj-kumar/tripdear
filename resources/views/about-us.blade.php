@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tripdear.com | About Us</title>

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
  background-color: #00000061;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
/*--------/banner-section----------*/
.content-section{
  padding: 50px 0px;
  background-color: #ffffff;
}
</style>

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/about-us.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h2 class="text-white text-center"><strong>About Us</strong></h2>
        </div>
      </div>
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12">
          <h1 class="bold"><strong>Behind The Story: Discover Our Value of Traveling!</strong></h1>
          <p class="text-justify font-14">To empower the travelers– Tripdear.com is here for all domestic & international flight booking. We offer a scope of best-value services fueled by innovation and nonstop customer support. Our site offered explorers hassle-free flight booking with a couple of clicks and comprehensive choices.</p>
          <p class="text-justify font-14">With untiring assurance, Tripdear.com proactively broadened deals, vacation, and bundle offer, to all travelers. So, one can travel anytime, anywhere, & anywhere they want to be.</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-5 col-12 mb-md-0 mb-3">
          <img src="assets/images/who-are-we.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
        <div class="col-md-7 col-12">
          <h3 class="bold"><strong>WHO ARE WE?</strong></h3>
          <p class="text-justify font-14">Tripdear.com is an online flight booking website where the team works with extreme consumer satisfaction by giving a scope of services at the most ideal costs. We are here to give a singular useful platform where one can explore all potential opportunities to travel advantageously. Our website helps all travel enthusiastic to explore the world with great offers availability. By offering the best offers- we keep travelers at the center of everything we do.</p>
          <p class="text-justify font-14">We began with a dream of empowering explorers from one side of the planet to the other. With our goal to help individuals to explore the world- our website is here to connect you with your favorite destination! </p>
        </div>
      </div><!--/row-->
      <div class="row mb-3">
        <div class="col-md-7 col-12">
          <h3 class="bold"><strong>HOW WE WORK</strong></h3>
          <p class="text-justify font-14">Our portal offers a wide range of deals and concisely gives essential information to ensure that booking on our website is simple and hassle-free. Here, we offer an extensive range of travel-related services considering the necessities of travelers voyaging. Similarly, we give the individuals the booking information they need to know before booking any of their favorite destinations. Moreover, our website is helpful and easy to use. With our 24*7 open services, you can contact our team anytime you want.</p>
          <p class="text-justify font-14">Our team has remained on top of things by consistently satisfying the always-changing needs of the quickly creating worldwide travel market, consistently building up as voyagers' favorite choices.</p>
        </div>
        <div class="col-md-5 col-12 mb-md-0 mt-3 mt-md-0">
          <img src="assets/images/how-we-work.jpg" class="img-fluid img-thumbnail" alt="">
        </div>
      </div><!--/row-->
      <div class="row">
        <div class="col-12 col-md-12">
          <h4 class="bold"><strong>OUR AIM</strong></h4>
          <p class="text-justify font-14">Our website "Tripdear.com" is an innovative platform in the travel sector aimed at providing the best services accompanied by a user-friendly website. We passionately believe in helping people travel more, explore the world, and experience diversity- we help to create a meaningful & hassle-free booking experience. We meet up every day to satisfy a promise of offering the absolute most extensive travel insight to travelers.</p>
          <p class="text-justify">We aim to make it easier for everyone to explore the world!</p>
        </div>
      </div>
    </div><!--/container-->
  </section>
  <!--/about-section-->

  @include('includes.footer')