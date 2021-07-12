@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tripdear.com | Vacation Packages</title>

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
.black-overlay {
  background-color: #006fa4c4;
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
   .page-heading {
    text-align: center;
    margin-bottom: 30px;
   }
   .page-heading h2 {
    font-weight: 600;
    font-size: 35px;
    margin-top: 0px;
    margin-bottom: 0px;
    display: inline-block;
    border-bottom: 3px solid #f9a315;
    padding-bottom: 5px;
   }
   .in-content-box p {
    font-weight: 300;
    letter-spacing: 0.5px;
    text-align: justify;
    font-size: 15px;
   }
   .in-content-box {
   box-shadow: 0px 0px 10px #00000024;
   padding: 15px 30px;
   margin-bottom: 15px;
   margin-top: 10px;
   border-top: 3px solid #f9bf08;
   border-bottom: 2px solid #1a5586;
   }
   .banner-box {
    padding: 10px;
    box-shadow: 0px 0px 10px #00000024;
   }
   .media-object {
    width: 55px;
    height: 55px;
    border-radius: 30px;
   }
   .media-heading {
    margin-top: 20px;
   }
   .media.md-box {
    box-shadow: 0px 0px 10px #00000024;
    padding: 5px;
    border-right: 3px solid #f9a315;
   }
   ol.numeric li {
    font-weight: 300;
    letter-spacing: 1px;
    text-align: justify;
  }
  ul.list-types {
    padding-left: inherit;
  }
  ul.list-types li {
    list-style: disc !important;
    font-weight: 300;
    letter-spacing: 0.5px;
    text-align: justify;
    font-size: 15px;
  }
  table.table.table-bordered {
    font-size: 15px;
    font-weight: 300;
    letter-spacing: 0.5px;
  }
</style>


@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/destination/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white"><strong>Grab the best Vacation Packages Deals for an Amazing Holiday at Tripdear.com</strong></h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="inner-page-section">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-12">
               <div class="in-content-box">
                <img src="assets/images/Vacation-Packages.jpg" class="img-fluid mb-3" alt="destination">
                  <h2><strong>Introduction</strong></h2>
                  <p>Who does not love taking a vacation? I believe everyone does. With a limited income it becomes difficult at times to travel looking at the expense that comes with it. Cutting down your travel expenses might really help you get to the destination you’ve always dreamt of. Travelling makes one a better person by filling positivity. Vacation packages are the best thing to book for your travel. They offer a lot other benefits that help you save money and enjoy to the fullest. When you book vacation packages with tripdear.com time is saved, money is saved and the effort of booking everything seperately is saved along with other benefits that come along.</p>

                  <h3><strong>Varied Vacation Packages</strong></h3>
                  <p>Tripdear.com offers a variety of different packages for different occasions. There are packages available for groups, family, couples etc. There are also special honeymoon packages for newly wed couples. Customers can also customize packages according to their choice of destination, duration and budget. There are also special packages during summer vacations, Christmas and new year holidays that offer great benefits to the customers. Grab great deals and discounts on packages.</p>
                  <p>There’s a list of destinations to select from according to your mood. There are destinations you can explore with friends that have adventure activities and fun, destinations for short trips, stay vacations, domestic destinations, international destinations, etc. You’ll also see a list of destinations most preferred by people, famous honeymoon destinations, family vacation destinations etc. </p>
                  <p>Add the destination of your choice and different packages will be shown from where you can choose the most appropriate one according to your needs.</p>
                  <p>Packages that you will get at Tripdear.com are:-</p>

                  <ul class="list-types">
                    <li>Honeymoon Packages</li>
                    <li>Family Packages</li>
                    <li>Beach Packages</li>
                    <li>Hill Station Packages</li>
                    <li>Adventure Tour Packages</li>
                  </ul>

                  <h4><strong>Benefits that come along with Vacation Packages</strong></h4>
                  <ul class="list-types">
                    <li>You get absolute value for money. Vacation packages save you a lot of money. </li>
                    <li>The package deals are excusive and not found anywhere else.</li>
                    <li>Get what you paid for. The agents take care of everything suppose if a flight is cancelled they will take the pain of booking another flight for you.</li>
                    <li>Book all-inclusive packages to save a huge amount. They are customized to cut cost and offer major benefits to the customers.</li>
                    <li>Packages most of the times include flights, accommodation, meals and even entertainment in some packages.</li>
                    <li>Book a package and stay away from the stress that comes with planning a trip. </li>
                    <li>Packages are more convenient and hassle-free.</li>
                    <li>Get luxury holidays booked at much lower prices by booking your travel packages.</li>
                  </ul>

                  <h5><strong>Assistance regarding packages</strong></h5>
                  <p>Get all sort of assistance for vacation packages at tripdear.com. They have a team dedicated to cater the needs of the customers offering discounts and deals along with helping the customers with detailed information about the particular destination and the inclusions.</p>
                  <p>Book your holidays at much affordable fares, get agents to help you with all your queries against the destination, fares, terms and conditions, variety of options and any other information.</p>
                  <p>Connect with the customer support team that is available round the clock to assist their customers and provide satisfaction to them. </p>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

   @include('includes.footer')