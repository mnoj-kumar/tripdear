@extends('includes.app', ['namePage' => 'home',])
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tripdear.com | Thank you for visiting us!</title>
<style type="text/css">
body{
	padding: 0px;
	margin: 0px;
	color: #383636;
}
a{
	color: #0093cc;
}
.wraper{
	margin: 0 auto;
}
@media (min-width: 768px) {
	.wraper {
	width: 600px;
	}
}
@media (max-width: 768px) {
	.wraper {
    margin: 0px;
    width: 100%;
	}
}
</style>
</head>
<body style="font-family: sans-serif; background-color: #f7f7f7;">
	<div class="wraper" style="background-color: #fff;box-shadow: 0px 0px 5px #a9a9a947;border: 1px solid #fff;">
		<img src="{{ URL::to('assets/images/banner.jpg') }}" style="width: 100%;">

		<section style="padding: 20px 0px;">
			<div style="text-align: center;">
				<h1 style="font-size: 30px; margin-bottom: 10px; margin-top: 0px; ">Thank you for visiting us!</h1>
			</div>
			<div style="padding: 10px 20px;">
				<h3 style="margin-bottom: 5px; margin-top: 5px;">Customer Details</h3>
				<p style="margin-bottom: 5px; margin-top: 5px; font-size:13px; "><strong>Name: </strong> {{$fName}} {{$mName}} {{$lName}} </p>
				<p style="margin-bottom: 5px; margin-top: 5px; font-size:13px; "><strong>Gender: </strong> {{$gender}}</p>
				<p style="margin-bottom: 5px; margin-top: 5px; font-size:13px; "><strong>Date of Birth: </strong> {{$dayDOB}}/{{$monthDOB}}/{{$yearDOB}} </p>
				<p style="margin-bottom: 0px; margin-top: 5px; font-size:13px; "><strong>Email: </strong> {{$to_email}}</p>
				<p style="margin-bottom: 0px; margin-top: 5px; font-size:13px; ">{{$address1}} {{$address2}}, {{$city}}, {{$country}} ({{$zipCode}}), {{$bPhone}},{{$altPhone}}.</p>
			</div>
		</section>

		<section>
			<h5 style="margin-bottom: 0px; margin-top: 0px; background-color: #f8f9fa; padding: 5px 20px;"> Summery of Your Booking</h5>
			<h5 style="margin-top: 0px; margin-bottom: 0px; background-color: #003d70; padding: 7px 20px; color: #ffffff;"> <img src="{{ URL::to('assets/images/go.png') }}" style="margin-right: 4px;"> Outbound Flight</h5>
			@if(count($data->route) > 0 )
			<div style="display: flex;">
				<div style="padding: 15px; width: 33.33%;">
					<img src="{{ URL::to('assets/images/airline/'.$data->CarrierCode.'.png') }}" style="width: 70px;">
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; text-transform: uppercase;">{{ $data->route[0]->airline }}</p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; color: #7d7d7d; text-transform: uppercase;">{{  $data->route[0]->airlineCode }}</p>
				</div>
				<div style="padding: 15px; width: 33.33%; text-align: center;">
					<p style="margin-bottom: 5px; margin-top: 30px; font-size: 14px; font-weight: 600;"><span>{{ date('h:i A D, j F', strtotime($data->route[0]->startTrip)) }}</span></p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; font-weight: 600;"><span>{{ date('h:i A D, j F', strtotime($data->route[0]->endTrip))  }}</span></p>
				</div>
				<div style="padding: 15px; width: 33.33%; text-align: right;">
					<p style="margin-bottom: 4px; margin-top: 20px; font-size: 14px; font-weight: 600; text-transform: uppercase;">{{ $data->route[0]->originAirportName }} ({{ $data->route[0]->departureIata }})</p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; font-weight: 600; text-transform: uppercase;">{{ $data->route[0]->destinationAirportName }} ({{ $data->route[0]->arrivalIataCode}})</p>
					<p style="margin-bottom: 0px; margin-top: 5px; font-size: 14px; color: #7d7d7d; text-transform: uppercase;">Total Trip Time : {{ $data->route[0]->totalDuration }}</p>
				</div>
			</div>
				@if(isset($data->route[0]->stopInfo[0]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[0]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[0]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[0]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[0]->stopInfo[0]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[0]->stopInfo[0]->departureIataCode }}</span> → <span>{{ $data->route[0]->stopInfo[0]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[0]->stopInfo[0]->airline}} {{$data->route[0]->stopInfo[0]->airlineCode}}</p>
						</div>
						@if($data->route[0]->stopInfo[0]->arrivalIataCode  != $data->route[0]->arrivalIataCode && $data->route[0]->stopInfo[0]->arrivalIataCode  != $data->route[0]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[0]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[0]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[0]->stopInfo[0]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[0]->stopInfo[1]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[1]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[1]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[1]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[0]->stopInfo[1]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[0]->stopInfo[1]->departureIataCode }}</span> → <span>{{ $data->route[0]->stopInfo[1]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[0]->stopInfo[1]->airline}} {{$data->route[0]->stopInfo[1]->airlineCode}}</p>
						</div>
						@if($data->route[0]->stopInfo[1]->arrivalIataCode  != $data->route[0]->arrivalIataCode && $data->route[0]->stopInfo[1]->arrivalIataCode  != $data->route[0]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[1]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[1]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[0]->stopInfo[1]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[0]->stopInfo[2]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[2]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[2]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[2]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[0]->stopInfo[2]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[0]->stopInfo[2]->departureIataCode }}</span> → <span>{{ $data->route[0]->stopInfo[2]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[0]->stopInfo[2]->airline}} {{$data->route[0]->stopInfo[2]->airlineCode}}</p>
						</div>
						@if($data->route[0]->stopInfo[2]->arrivalIataCode  != $data->route[0]->arrivalIataCode && $data->route[0]->stopInfo[2]->arrivalIataCode  != $data->route[0]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[2]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[2]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[0]->stopInfo[2]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[0]->stopInfo[3]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[3]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[3]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[3]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[0]->stopInfo[3]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[0]->stopInfo[3]->departureIataCode }}</span> → <span>{{ $data->route[0]->stopInfo[3]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[0]->stopInfo[3]->airline}} {{$data->route[0]->stopInfo[3]->airlineCode}}</p>
						</div>
						@if($data->route[0]->stopInfo[3]->arrivalIataCode  != $data->route[0]->arrivalIataCode && $data->route[0]->stopInfo[3]->arrivalIataCode  != $data->route[0]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[0]->stopInfo[3]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[0]->stopInfo[3]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[0]->stopInfo[3]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
			@endif
			
			<h5 style="margin-top: 0px; margin-bottom: 0px; background-color: #003d70; padding: 7px 20px; color: #ffffff;"> <img src="{{ URL::to('assets/images/back.png') }}" style="margin-right: 4px;"> Outbound Flight</h5>
			@if(count($data->route) > 0 && isset($data->route[1]->departureIata) )
			<div style="display: flex;">
				<div style="padding: 15px; width: 33.33%;">
					<img src="{{ URL::to('assets/images/airline/'.$data->CarrierCode.'.png') }}" style="width: 70px;">
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; text-transform: uppercase;">{{ $data->route[1]->airline }}</p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; color: #7d7d7d; text-transform: uppercase;">{{  $data->route[1]->airlineCode }}</p>
				</div>
				<div style="padding: 15px; width: 33.33%; text-align: center;">
					<p style="margin-bottom: 5px; margin-top: 30px; font-size: 14px; font-weight: 600;"><span>{{ date('h:i A D, j F', strtotime($data->route[1]->startTrip)) }}</span></p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; font-weight: 600;"><span>{{ date('h:i A D, j F', strtotime($data->route[1]->endTrip))  }}</span></p>
				</div>
				<div style="padding: 15px; width: 33.33%; text-align: right;">
					<p style="margin-bottom: 4px; margin-top: 20px; font-size: 14px; font-weight: 600; text-transform: uppercase;">{{ $data->route[0]->destinationAirportName }} ({{ $data->route[1]->departureIata }})</p>
					<p style="margin-bottom: 0px; margin-top: 0px; font-size: 14px; font-weight: 600; text-transform: uppercase;">{{ $data->route[0]->originAirportName }} ({{ $data->route[1]->arrivalIataCode}})</p>
					<p style="margin-bottom: 0px; margin-top: 5px; font-size: 14px; color: #7d7d7d; text-transform: uppercase;">Total Trip Time : {{ $data->route[1]->totalDuration }}</p>
				</div>
			</div>
				@if(isset($data->route[1]->stopInfo[0]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[0]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[0]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[0]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[1]->stopInfo[0]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[1]->stopInfo[0]->departureIataCode }}</span> → <span>{{ $data->route[1]->stopInfo[0]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[1]->stopInfo[0]->airline}} {{$data->route[1]->stopInfo[0]->airlineCode}}</p>
						</div>
						@if($data->route[1]->stopInfo[0]->arrivalIataCode  != $data->route[1]->arrivalIataCode && $data->route[1]->stopInfo[0]->arrivalIataCode  != $data->route[1]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[0]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[0]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[1]->stopInfo[0]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[1]->stopInfo[1]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[1]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[1]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[1]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[1]->stopInfo[1]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[1]->stopInfo[1]->departureIataCode }}</span> → <span>{{ $data->route[1]->stopInfo[1]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[1]->stopInfo[1]->airline}} {{$data->route[1]->stopInfo[1]->airlineCode}}</p>
						</div>
						@if($data->route[1]->stopInfo[1]->arrivalIataCode  != $data->route[1]->arrivalIataCode && $data->route[1]->stopInfo[1]->arrivalIataCode  != $data->route[1]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[1]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[1]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[1]->stopInfo[1]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[1]->stopInfo[2]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[2]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[2]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[2]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[1]->stopInfo[2]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[1]->stopInfo[2]->departureIataCode }}</span> → <span>{{ $data->route[1]->stopInfo[2]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[1]->stopInfo[2]->airline}} {{$data->route[1]->stopInfo[2]->airlineCode}}</p>
						</div>
						@if($data->route[1]->stopInfo[2]->arrivalIataCode  != $data->route[1]->arrivalIataCode && $data->route[1]->stopInfo[2]->arrivalIataCode  != $data->route[1]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[2]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[2]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[1]->stopInfo[2]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
				@if(isset($data->route[1]->stopInfo[3]->departureAT))
					<div style="padding: 10px;border-left: 2px dashed #eee;width: 96%;box-sizing: border-box;margin-left: 80px;position: relative; margin-bottom: 10px;">
						<div style="margin-bottom: 1.6em;">
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[3]->departureAT)) }}</p>
							<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[3]->departureAT)) }} </strong>  →  <strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[3]->arrivalAT)) }} </strong> ................................. <sub>{{$data->route[1]->stopInfo[3]->stopDuration}}</sub></p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;"><span>{{ $data->route[1]->stopInfo[3]->departureIataCode }}</span> → <span>{{ $data->route[1]->stopInfo[3]->arrivalIataCode }}</span> </p>
							<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{$data->route[1]->stopInfo[3]->airline}} {{$data->route[1]->stopInfo[3]->airlineCode}}</p>
						</div>
						@if($data->route[1]->stopInfo[3]->arrivalIataCode  != $data->route[1]->arrivalIataCode && $data->route[1]->stopInfo[3]->arrivalIataCode  != $data->route[1]->departureIata)
							<div style="">
								<p style="font-size: 12px; margin-top: 0px; margin-bottom: 5px;">{{ date('F j, Y', strtotime($data->route[1]->stopInfo[3]->arrivalAT))  }}</p>
								<p style="margin-bottom: 5px; margin-top: 0px;"><strong>{{ date('h:i A', strtotime($data->route[1]->stopInfo[3]->arrivalAT))  }}</strong> ................................... <sub>Change plane from → {{ $data->route[1]->stopInfo[3]->arrivalIataCode }}</sub></p>
							</div>
						@endif
					</div>
				@endif
			@endif
		</section>
		<!--/section-->

		<div>
			<table style="width: 100%; border-collapse: collapse;">
				<thead>
					<tr style="background-color: #34373f;">
						<th style="color: #ffffff; padding: 7px 10px;">Traveler Type</th>
						<th style="color: #ffffff; padding: 7px 10px;">Traveler</th>
						<th style="color: #ffffff; padding: 7px 10px;">Per Traveler</th>
						<th style="color: #ffffff; padding: 7px 10px;">Sub Total</th>
					</tr>
				</thead>
				<tbody>
					<tr style="border-bottom: 1px solid #eeeeee;">
						<td style="text-align: center; padding: 6px 10px;">Adult</td>
						<td style="text-align: center; padding: 6px 10px;">{{ $data->route[0]->adultsCount }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->route[0]->adultsPrice }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->adultsSubtotal }}</td>
					</tr>
					<tr style="border-bottom: 1px solid #eeeeee;">
						<td style="text-align: center; padding: 6px 10px;">Children</td>
						<td style="text-align: center; padding: 6px 10px;">{{ $data->route[0]->childrenCount }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->route[0]->childrenPrice }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->childrenSubtotal }}</td>
					</tr style="border-bottom: 1px solid #eeeeee;">
					<tr style="border-bottom: 1px solid #eeeeee;">
						<td style="text-align: center; padding: 6px 10px;">Infants</td>
						<td style="text-align: center; padding: 6px 10px;">{{ $data->route[0]->infantsCount }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->route[0]->infantsPrice }}</td>
						<td style="text-align: center; padding: 6px 10px;">$ {{ $data->infantsSubtotal }}</td>
					</tr>
					<tr style="border-bottom: 1px solid #eeeeee;background-color: #f8f8f8;">
						<td style="text-align: center; padding: 6px 10px;"></td>
						<td style="text-align: center; padding: 6px 10px;"></td>
						<td style="text-align: center; padding: 6px 10px;"></td>
						<td style="text-align: center; padding: 6px 10px;">Total Trip Cost:  <strong>{{ $data->currency }} {{ $data->route[0]->totalPrice }}</strong></td>
					</tr>
				</tbody>
			</table>
		</div>


		<footer class="footer-sec" style="background-color: #434b58; padding: 10px 15px;">
	     	<p style="text-align: center; margin-bottom: 0px; margin-top: 0px;">
		     	<a style="color: #ffffff;" href="#">Home</a>
		     	<a style="color: #ffffff;" href="#">Privacy</a>
		     	<a style="color: #ffffff;" href="#">T&Cs</a>
	     	</p>
	    </footer>
	</div><!--/wraper-->
	<!--footer-->
  	
</body>
</html>
@endsection
