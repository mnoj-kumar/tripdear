@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tripdear.com | Cheap Flights to Asia</title>

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
          <h1 class="text-white"><strong>Cheap Flights to Asia</strong></h1>
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
                <img src="assets/images/Cheap-Flights-to-Asia.jpg" class="img-fluid mb-3" alt="destination">
                  <h2><strong>Introduction</strong></h2>
                  <p>Our aim is to make travel accessible to everyone. Travelling requires a lot of careful planning and research. With tripdear, you do not have to skip from one travel site to another. All the information you require for a smooth journey to Asia is right here. Gone are the days when people would visit individual airline websites in hopes of getting a good deal on long-haul flights. Now you have tripdear for it. We sort through hundreds of flights and bring you the best ones possible.</p>
                  <p>Whoever said that traveling to Asia is an expensive affair did not know about tripdeal. We are here to make your dreams of visiting the majestic continent come true. We check the prices of all major airlines so that you don’t have to. There is no better reward for us than to get you the trip of your dreams.</p>

                  <h3><strong>Once upon a time in Asia</strong></h3>
                  <p>Asia is the largest continent and is home to 60% population of the planet. It is the land of culture, traditions, and variety. Experience the magic of historic sites and reel in the charm of tiny nooks and corners. Get a much-required tan at the beaches of Thailand or get a taste of the metropolitan lifestyle in Tokyo. Celebrate the festival of color, Holi with locals in India, or taste the best coffee in Vietnam. Experience the soothing mornings in the midst of nature in Bali or party till you see the sun in Hong Kong.</p>
                  <p>he only thing you need to worry about is what to pack. Leave the rest to us. From cheapest flights to Asia to the best time to travel to Asia, we have got everything covered.</p>

                  <div class="row">
                    <div class="col-12 col-md-12">
                      <h4><strong>Popular countries and their cities in Asia</strong></h4>
                    </div>
                    <div class="col-12 col-md-12">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>CITY</th>
                            <th>COUNTRY</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="p-2">Bangkok</td>
                            <td class="p-2">Thailand</td>
                          </tr>
                          <tr>
                            <td class="p-2">Singapore</td>
                            <td class="p-2">Singapore</td>
                          </tr>
                          <tr>
                            <td class="p-2">Hong Kong</td>
                            <td class="p-2">China</td>
                          </tr>
                          <tr>
                            <td class="p-2">Osaka</td>
                            <td class="p-2">Japan</td>
                          </tr>
                          <tr>
                            <td class="p-2">Delhi</td>
                            <td class="p-2">India</td>
                          </tr>
                          <tr>
                            <td class="p-2">Kyoto</td>
                            <td class="p-2">Japan</td>
                          </tr>
                          <tr>
                            <td class="p-2">Seminyak</td>
                            <td class="p-2">Indonesia</td>
                          </tr>
                          <tr>
                            <td class="p-2">Ubud</td>
                            <td class="p-2">Indonesia</td>
                          </tr>
                          <tr>
                            <td class="p-2">Pattaya</td>
                            <td class="p-2">Thailand</td>
                          </tr>
                          <tr>
                            <td class="p-2">Ho Chi Ming City</td>
                            <td class="p-2">Vietnam</td>
                          </tr>
                          <tr>
                            <td class="p-2">Seoul</td>
                            <td class="p-2">South Korea</td>
                          </tr>
                          <tr>
                            <td class="p-2">Mumbai</td>
                            <td class="p-2">India</td>
                          </tr>
                          <tr>
                            <td class="p-2">Kuala lumpur</td>
                            <td class="p-2">Malaysia</td>
                          </tr>
                          <tr>
                            <td class="p-2">Manila</td>
                            <td class="p-2">Philippines</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div><!--/row-->

                  <h4><strong>Popular USA to Asia routes</strong></h4>
                  <ul class="list-types">
                    <li><strong>Minneapolis/St Paul- </strong> Incheon, South Korea</li>
                    <li><strong>Detroit- </strong> Shanghai, China</li>
                    <li><strong>Denver- </strong> Tokyo, Japan</li>
                    <li><strong>Seattle- </strong> Singapore</li>
                    <li><strong>Washington D.C– </strong> Delhi, India</li>
                    <li><strong>New York- </strong> Manila, Philippines</li>
                  </ul>

                  <p>Tripdear is a travel engine that uses state-of-the-art technology to bring you the cheapest flights between the USA and Asia.</p>
                  <p>We search across the web to get the best deals and cheapest flights for you. From our thorough research and analysis, we display plenty of options for flights to Asia.</p>
                  <p>Our options include all major airlines that operate on the route.</p>
                  <p>Our price chart is updated regularly and displays the lowest prices of the flights operated between the USA and Asia.</p>
                  <p>You can also set price alerts if you have a particular destination in mind. Our algorithm will work its magic to get you the deal beyond your wildest imagination.</p>
                  <p>Tripdear displays the cheapest flight fares to Asia, airlines that fly frequently on this route, the number of direct flights between major cities of the USA and Asia, and the flight duration and distance covered.</p>
                  <p>There are no hidden fees or charges, what you see is what you get. Tripdear believes in transparency.</p>
                  <p>Our team of skilled employees is there to assist you with anything. Feel free to reach out to us for any queries. The team is available to you 24 hours a day, 7 days a week.</p>
                  <p>Explore the best deals in the comfort of your home.</p>

               </div><!--/in-content-box-->
            </div>
         </div><!--/row-->
      </div><!--/container-->
   </section><!--/inner-page-section-->

   @include('includes.footer')