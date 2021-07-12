@extends('includes.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Flight Search reasult</title>

<style type="text/css">
  section.banner-section{
  padding: 30px 0px;
  background-color: #ffffff;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  position: relative;
  min-height:200px;
}
.black-overlay {
  background-color: rgba(0, 0, 0, 0.2);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
}
/*--------/banner-section----------*/
section.search-section-a {
  padding: 40px 0px;
  background-color: #f8fbfc;
}
.search-flights-box {
  border-right: 2px solid #003d70 !important;
  background-color: #ffffff;
  box-shadow: 0px 0px 10px #00000014;
  border: 1px solid #dfdfdf;
  margin-bottom: 1em;
}
.search-flights-box:hover {
  box-shadow: 0px 0px 10px #bad8f8;
}
.b-solid {
  border-bottom: 1px solid #ccc;
  margin-top: 12px;
  margin-bottom: 12px;
}
.b-dashed {
  border-bottom: 1px dashed #ccc;
  margin-top: 12px;
  margin-bottom: 12px;
}
.air-logo {
  height: 50px;
  width: 80px;
}
@media (max-width: 320px) {
  .air-logo {
    display: none;
  }
}
.tech-support {
  background-color: #fff;
  margin-bottom: 15px;
  padding: 15px 10px;
  border: 1px solid #40a4ff;
  box-shadow: 0px 0px 15px #00000029;
}
.side-box{
  padding: 10px;
  background-color: #ffffff;
  box-shadow: 0px 0px 5px #0000001a;
  border-top: 2px solid #003d70;
}
.red-color{
  color: darkgoldenrod;
}
/*------flights-details----*/
#flights-details{
  display: none;
}
/* .f-con {
  display: inline-block;
  position: absolute;
  left: -13px;
  top: 4em;
  width: 25px;
  height: 25px;
  text-align: center;
  background-color: #ececec;
  border: 1px solid #ccc;
  border-radius: 20px;
  color: #01519a;
} */
.collapse-close, .details{
  cursor: pointer;
}
.exchange-key,.plane-key {
    position: absolute;
    left: -14px;
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 50%;
    color: #01519a;
    background: #ececec;
}
.sch-dots {
    position: absolute;
    top: 29px;
    left: 157px;
    width: 21%;
    border-top: 2px dotted #000;
    opacity: 0.1;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=10)";
    filter: alpha(opacity=10);
}
.stop-duration{
  position: absolute;
  right: 60px;
}
#myRange{
  width : 100%;
}
/*------/flights-details----*/
</style>

