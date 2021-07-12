<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class pagesController extends Controller
{
//-------------Welcome page-------------------    
    public function index(){
        return view('index');
    }
	
	public function aboutUs(){
        return view('about-us');
    }
	public function flightAsia(){
        return view('cheap-flights-to-asia');
    }
	public function flightEurope(){
        return view('cheap-flights-to-europe');
    }
	public function vacation(){
        return view('vacation-packages');
    }

//-------------Address Autocomplete input field ----------------
    public function locations(Request $request) 
    { 
        $category = $request->category;
        $term = $request->term;
        $locations = file_get_contents("https://api.skypicker.com/locations?term=$term&locale=en-US&location_types=airport&location_types=city&location_types=country&limit=5&active_only=true&sort=name");
        $locations = json_decode($locations);
        foreach($locations->locations as $location){
            if($category == 1){
                if($location->type == "airport")
                {
                    echo '<div class="search_item search_item1"><span>'.$location->name.'</span><span style="float:right;" class="location_name1">'.$location->code.'</span></div>';
                }
            }
            if($category == 2){
                if($location->type == "airport")
                {
                    echo '<div class="search_item search_item2"><span>'.$location->name.'</span><span style="float:right;" class="location_name2">'.$location->code.'</span></div>';
                }
            }
        }
    }
//-------------------Flight-Search page---------------------

    public function flightSearch(Request $request){
        $origin = $request->origin;
        $destination = $request->destination;
        $departureDate = $request->departureDate;
        $returnDate = $request->returnDate;
        $adults = $request->noofadults;
        $infants = $request->infants;
        $children = $request->children;
        $class = $request->class;
        $passenger= $adults + $infants + $children;
        $nonStop = $request->nonStop;
		$maxprice = 5000;
		
		if(isset($request->maxprice)){
			$maxprice = $request->maxprice;
		}
    // dd($nonStop);

        $loc1 = file_get_contents("http://66.42.124.77/amadeus/city.php?iatacode=$origin");
        $loc1 = json_decode($loc1);
        $originAirportName = $loc1->data[0]->name;

        $loc2 = file_get_contents("http://66.42.124.77/amadeus/city.php?iatacode=$destination");
        $loc2 = json_decode($loc2);
        $destinationAirportName = $loc2->data[0]->name;
        
        if(isset($request->departureDate) && isset($request->returnDate)){
            $api_link = "http://66.42.124.77/amadeus/flights.php?origin=".$origin."&destination=".$destination."&departureDate=".$departureDate."&is_return=true&returnDate=".$returnDate."&noofadults=".$adults."&children=".$children."&infants=".$infants."&class=".$class."&nonStop=".$nonStop."&passenger=".$passenger;
        }else{
            $api_link = "http://66.42.124.77/amadeus/flights.php?origin=".$origin."&destination=".$destination."&departureDate=".$departureDate."&is_return=false&noofadults=".$adults."&children=".$children."&infants=".$infants."&class=".$class."&nonStop=".$nonStop."&passenger=".$passenger;
        }
        $json_file=file_get_contents($api_link);
        $array=json_decode($json_file,TRUE);
		
        if(isset($array['dictionaries'])){
            $airlinesInfo = $array['dictionaries']['carriers'];
        }
        $airline="";
        $airlineCode="";
        $res=array();
		if(!isset($array->errors)){
            if($array!=null){
               error_reporting (E_ALL ^ E_NOTICE);
                foreach ($array['data'] as $value) {
                    $route=array();
                    $seat=$value['numberOfBookableSeats'];
                    $currency=$value['travelerPricings'][0]['price']['currency'];
                    $adultsCount = 0; $childrenCount = 0; $infantsCount = 0;
                    $adultsPrice = 0; $childrenPrice = 0; $infantsPrice = 0;
                    foreach($value['travelerPricings'] as $traveler){
                        if($traveler['travelerType'] == 'ADULT'){
                            $adultsCount=$adultsCount+1;
                            $adultsPrice=$traveler['price']['total'];
                        }
                        if($traveler['travelerType'] == 'CHILD'){
                            $childrenCount=$childrenCount+1;
                            $childrenPrice=$traveler['price']['total'];
                        }
                        if($traveler['travelerType'] == 'HELD_INFANT'){
                            $infantsCount=$infantsCount+1;
                            $infantsPrice=$traveler['price']['total'];
                        }
                    }
				 
                    $adultsSubtotal = $adultsPrice * $adultsCount;
                    $childrenSubtotal = $childrenPrice * $childrenCount; 
                    $infantsSubtotal = $infantsPrice* $infantsCount;

                    $totalPrice=$value['price']['total'];
                    $CarrierCode = $value['itineraries'][0]['segments'][0]['operating']['carrierCode'];
                    $returnCarrierCode = $value['itineraries'][1]['segments'][0]['operating']['carrierCode'];
                    if(isset($array['dictionaries'])){
                        $airlinesInfo = $array['dictionaries']['carriers'];
                        $aircraftInfo = $array['dictionaries']['aircraft'];
                    }
                    foreach ($value['itineraries'] as $itineraries) {
                        $stopInfo = array();
                        $nos = 0 ;
                        $totalDuration = explode('PT',$itineraries['duration'])[1];
                        if($itineraries['segments'][0]['departure']['iataCode'] == $origin){
                            $startTrip =$itineraries['segments'][0]['departure']['at'];
                        }
                        if($itineraries['segments'][0]['arrival']['iataCode'] == $destination){
                            $endTrip = $itineraries['segments'][0]['arrival']['at'];
                        }else if($itineraries['segments'][1]['arrival']['iataCode'] == $destination){
                            $endTrip = $itineraries['segments'][1]['arrival']['at'];
                        }else if($itineraries['segments'][2]['arrival']['iataCode'] == $destination){
                            $endTrip = $itineraries['segments'][2]['arrival']['at'];
                        }else if($itineraries['segments'][3]['arrival']['iataCode'] == $destination){
                            $endTrip = $itineraries['segments'][3]['arrival']['at'];
                        }

                        foreach($itineraries['segments'] as $segments){
                            $nos++;
                            $stop[] = $nos;
                            $departureIataCode = $segments['departure']['iataCode'];

                            if($departureIataCode == $origin || $departureIataCode == $destination){
                                $departureIata = $departureIataCode;
                            }
                            $arrivalIataCode = $segments['arrival']['iataCode'];

                            $departureAt = $segments['departure']['at'];
                            $arrivalAt = $segments['arrival']['at'];
                            $number = $segments['number'];
                            $aircraftCode = $segments['aircraft']['code'];
                            $operatingCarrierCode = $segments['operating']['carrierCode'];
                            $stopDuration = explode('PT',$segments['duration'])[1];
                            if(isset($airlinesInfo)){
                                foreach($airlinesInfo as  $key => $solu){
                                    if($key == $segments['carrierCode']){
                                        $airline = $solu;
										$airlineKey = $key;
                                    }
                                    if($nonStop == 'false'){
                                        if($key == $itineraries['segments'][0]['carrierCode']){
                                            $Stopairline =  $solu;
											$StopairlineKey = $key;
                                        }
                                    }
                                }
                                foreach($aircraftInfo as  $key => $solu){
                                    if($key == $segments['aircraft']['code']){
                                        $airlineCode = $solu; 
                                    }
                                    if($nonStop == 'false'){
                                        if($key == $itineraries['segments'][0]['aircraft']['code']){
                                            $StopairlineCode =  $solu;
                                        }
                                    }
                                }
                            }
                            $stopInfo[]=array(
                                'departureIataCode' => $departureIataCode,
                                'arrivalIataCode' => $arrivalIataCode,
                                'departureAT' => $departureAt,
                                'arrivalAT' => $arrivalAt,
                                'number' => $number,
                                'aircraftCode' => $aircraftCode,
                                'operatingCarrierCode' => $operatingCarrierCode,
                                'stopDuration' => $stopDuration,
                                'airline'=>$airline,
                                'airlineCode' => $airlineCode,
                            );
                        }
						
                        $route[]=array(
                            'departureIata' => $departureIata,
                            'arrivalIataCode' => $arrivalIataCode,
                            'originAirportName' => $originAirportName,
                            'destinationAirportName' => $destinationAirportName,
                            'stopInfo' => $stopInfo,
                            'nos' => $nos -1,
                            'totalDuration' => $totalDuration,
                            'startTrip' => $startTrip,
                            'endTrip' => $endTrip,
                            'adultsCount'=>$adultsCount,
                            'childrenCount'=>$childrenCount,
                            'infantsCount'=>$infantsCount,
                            'adultsPrice'=>$adultsPrice,
                            'childrenPrice'=>$childrenPrice,
                            'infantsPrice'=>$infantsPrice,
                            'totalPrice'=>$totalPrice,
                            'class'=>$class,
                            'airline'=>$airline,
							'airlineKey'=>$airlineKey,
                            'airlineCode' => $airlineCode,
                            'Stopairline'=>$Stopairline,
							'StopairlineKey'=>$StopairlineKey,
                            'StopairlineCode' => $StopairlineCode,
                        );
                        $temp =$origin; $origin =$destination;   $destination =$temp;
                    }
                    $res[]=array(
                       'route'=>$route,
                       'nos' => $nos -1,
                       'totalPrice'=>$totalPrice, 
                       'CarrierCode'=>$CarrierCode,
                       'returnCarrierCode'=>$returnCarrierCode,
                       'currency'=>$currency,
					   'adultsSubtotal'=>$adultsSubtotal,
					   'childrenSubtotal'=>$childrenSubtotal,
					   'infantsSubtotal'=>$infantsSubtotal,
                       'adultsCount'=>$adultsCount,
                       'childrenCount'=>$childrenCount,
                       'infantsCount'=>$infantsCount,
                       'adultsPrice'=>$adultsPrice,
                       'childrenPrice'=>$childrenPrice,
                       'infantsPrice'=>$infantsPrice,
                       'numberOfBookableSeats'=>$seat,
                    );
                }  
            }
        }
        return view('flight-search',compact('maxprice','res','class','adults','children','infants','origin','destination','departureDate','returnDate','passenger','nonStop'));
    }    

//------------------Billing-Payment page--------------------------
    public function billingPayment(Request $request){
         $data['data'] = json_decode($request->obj);
        return view('billing-payment', $data);
    }
//------------------After-booking Thankyou page------------------------
    public function thankYou(Request $request){

        $data['data'] = json_decode($request->obj);
        $data+=['fName'=>$request->fname,
			'mName'=>$request->mname,
			'lName'=>$request->lname,
			'gender'=>$request->gender,
			'dayDOB'=>$request->dobday,
			'monthDOB'=>$request->dobmonth,
			'yearDOB'=>$request->dobyear,
			'address1'=>$request->address1,
			'address2'=>$request->address2,
			'city'=>$request->city,
			'country'=>$request->country,
			'zipCode'=>$request->zipCode,
			'bPhone'=>$request->bph,
			'altPhone'=>$request->altph,
			'to_email'=>$request->email];
        $to_email = $request->email;
		        

        Mail::send('thank-you',$data,function ($message) use ($to_email) {
            $message->to($to_email)->cc('tripdear595@gmail.com')->subject('Flight Booking Ticket Details');
         //   $message->embed(public_path().'\assets\images\go.png');
        });
        return view('thank-you',$data);						
    }
//--------------Contact-us page----------------
    public function contactUs(){
        return view('contact-us');
    }
	
//-----------------SendContactUs---------------------------
	public function sendContact(Request $request){

    $data=[
			'name'=>$request->name,
			'email'=>$request->email,
			'phone'=>$request->phone,
			'msg'=>$request->msg
			];
			
        $to_email = $request->email;
		        

        Mail::send('contact-us-request-message',$data,function ($message) use ($to_email) {
            $message->to($to_email)->Bcc('tripdear595@gmail.com')->subject('!! Enquiry message !!');
        });
        return redirect('/contact-us');						
    }

}
