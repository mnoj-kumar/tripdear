@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tripdear.com | Cheap flights to Europe </title>

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
          <h1 class="text-white"><strong>Cheap flights to Europe</strong></h1>
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
                <img src="assets/images/Cheap-flights-to-Europe.jpg" class="img-fluid mb-3" alt="destination">
                  <h2><strong>Introduction</strong></h2>
                  <p>Everything you need to know to book cheap flights to Europe in one place. Europe is the mystical land of culture, vibrant history, and breathtaking architecture. We have searched the web and scanned through hundreds of sites on flights to Europe so you don’t have to.</p>

                  <h3><strong>Europe-A whole new world</strong></h3>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.There are no two trips to Europe that look the same. Whether it’s exploring Italy’s Amalfi Coast or looking for Germany’s Bavarian beer, Europe never ceases to amaze. Get your perfect match on Tripdear. Leave all your worries about finding the flight that fulfills all your requirements to us and get packing. Take your tastebuds for a spin in Istanbul or revel in Greek mythology while sitting at a temple in Greece. Learn about Hygge in Copenhagen or experience the nightlife in Amsterdam. With all these possibilities, who wouldn’t want to experience this magical land. Do not worry about flight fares, Tripdear will take care of it.</p>

                  <h4><strong>Popular Destinations in Europe</strong></h4>

                  <div class="row">
                    <div class="col-12 col-md-6">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>DESTINATION</th>
                            <th>CITY</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="p-2">London</td>
                            <td class="p-2">UK</td>
                          </tr>
                          <tr>
                            <td class="p-2">Paris</td>
                            <td class="p-2">France</td>
                          </tr>
                          <tr>
                            <td class="p-2">Rome</td>
                            <td class="p-2">Italy</td>
                          </tr>
                          <tr>
                            <td class="p-2">Barcelona</td>
                            <td class="p-2">Spain</td>
                          </tr>
                          <tr>
                            <td class="p-2">Amsterdam</td>
                            <td class="p-2">The Netherlands</td>
                          </tr>
                          <tr>
                            <td class="p-2">Antalya</td>
                            <td class="p-2">Turkey</td>
                          </tr>
                          <tr>
                            <td class="p-2">Istanbul</td>
                            <td class="p-2">Turkey</td>
                          </tr>
                          <tr>
                            <td class="p-2">Beni dorm</td>
                            <td class="p-2">Spain</td>
                          </tr>
                          <tr>
                            <td class="p-2">Madrid</td>
                            <td class="p-2">Spain</td>
                          </tr>
                          <tr>
                            <td class="p-2">Lisbon</td>
                            <td class="p-2">Portugal</td>
                          </tr>
                          <tr>
                            <td class="p-2">Krakow</td>
                            <td class="p-2">Poland</td>
                          </tr>
                          <tr>
                            <td class="p-2">Budapest</td>
                            <td class="p-2">Hungary</td>
                          </tr>
                          <tr>
                            <td class="p-2">Athens</td>
                            <td class="p-2">Greece</td>
                          </tr>
                          <tr>
                            <td class="p-2">Dublin</td>
                            <td class="p-2">Ireland</td>
                          </tr>
                          <tr>
                            <td class="p-2">Copenhagen</td>
                            <td class="p-2">Denmark</td>
                          </tr>
                          <tr>
                            <td class="p-2">Berlin</td>
                            <td class="p-2">Germany</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h4><strong>Popular Routes: United States to Europe</strong></h4>
                  <ul class="list-types">
                    <li><strong>Washington - </strong> Vienna</li>
                    <li><strong>New York - </strong> Brussels</li>
                    <li><strong>Newark - </strong> Copenhagen</li>
                    <li><strong>San Francisco - </strong> Italy</li>
                    <li><strong>Las Angeles - </strong> Helsinki</li>
                    <li><strong>Miami - </strong> Paris</li>
                    <li><strong>Fort Myers - </strong> Dusseldorf</li>
                  </ul>

                  <h5><strong>How trip dear helps you with finding the perfect flights for you</strong></h5>
                  <p>Our aim is to make travel accessible to everyone. We believe in a world where people from all classes of society travel to their heart's content.</p>
                  <p>We are a leading travel engine which uses top-notch technology to get you the best lists of flights for you between the USA and Europe.</p>
                  <p>You can search and compare hundreds of flights and find the flight that fits your budget.</p>
                  <p>Booking flights with Tripdear is the smartest step to secure yourself the cheapest flights.</p>
                  <p>Tripdear has various filters- you can filter your searches by the airport, IATA codes, destinations, your preferred airlines, flight timings, available routes, and popular destinations.</p>
                  <p>Our algorithm search across the web to get the best deals and cheapest flights for you. From our thorough research and analysis, we bring you plenty of options for flights to Europe.</p>
                  <p>Our price chart is updated regularly and displays the lowest prices of the flights operated between the USA and Europe.</p>
                  <p>You can also set price alerts on a particular destination in mind. Our algorithm will work its magic to get you the deal beyond your wildest imagination.</p>
                  <p>Tripdear displays the cheapest flight fares to Europe, airlines that fly frequently on this route, the number of direct flights between major cities of the USA and Europe, and the flight duration and distance covered.</p>
                  <p>There are no hidden fees or charges, what’s fair is fair. Tripdear believes in transparency and is honest with our guests.</p>
                  <p>Our team of skilled employees is there to assist you with anything. Feel free to reach out to us for any queries. The team is available to you 24 hours a day, 7 days a week.</p>
                  <p>Explore the best deals in the comfort of your home.</p>
                  <p>With safe and secured payment options, you can book flights with ease.</p>
                  <p>Tripdear gives you Car rentals and hotel booking options. </p>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

   @include('includes.footer')