@include('includes.header')

  <section class="banner-section" style="background-image: url(assets/images/home-banner.jpg);">
    <div class="black-overlay"></div>
    <div class="container">
    @include('includes.form')
      <!--/form-section-->
    </div><!--/container-->
  </section>
  <!--/banner-section-->

  <section class="search-section-a">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-12 mb-3">
          <div class="side-box mb-2">
            <p class="mb-0"><strong>Get Most Updated Low Airfare</strong></p>
            <div class="row">
              <div class="col-5">
                <p class="mb-0"><small>{{ $origin }}</small></p>
              </div>
              <div class="col-2 text-center"><i class="fa fa-plane blue-color mt-2"></i></div>
              <div class="col-5 text-right">
                <p class="mb-0"><small>{{ $destination }}</small></p>
              </div>
            </div><!--/row-->
          </div><!--/side-box-->
		  <form action="" method="get" name"FinalAccept">
			@csrf
		    <input type="hidden" name="origin" value="{{$origin}}">
            <input type="hidden" name="destination" value="{{$destination}}">
            <input type="hidden" name="departureDate" value="{{$departureDate}}">
            <input type="hidden" name="returnDate" value="{{$returnDate}}">
            <input type="hidden" name="noofadults" value="{{$adults}}">
            <input type="hidden" name="children" value="{{$children}}">
            <input type="hidden" name="infants" value="{{$infants}}">
            <input type="hidden" name="class" value="{{$class}}">
            <input type="hidden" name="nonStop" value="{{$nonStop}}">
			<div class="side-box mb-2">
			  <p class="mb-2">Filter By Price</p>
			  <input type="range" class="form-range" min="0" max="5000" id="myRange" value="{{ $maxprice }}" name="maxprice" onclick="this.form.submit()" >
              <p>$0 - $<span id="price_show">{{ $maxprice }}</span></p>
			</div> 
		  </form>
          <div class="side-box mb-2">
            <p><strong>Alternate Date</strong></p>
            <label class="parent-checkbox font-13"> Show fares with alternate date
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            <label class="parent-checkbox font-13"> Show fares with actual date
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            <div class="b-solid"></div>
            <p class="font-13 mb-1"><strong>Departure From</strong></p>
            <div class="row">
              <div class="col-6">
                <label class="parent-checkbox"> {{ $origin }}
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div><!--/row-->
            <p class="font-13 mb-1"><strong>Arriving At</strong></p>
            <div class="row">
              <div class="col-6">
                <label class="parent-checkbox"> {{ $destination }}
                  <input type="checkbox">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div><!--/row-->
          </div><!--/side-box-->
        </div><!--/col-md-3 col-12-->


        
        <div class="col-md-9 col-12">
          <div class="row">
            <div class="col-12 col-md-12">
              <h3 class="blue-color mb-0"> {{$origin}} to {{$destination}}</h3>
              <p class="mb-2"><small><b>{{date('F j, Y',strtotime($departureDate))}} @if(!empty($returnDate)) {{'-'}} {{ date('F j, Y',strtotime($returnDate))}}@endif</b></small></p>
              <p><small>Prices are <b> ROUND TRIP </b> per person, include all taxes and fees, but do not include baggage fees</small></p>
            </div>
          </div><!--/row-->

          <div class="tech-support">
            <div class="row">
              <div class="col-3 col-md-1 pr-1">
                <img src="assets/images/support.png" class="img-fluid" alt="">
              </div>
              <div class="col-9 col-md-8 pl-1">
                <h5 class="mb-0">Lower Phone Only Fares May Be</h5>
                <p class="mb-0"><strong>Available - Call Now!</strong></p>
              </div>
              <div class="col-12 col-md-3 text-md-right">
                <button class="blue-btn-lg btn-block float-right"><i class="fa fa-volume-control-phone"></i> 888 875 5540</button>
              </div>
            </div>
          </div>
        @if(!empty($res))
		  <?php $itr= 0; ?>
          @foreach($res as $value)
			@if($maxprice > $value['totalPrice'])
				<div class="search-flights-box p-md-3 p-2">
					<div class="row">
					<div class="col-12 col-md-6 mb-3 mb-md-0">
						<h5 class="mb-0"><b class="blue-color">{{$value['currency']}} - {{$value['totalPrice']}} </b> <small class="red-color">( {{$value['adultsCount']}}x{{$value['adultsPrice']}}<span class="blue-color">+</span>{{$value['childrenCount']}}x{{$value['childrenPrice']}}<span class="blue-color">+</span>{{$value['infantsCount']}}x{{$value['infantsPrice']}} )</small></h5>
						<p class="mb-0 font-13">(Total Price ( Pessangers and Per person price)</p>
					</div>
					<div class="col-12 col-md-6 text-md-right">
						<form method="get" action="/billing-payment" enctype="multipart/form-data">
						@csrf
						<input type="hidden" value="{{ json_encode($value) }}" name="obj" />
						<p class="mb-0"><small class="pt-2 mt-3"><i class="fa fa-clock-o blue-color"></i> Only {{$value['numberOfBookableSeats']}} tickets left at this price</small> 
						<button class="blue-btn-sm float-right ml-2" type="submit">Select <i class="fa fa-angle-double-right"></i></button></p>
						</form>
					</div>
					</div><!--/row-->
					<?php $count = 0; ?>
					@foreach($value['route'] as $routes)
					<div class="b-solid"></div>
					<div class="row">
					<div class="col-md-4 col-7 pr-1">
						<div class="media">
						<!--<img src="@if($itr==0){{'assets/images/airline/'.$value['CarrierCode'].'.png'}}@else{{'assets/images/airline/'.$value['returnCarrierCode'].'.png'}}@endif" class="mr-2 air-logo" alt="{{$value['CarrierCode']}}"> -->
						<img src="assets/images/airline/@if($nonStop == false){{$routes['StopairlineKey']}}@else{{$routes['airlineKey']}}@endif.png" class="mr-2 air-logo" alt="{{$value['airlineKey']}}">
						<?php $itr++; ?>
						<div class="media-body">
							<p class="mb-0"><small><b>@if($nonStop == false){{$routes['Stopairline']}}@else{{$routes['airline']}}@endif</b></small></p>
							<!--<p class="mb-0"><small>@if($$nonStop == false){{$routes['StopairlineCode']}}@else{{$routes['airlineCode']}}@endif</small></p>-->
						</div>
						</div><!--/media-->
						<p class="mb-0"><small><i class="fa fa-clock-o blue-color"></i> Total Trip Time : {{$routes['totalDuration']}}</small></p>
					</div>
					<div class="col-md-2 col-5 text-md-center text-right pl-1">
						<p class="mb-0"><small><b>{{ date(" h:i A, F j", strtotime($routes['startTrip'])) }}</b></small></p>
						<p class="mb-0"><small><b>{{ date(" h:i A, F j", strtotime($routes['endTrip'])) }}</b></small></p>
					</div>
					<div class="col-12 d-block d-md-none">
						<div class="b-dashed"></div>
					</div>
					@if($count==0)
					<div class="col-md-4 col-7 text-md-center pr-1">
						<p class="mb-0"><small>{{ $routes['originAirportName'] }}</small></p>
						<p class="mb-0"><small>{{ $routes['destinationAirportName'] }}</small></p>
					</div>
					@else
					<div class="col-md-4 col-7 text-md-center pr-1">
						<p class="mb-0"><small>{{ $routes['destinationAirportName'] }}</small></p>
						<p class="mb-0"><small>{{ $routes['originAirportName'] }}</small></p>
					</div>
					@endif
					<div class="col-md-2 col-5 text-right">
						<p class="mb-0"><small><b>{{ $routes['nos'] }} Stop</b></small></p>
						<p class="mb-0"><small>{{$routes['class']}}</small></p>
						<div class="mb-0 text-success uniqueID"   data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><small><b class="details">Details</b></small> <i class="fa fa-angle-double-down"></i></div>
					</div>
					</div><!--/row-->
		
					<div class="collapse uniqueID2" id="collapseExample" >
					<div class="card card-body">
						<a class="collapse-close uniqueID3" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">✕ Close</a>
						<div class="mt-2">
						@foreach($routes['stopInfo'] as $stopInfo)
							<div class="row">
							<div class="col-md-1 offset-md-1 col-12 border-right text-md-center"></div>
							<div class="col-md-10 col-12 pl-md-5 position-relative mt-md-0 mt-3">
								<div class="plane-key"><i class="fa fa-plane"></i></div>
								<p class="mb-0 font-12">{{date('F j, Y', strtotime($stopInfo['departureAT']))}}</p>
								<div class="row">
								<div class="col-md-5 col-6">
									<p class="mb-0"><strong>{{date('h:i A', strtotime($stopInfo['departureAT']))}} </strong> <sub>{{date('D, j', strtotime($stopInfo['departureAT']))}}</sub></p>
								</div>
								<div class="col-md-4 col-6">
									<p class="mb-0"><strong>{{date('h:i A', strtotime($stopInfo['arrivalAT'])) }}</strong> <sub>{{date('D, j', strtotime($stopInfo['arrivalAT']))}}</sub></p>
								</div>
								</div><!--/row-->
								<div>
								<p class="font-12 mb-0"><span>{{$stopInfo['departureIataCode']}}</span> <i class="fa fa-long-arrow-right fa-lg ml-1 mr-1"></i> <span>{{$stopInfo['arrivalIataCode']}}</span></p>
								<div class="sch-dots"></div>
								<p class="mb-0 stop-duration">Time Dutation : {{$stopInfo['stopDuration']}}</p>
								</div>
								<p class="font-12 mb-0"><span>{{$stopInfo['airline']}}</span> <span>{{$stopInfo['airlineCode']}}</span></p>
								<br>
								@if($stopInfo['arrivalIataCode'] != $destination && $stopInfo['arrivalIataCode'] != $origin)
								<div class="exchange-key"><i class="fa fa-exchange"></i></div>
								<p class="mb-0">Change planes from → {{$stopInfo['arrivalIataCode']}}</p>
								<div class="row">
									<div class="col-md-4 col-6">
									<p class="mb-0"><strong>{{date('h:i A', strtotime($stopInfo['arrivalAT'])) }} </strong> <sub>{{date('D, j', strtotime($stopInfo['arrivalAT']))}}</sub></p>
									</div>
								</div>
								@endif 
								<br> 
							</div>
							</div>
						@endforeach
						</div><!--/row-->
					</div>  
					</div>
					<?php $count++; ?>
					@endforeach
					<div class="b-dashed"></div>
				</div><!--/search-flights-box-->
				@endif
			@endforeach
					
		@else
			<div>
				<h1>No flights results for the route on this date</h1>
			</div>  
        @endif
        </div><!--/col-md-9 col-12-->
      </div><!--/row-->
    </div><!--/container-->
  </section>
  <!--/search-section-a-->
  @include('includes.footer')

 <script type="text/javascript">
//-------------------------------Price filters------------------------------
    var slider = document.getElementById("myRange");
    var output = document.getElementById("price_show");
    output.innerHTML = slider.value;

    slider.oninput = function() {
      output.innerHTML = this.value;
    }
    
//------------------------End filters-----------------------------  
</script>