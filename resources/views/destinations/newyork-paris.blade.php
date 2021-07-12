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
  <title>Tripdear | New York to Paris</title>
</head>

@include('includes.header')

  <section class="banner-section" style="background-image: url(../assets/images/destination/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white"><strong>New York to Paris</strong></h1>
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
                <img src="assets/images/destination/new-york-to-paris.jpg" class="img-fluid mb-3" alt="destination">
                  <h2><strong>Explore the New York to Paris route for some best Adventures </strong></h2>
                  <p>Are you someone who loves exploring new destinations? Well, travelling is something that makes you feel most alive. When you travel, you get to witness beautiful places people and adventures. If you are planning to take a vacation anytime soon book your flights from New York to Paris to experience the best getaway.</p>
                  <p>New York to Paris is one of the most travelled route. People take this route for different reasons be it vacation, work or any other purpose. When you travel, you explore the places around as well as yourself much more. There’s a lot to do in the beautiful and most visited city of Paris. People all over the world visit Paris to witness its beauty.</p>

                  <h3><strong>Information for New York to Paris Flights</strong></h3>
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Distance</td>
                            <td>3265 miles</td>
                          </tr>
                          <tr>
                            <td>Top Airlines</td>
                            <td>Air France, British Airlines, American Airlines, Delta Airlines, United Airlines</td>
                          </tr>
                          <tr>
                            <td>Origin Airport</td>
                            <td>John F. Kennedy International Airport</td>
                          </tr>
                          <tr>
                            <td>Destination Airport</td>
                            <td>Paris Charles De Gaulle Airport</td>
                          </tr>
                          <tr>
                            <td>Total time</td>
                            <td>7 hours 20 minutes</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h4><strong>Tips to follow when travelling from New York to Paris</strong></h4>
                  <ul class="list-types">
                    <li>Book your flights at least 60 days or 3 weeks prior to the departure to get affordable fares. </li>
                    <li>Peak season month to travel on this route is December and low season month is January. Peak seasons are slightly expensive so travel accordingly. </li>
                    <li>Book direct flights to save time and connecting flights to save money. </li>
                    <li>Take evening departures to save money as morning departures are high priced. </li>
                    <li>Look for a low cost airlines or book during discounts if you are planning on booking  budget friendly tickets. </li>
                    <li>The best time to travel on this route is July.</li>
                  </ul>
                  
                  <h5><strong> Airlines for New York to Paris flights (Round Trip):-</strong></h5>
                  
                  <ul class="list-types">
                    <li>Air Portugal- $256</li>
                    <li>French Bee- $279</li>
                    <li>Air Caraibes- $311</li>
                    <li>Aer Lingus- $434</li>
                    <li>Iceland Air- $448</li>
                    <li>Air Canada- $477</li>
                    <li>United Airlines- $528</li>
                    <li>American Airlines- $557</li>
                  </ul>

                  <h5><strong>About Paris- The City of Light</strong></h5>
                  <p>A beautiful European city in central France and the Capital of France Paris has everyone’s heart. It is the worldwide centre of Fashion, culture and art. Paris is a destination visited by people throughout the world for its beautiful attractions, cafes and boutiques. It is also a famous honeymoon destination as it is The City of Love. It is famed worldwide for its café culture. The streets in Paris are itself so beautiful. Eiffel Tower the most famous and visited place in Paris is known as the city’s Symbol of Love and thousands of proposals take place there every single day.</p>
                  <p>Top places to explore in Paris:-</p>

                  <ul class="list-types">
                    <li>The Eiffel Tower</li>
                    <li>Louvre Museum</li>
                    <li>Disneyland</li>
                    <li>Arc De Triomphe</li>
                    <li>River Seine</li>
                    <li>Wide Boulevards</li>
                  </ul>

                  <h5><strong>About New York</strong></h5>
                  <p>New York is the largest and most famous city in New York state. The beautiful sights, places to visit and amazing cuisines in New York attract thousands of visitors worldwide. The diverse culture, art, museums, music scenes, theatre etc. is what New York is known for. Some of the most famous places to visit in New York are Statue of Liberty, Brooklyn Bridge, High Line, Times square etc. It is one of the famous destinations visited by travellers.</p>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->
@include('includes.footer')