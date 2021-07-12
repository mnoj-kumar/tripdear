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
  <title>Tripdear | Los Angeles to Christchurch</title>
</head>

@include('includes.header')

  <section class="banner-section" style="background-image: url(../assets/images/destination/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white"><strong>Los Angeles to Christchurch</strong></h1>
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
                    <img src="assets/images/destination/Los-Angeles-to-Christchurch.jpg" class="img-fluid mb-3" alt="destination">
                    <h2><b>Take the much-deserved break after the pandemic</b></h2>
                    <p>Welcome to your favourite travel site. Summers are just around the corner. Let us all pledge not to spend these golden days in the confines of your home. You have already spent a lot of time indoors, keeping you and your family safe during the pandemic. But now after the vaccine rollout, things are changing. Nations are lifting travel bans and preparing themselves to welcome tourists. A trip with your family from Los Angeles to Christchurch will give you a kickstart for future endeavours.</p>
                    <h3><strong>Let’s cover some essential information about flights from Los Angeles to Christchurch</strong></h3>
                    <div class="row">
                      <div class="col-12 col-md-12">
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                                <td>Distance</td>
                                <td>11,119 km</td>
                            </tr>
                            <tr>
                                <td>Time Taken</td>
                                <td>13h 55 m</td>
                            </tr>
                            <tr>
                                <td>Time Difference</td>
                                <td>+19hours</td>
                            </tr>
                            <tr>
                                <td>Best Airlines for Los Angeles to Christchurch</td>
                                <td>Qantas</td>
                            </tr>
                            <tr>
                                <td>Airport</td>
                                <td>
                                    <ul>
                                        <li>Los Angeles International Airport (LAX)</li>
                                        <li>Christchurch International Airport (CHC)</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Cheapest Airlines </td>
                                <td>Qantas</td>
                            </tr>
                            <tr>
                                <td>Flights per week</td>
                                <td>7 flights per week</td>
                            </tr>
                            <tr>
                                <td>Cheapest Month</td>
                                <td>January</td>
                            </tr>
                          </tbody>  
                        </table>
                      </div>
                    </div>

                    <h3><strong>Things to know before traveling from Los Angeles to Christchurch</strong></h3>                   
                    <ul>    
                        <li>Flights from Los Angeles to Christchurch come under long-haul flights. If you wish to get out of the plane looking presentable, make sure you take plenty of rest while on board.</li>
                        <li>With a time- a difference of +19 hours, you are bound to get jet-lagged. Drink enough fluids to keep the discomfort to a minimum.</li>
                        <li>Do not confuse New Zealand as a part of Australia. It’s a separate country. Confusing them might offend the locals.</li>
                        <li>Ditch your shoes and walk barefoot in New Zealand. Locals do it all the time to feel closer to mother nature.</li>
                        <li>Pack on a lot of sunscreens as the sun tends to hit harsher in New Zealand.</li>
                        <li>Christchurch is an environmentally conscious destination. Try not to litter or carry plastic bags with you.</li>
                        <li>Ticket fares from Los Angeles to Christchurch tend to drop during the winter months. If you are looking for cheaper flights, book in January and February.</li>
                    </ul>
                    
                    <h3><strong>Top 5 airlines for the flight from Los Angeles to Christchurch</strong></h3>
                    <p>We know you are curious to compare ticket fares for Los Angeles to Christchurch. Have a look at the top airlines and the prices they offer for flight fares for a one-way trip. Have a look:</p>
                    <div class="row">
                      <div class="col-12 col-md-12">
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                                <th>AIRLINES</th>
                                <th>PRICE RANGE</th>
                            </tr>
                            <tr>
                                <td>United Airlines</td>
                                <td>1500-1800USD</td>
                            </tr>
                            <tr>
                                <td>Singapore Airlines</td>
                                <td>1000-1400USD</td>
                            </tr>
                            <tr>
                                <td>Emirates</td>
                                <td>1200-1500USD</td>
                            </tr>
                            <tr>
                                <td>Fiji Airways</td>
                                <td>800-1000USD</td>
                            </tr>
                            <tr>
                                <td>Qantas</td>
                                <td>780-880USD</td>
                            </tr>
                          </tbody>  
                        </table>
                      </div>
                    </div>

                    <h3><strong>Once upon a time in Los Angeles</strong></h3>
                    <p>Los Angeles is the home of the legendary Hollywood sign. The city is a kaleidoscope of cultures and entertainment. If you happen to be a movie buff, this city is La La Land for you. From the TLC Chinese Theatre Hand Prints to Griffith Observatory, the city has ample options to keep you enthralled. You might encounter a celeb or ten, hanging around at famous eateries.</p>
                    <h3><strong>Christchurch- pride of New Zealand</strong></h3>
                    <p>Christchurch is considered the largest city in the Southern part of New Zealand. It has plenty of nature reserves and stunning landscapes. Get your dose of history in its Canterbury Museum. The museum has preserves of Antarctic exploration. The Christchurch Botanic Garden is a sight to behold. Nature enthusiasts call this city their safe haven. </p>
               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

@include('includes.footer')