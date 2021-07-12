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
  <title>Tripdear | Dallas to Auckland</title>
</head>

@include('includes.header')

  <section class="banner-section" style="background-image: url(../assets/images/destination/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white"><strong>Dallas to Auckland</strong></h1>
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
                <img src="assets/images/destination/dallas-to-auckland.jpg" class="img-fluid mb-3" alt="destination">
                  <p>Everyone deserves to take a break and go on a vacation. Travel to beautiful destinations for your vacation to rejuvenate yourself and take a break from the everyday hustle. Travelling relaxes your mind and body that helps in staying positive.</p>
                  <p>Plan your next holiday in Auckland a preferred tourist destination. Explore beautiful places to visit and perform thrilling adventure activities to make your trip worth a while. Book your flights from Dallas to Auckland to spend a relaxing vacation in the laps of nature.</p>

                  <h2><strong>Route Information for Dallas to Auckland Flights</strong></h2>
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Distance</td>
                            <td>7446 miles</td>
                          </tr>
                          <tr>
                            <td>Time Taken</td>
                            <td>13hours 55minutes</td>
                          </tr>
                          <tr>
                            <td>Time Difference</td>
                            <td>-17hours (GMT-5)</td>
                          </tr>
                          <tr>
                            <td>Best Airlines</td>
                            <td>Qantas</td>
                          </tr>
                          <tr>
                            <td>Origin Airport</td>
                            <td>Dallas, Fort Worth International Airport</td>
                          </tr>
                          <tr>
                            <td>Destination Airport</td>
                            <td>Auckland Airport</td>
                          </tr>
                          <tr>
                            <td>Flights per week</td>
                            <td>16</td>
                          </tr>
                          <tr>
                            <td>Cheapest Month</td>
                            <td>January</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h3><strong>Tips to follow before you book your travel from Dallas to Auckland</strong></h3>
                  <ul class="list-types">
                    <li>Dallas to Auckland is a long haul flight so plan things to entertain yourself on board. </li>
                    <li>To prevent the jetlag situation try to take proper sleep and drink lots of water. </li>
                    <li>Advance flight bookings will help you save money. </li>
                    <li>Flight fares are usually high during the peak seasons months from December to February and down during the low season month of April. </li>
                    <li>Book your flights at least 60 days or 3 weeks prior to the departure to get affordable fares. </li>
                    <li>Peak season month to travel on this route is December and low season month is January. Peak seasons are slightly expensive so travel accordingly. </li>
                    <li>Connecting flights will come pocket friendly on this route. </li>
                    <li>You can also book a low cost carrier or a luxury carrier according to your budget as there are a variety of airlines available on this route. </li>
                  </ul>

                  <h4><strong>Airlines for Dallas to Auckland(Round Trip):-</strong></h4>
                  <ul class="list-types">
                    <li>Korean Ai- $3073</li>
                    <li>United Airlines- $2113</li>
                    <li>Fiji Airways- $2215</li>
                    <li>Emirates- $2896</li>
                    <li>Qatar Airways- $3146</li>
                  </ul>

                  <h5><strong>About Dallas</strong></h5>
                  <p>Dallas is the largest city in the U.S. state of Texas. Dallas is the commercial and cultural hub of the region. Dallas is renowned for its Downtown’s sixth floor museum, Dallas Museum of art and Crow collection of Asian Art. The famous Nasher Sculpture centre has contemporary sculptures. It is also known for the famous sports team Dallas Cowboys. The famous Dallas TV show is another attraction of the city. There are various places to visit and things to explore in Dallas that one cannot get bored of. Some of the top visited tourist attractions in Dallas are Dallas Zoo, Dallas World Aquarium, Klyde Water Park etc.</p>

                  <h5><strong>About Auckland</strong></h5>
                  <p>Auckland is a famous city in the North Island of New Zealand. It is a famous city of New Zealand. It is known for famous universities around the world. There are famous places in Auckland that attract tourists worldwide. You can also enjoy some of the best adventure activities when in Auckland like Bungee Jumping.</p>
                  <p>Famous places to visit in Auckland are:-</p>

                  <ul class="list-types">
                    <li>Sky Tower Auckland</li>
                    <li>One Tree Hill</li>
                    <li>Auckland art Museum Memorial</li>
                    <li>Auckland Art Gallery</li>
                    <li>Waiheke Island</li>
                    <li>Auckland Habour Bridge Adventures</li>
                  </ul>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

@include('includes.footer')