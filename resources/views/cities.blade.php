@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title>tripdear.com | Cities</title>

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
.p-overlay {
  background-color: #0000005e;
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

.trip-in-content-box p {
font-weight: 300;
letter-spacing: 0.5px;
text-align: justify;
font-size: 15px;
}
.trip-in-content-box {
box-shadow: 0px 0px 10px #00000024;
padding: 15px 15px;
margin-top: 10px;
border-top: 3px solid #f9bf08;
border-bottom: 2px solid #1a5586;
}
</style>

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/destination/banners.jpg);">
    <div class="p-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-12 text-center">
          <h1 class="text-white">Cities</h1>
        </div>
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

    <section class="inner-page-section">
      <div class="container">

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>NEW YORK</h2>
              <hr>
              <h3 class="blue-color">City in New York State</h3>
              <p>The Influential city is known for the Statue of Liberty, Empire State Building, and Times Square!</p>
              <p>Perhaps the best city on the planet, New York is consistently a hurricane of activities, with famous sites at every turn. It has something for each style, taste, and budget plan, and with such countless hidden gems everywhere. Thus, to inspire you with your excursion, here is the rundown of the top 10 notable places that you should not miss!</p>

              <h4 class="blue-color">Top Sights in New York</h4>

              <ol class="numeric">
                <li><strong>Empire State Building</strong>-103-story milestone with observatories Statue of Liberty National Monument-American icon in New York Harbor </li>
                <li><strong>Times Square</strong>: Bright lights and Broadway shows</li>
                <li><strong>Central Park</strong>: A metropolitan oasis with ballfields and a zoo </li>
                <li><strong>The Museum of Modern Art</strong>: World-class sculpture, art & design</li>
                <li><strong>Rockefeller Center and Top of the Rock Observation Deck</strong>: immense amusement and shopping complex in Manhattan.x</li>
                <li><strong>Metropolitan Museum of Art</strong>: The most renowned historical centers in the United States </li>
                <li><strong>Brooklyn Bridge</strong>: One of the city's most recognizable milestones </li>
                <li><strong>Fifth Avenue</strong>: One of the most top-notch shopping streets in America </li>
                <li><strong>Wall Street</strong>: The well-known vacation spots in the Financial District and a picturesque place.</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>LOS ANGELES</h2>
              <hr>
              <h3 class="blue-color">City in California </h3>
              <p>A bright city is known for the Hollywood entertainment world, Venice and Santa Monica seashores, and Laker's b-ball. </p>
              <p>Palm trees, daylight, bicycle rides, seashores welcome to Los Angeles. The rambling LA city in Southern California has long been known globally in the film and media outlet, especially for Hollywood. Likewise, all-year moderate temperatures and cool nights make any month a fun opportunity to visit Los Angeles. There is all load of the best activities and things to explore, find out in our top ten inspiration list.</p>

              <h4 class="blue-color">Top 10 Inspirations for Your Los Angeles Trip </h4>

              <ol class="numeric">
                <li><strong>Disneyland Park</strong>: Famed entertainment mecca with 8 themed lands </li>
                <li><strong>Los Angeles County Museum of Art</strong>: From pre-Columbian to contemporary works </li>
                <li><strong>Universal Studios Hollywood</strong>: Big film-themed carnival </li>
                <li><strong>Griffith Observatory</strong>: Planetarium, telescopes, and city sees </li>
                <li><strong>Santa Monica Pier</strong>: Popular milestone for rides and cafés </li>
                <li><strong>Hollywood Sign</strong>: Iconic letters on Mount Lee since 1923 </li>
                <li><strong>Hollywood Walk of Fame</strong>: Star-studded Hollywood walkway </li>
                <li><strong>The Huntington Library, Art Museum, and Botanical Gardens</strong>: Cultural center with exhibitions and gardens </li>
                <li><strong>Aquarium of the Pacific</strong>: Sea-life displays in a waterfront space </li>
                <li><strong>Petersen Automotive Museum</strong>: Showing exemplary speedsters and concept cars</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>CHICAGO</h2>
              <hr>
              <h3 class="blue-color">City in Illinois</h3>
              <p>Chicago, the "Windy City" lies along the shores of Lake Michigan. It's full of life and known for its dynamic art scene, various cultural attractions, excellent shopping areas, and fascinating architecture!</p>
              <p>There's a lot to do in this dynamic city, and chances are that everybody would need to stay somewhat more. So, to inspire them with an uncountable number of decisions, here are our top ten suggestions to explore.</p>

              <h4 class="blue-color">Top 10 Places to Visit in Chicago:</h4>

              <ol class="numeric">
                <li><strong>The Art Institute of Chicago</strong>: Renowned art historical center</li>
                <li><strong>Navy Pier</strong>: Destination with rides, shops, and food </li>
                <li><strong>Millennium Park</strong>: Green space with art, theater, and ice arena </li>
                <li><strong>Shedd Aquarium</strong>: Aquatic creatures from around the world </li>
                <li><strong>Willis Tower</strong>: Super-tall high rise with city vistas </li>
                <li><strong>Lincoln Park Zoo</strong>: Free zoo with an intelligent homestead </li>
                <li><strong>Buckingham Fountain</strong>: Elaborate extravagant milestone from 1927 </li>
                <li><strong>360 Chicago</strong>: Observatory with tilting glass stage </strong></li>
                <li><strong>Brookfield Zoo</strong>: Sprawling zoo with a huge number of animals </li>
                <li><strong>Field Museum</strong>: State-of-the-art science historical center</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>LAS VEGAS</h2>
              <hr>
              <h3 class="blue-color">City in Nevada</h3>
              <p>Nicknamed the 'Entertainment Capital of the World,' 'Sin City' and 'City of Lights,' Las Vegas is really where dreams come true!</p>
              <p> This city in the desert is known throughout the planet for the sake of entertainment and fervor. It created something for everybody: the artsy, the outdoorsy, the daredevil, or even the scholarly person.</p>

              <h4 class="blue-color">Top 10 Places to Visit in Las Vegas</h4>
              <ol class="numeric">
                <li><strong>MGM Grand</strong>: Huge gambling club resort with in vogue clubs </li>
                <li><strong>Luxor Hotel and Casino</strong>: Lively pyramid-formed gambling club resort </li>
                <li><strong>The Mirage</strong>: Plush gambling club inn with shows and feasting </li>
                <li><strong>Red Rock Canyon National Conservation Area</strong>: Sandstone tops and Keystone Thrust Fault</li>
                <li><strong>The STRAT Hotel, Casino and SkyPod</strong>: Casino lodging with out of this world attractions </li>
                <li><strong>New York-New York Hotel and Casino</strong>: Ritzy housing with a crazy ride </li>
                <li><strong>Treasure Island</strong> - Casino lodging with feasting and shows </li>
                <li><strong>Fountains of Bellagio</strong>: Large, well known arranged wellsprings </li>
                <li><strong>Fremont Street Experience</strong>: Open-air shopping center with free amusement</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>CANCUN</h2>
              <hr>
              <h3 class="blue-color">City in Mexico</h3>
              <p>"Cancun" is known for its tremendous white sand seashores, entrancing turquoise blue ocean, and unmatched climate.</p>
              <p>Open-air activities, archeological sites, adventure tourism, Mayan culture and history, an assortment of gastronomic encounters, awesome shopping outlets, and enticing amusement that’s what this city offers to all its explores.</p>
              <h4 class="blue-color">Top Places to Explore in Cancun</h4>

              <ol class="numeric">
                <li><strong>Cancún Underwater Museum</strong>: Contemporary underwater sculpture museum</li>
                <li><strong>Playa Norte</strong>: Sandy beach with food & drink options</li>
                <li><strong>Playa Delfines</strong>: Popular beach for sunning & swimming</li>
                <li><strong>Xcaret Park</strong>: Eco-archaeological park with attractions</li>
                <li><strong>Xoximilco</strong>: Mexican food & music on boats</li>
                <li><strong>Interactive Aquarium Cancún</strong>: Numerous species & hands-on exhibits</li>
                <li><strong>Parque de las Palapas</strong>: Public park & performance venue</li>
                <li><strong>Garrafon Reef Park & Beach Club</strong>: Zipline, snorkeling & a pool</li>
                <li><strong>Playa Langosta</strong>: Long sandy beach with shallow water</li>
                <li><strong>Dolphinaris Cancún</strong>: Swimming encounters with dolphins</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

        <div class="trip-in-content-box mb-4">
         <div class="row">
            <div class="col-12 col-md-12">
              <h2>San Francisco</h2>
              <hr>
              <h3 class="blue-color">City in California</h3>
              <p>"San Francisco" is a gem of Northern California and the lovely city in the United States!</p>
              <p>It is home to a smidgen of everything and is known for the Golden Gate Bridge, all-year mist, streetcars, and Victorian homes. The city is loaded up with history, parks, seashores, diversion, gallery, incredible areas.</p>

              <h4 class="blue-color">Inspiration For Your Next Trip to San Francisco</h4>
              <ol class="numeric">
                <li><strong>Golden Gate Bridge</strong>: Iconic art deco length (1937)</li>
                <li><strong>Alcatraz Island</strong>: Historical fascination </li>
                <li><strong>San Francisco Museum of Modern Art</strong>: Vast assortment of conspicuous artworks </li>
                <li><strong>Golden Gate Park</strong>: Gardens, trails, galleries and festivals </li>
                <li><strong>California Academy of Sciences</strong>: Museum with science displays and exploration</li>
                <li><strong>Muir Woods National Monument</strong>: Giant redwoods and Redwood Creek </li>
                <li><strong>Exploratorium</strong>: Hands-on science exhibition hall </li>
                <li><strong>Japanese Tea Garden</strong>: Manicured gardens with a Japanese teahouse </li>
                <li><strong>Golden Gate National Recreation Area</strong>: Historic destinations and outside exercises </li>
                <li><strong>Sutro Baths</strong>: Site of a huge, recorded bathhouse</li>
              </ol>
            </div><!--/col-12 col-md-12-->
          </div><!--/row-->
        </div><!--/trip-in-content-box-->

      </div><!--/container-->
    </section><!--/inner-page-section-->
@include('includes.footer')