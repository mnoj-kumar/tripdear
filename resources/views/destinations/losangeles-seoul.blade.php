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
  <title>Tripdear | Los Angeles to Seoul</title>
</head>

@include('includes.header')

  <section class="banner-section" style="background-image: url(../assets/images/destination/banners.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white"><strong>Los Angeles to Seoul</strong></h1>
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
                <img src="assets/images/destination/los-angeles-to-seoul.jpg" class="img-fluid mb-3" alt="destination">
                  <h2><strong>Adventure Is The Best Time To Learn About Yourself!</strong></h2>
                  <p>Love exploring the streets of an unknown destination? Well, a new destination is always worthwhile to bring happiness. To bring happiness and adventures, why not take flights from Los Angeles to Seoul? This is the perfect and the adventurous route for you to fulfil all your traveling dreams.</p>
                  <p>If you love learning about the new culture of a new city, you’ll see, there are plethora of things to do. From old museums, to interesting culture, there is so much you’ll love about the iconic destination called Seoul.</p>

                  <h3><strong>Flight Information for Los Angeles to Seoul flights</strong></h3>
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td>Distance</td>
                            <td>5,953 mi</td>
                          </tr>
                          <tr>
                            <td>Best month</td>
                            <td>December</td>
                          </tr>
                          <tr>
                            <td>Best Airlines</td>
                            <td>Turkish, Japan, China, ANA, Cathay Pacific, Aeromexico</td>
                          </tr>
                          <tr>
                            <td>Airports</td>
                            <td>Gimpo International Airport</td>
                          </tr>
                          <tr>
                            <td>Total time</td>
                            <td>13h 20m</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h4><strong>Tips to Travel for flights from Los Angeles to Seoul</strong></h4>
                  <ul class="list-types">
                    <li>For affordable bookings, make sure you book your tickets 88 days before departure</li>
                    <li>When booking your tickets to Seoul, make sure you avoid bookings in night. </li>
                    <li>Morning tickets availability is 17% cheaper than night reservations </li>
                    <li>The best season is considered to be January, December and November.</li>
                  </ul>

                  <h4><strong>Top Airlines For Los Angeles to Seoul</strong></h4>
                  <div class="row">
                    <div class="col-12 col-md-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <td>Turkish Airlines</td>
                            <td>1d 7h+</td>
                            <td>from $1,021</td>
                          </tr>
                          <tr>
                            <td>Air Canada</td>
                            <td>15h 25m+</td>
                            <td>from $1,098</td>
                          </tr>
                          <tr>
                            <td>Asiana</td>
                            <td>13h 0m</td>
                            <td>from $1,326</td>
                          </tr>
                          <tr>
                            <td>Korean Air</td>
                            <td>12h 50m</td>
                            <td>from $1,716</td>
                          </tr>
                          <tr>
                            <td>Delta</td>
                            <td>12h 50m</td>
                            <td>from $1,731</td>
                          </tr>
                          <tr>
                            <td>United</td>
                            <td>13h 0m</td>
                            <td>from $5,405</td>
                          </tr>
                          <tr>
                            <td>Other airlines</td>
                            <td>12h 50m+</td>
                            <td>from $1,285</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h4><strong>About Seoul:</strong></h4>
                  <p>Seoul is a beautiful and a vibrant city of South Korea. It is one of the famous cities that combines with the deep history of Korea with technology and ultra-modern design. This amazing city is filled with a number of cultural and tourist attractions including outdoor adventurous places such as Mount Namsan and its greenery park to indoor fun like visiting one of Seoul's many museums.</p>
                  <p></p>

                  <h5><strong>heading here</strong></h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <p>This city is also known as the city of huge palaces that includes; complexes situated throughout the city. Also, it is known worldwide for culinary adventure. You can explore plethora of places, in this amazing city, with top things to do which are the following:</p>

                  <ul class="list-types">
                    <li>Bukchon Hanok Village</li>
                    <li>Bongeunsa</li>
                    <li>Seoul Tower</li>
                    <li>National Museum of Korea</li>
                    <li>Blue House</li>
                    <li>Lotte World Tower</li>
                    <li>Gyeongbokgung Palace</li>
                    <li>Seoul Museum of Art</li>
                  </ul>

                  <h5><strong>About Los Angeles:</strong></h5>
                  <p>Los Angeles is a beautiful and populous city in California. It is also the center of the nation’s film and television industry. There are some really famous and iconic places in Los Angeles that make it the most loved and visited city by travellers worldwide. Los Angeles is the only city that had hosted Olympics twice. The city of LA is a home to largest historic center district on the National Register of Historic Places. It is also known as the entertainment capital of the world. Los Angeles is the most ideal destination for movie fans out there and also there are many movie studio tours that visitors can explore and enjoy on their LA trip.  Music lovers in LA love exploring the music themed attractions in the city. </p>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

@include('includes.footer')