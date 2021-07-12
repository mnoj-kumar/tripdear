<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','App\Http\Controllers\pagesController@index');
Route::get('/flight-search','App\Http\Controllers\pagesController@flightSearch');
Route::get('/billing-payment','App\Http\Controllers\pagesController@billingPayment');
Route::get('/contact-us','App\Http\Controllers\pagesController@contactUs'); 
Route::post('/contact-us','App\Http\Controllers\pagesController@sendContact'); 
Route::get('/get-locations', 'App\Http\Controllers\pagesController@locations');
Route::get('/thank-you', 'App\Http\Controllers\pagesController@thankYou');

Route::get('/flights', function(){
    return view('flights');
}); 

Route::get('/about-us', function(){
    return view('about-us');
}); 
Route::get('/cheap-flights-to-asia',function(){
    return view('cheap-flights-to-asia');
}); 
Route::get('/cheap-flights-to-europe', function(){
    return view('cheap-flights-to-europe');
}); 
Route::get('/vacation-packages', function(){
    return view('vacation-packages');
}); 
Route::get('/signup', function(){
    return view('signup');
});
Route::get('/terms', function(){
    return view('terms');
});
Route::get('/faqs', function(){
    return view('faqs');
});
Route::get('/routes', function(){
    return view('routes');
});
Route::get('/covid-travel', function(){
    return view('covid-travel');
});
Route::get('/privacy', function(){
    return view('privacy');
});
Route::get('/client-testimonial', function(){
    return view('client-testimonial');
});
Route::get('/affiliate-network', function(){
    return view('affiliate-network');
});
Route::get('/disclaimer', function(){
    return view('disclaimer');
});
Route::get('/explore', function(){
    return view('explore'); 
});
Route::get('/deals', function(){
    return view('deals');
});
Route::get('/cities', function(){
    return view('cities');
});
Route::get('/ccpa-notice', function(){
    return view('ccpa-notice');
});
//------------------Destinations-----------------------------------------------------
Route::get('/destinations', 'App\Http\Controllers\DestinationController@destinations');
Route::get('/destination/losangeles-christchurch', 'App\Http\Controllers\DestinationController@losangelesChristchurch');
Route::get('/destination/atlanta-capetown', 'App\Http\Controllers\DestinationController@atlantaCapetown');
Route::get('/destination/chicago-dubai', 'App\Http\Controllers\DestinationController@chicagoDubai');
Route::get('/destination/dallas-auckland', 'App\Http\Controllers\DestinationController@dallasAuckland');
Route::get('/destination/losangeles-seoul', 'App\Http\Controllers\DestinationController@losangelesSeoul');
Route::get('/destination/newyork-paris', 'App\Http\Controllers\DestinationController@newyorkParis');
Route::get('/destination/seattle-londonheathrow', 'App\Http\Controllers\DestinationController@seattleLondonheathrow');

Route::get('/destination/flights-to-las-vegas', function(){
	return view('destinations.flights-to-las-vegas');
});

Route::get('/destination/flights-to-dallas', function(){
	return view('destinations.flights-to-dallas');
});
Route::get('/destination/flights-to-hawaii', function(){
	return view('destinations.flights-to-hawaii');
});

Route::get('/destination/flights-to-san-diego', function(){
	return view('destinations.flights-to-san-diego');
});

Route::get('/destination/flights-to-paris', function(){
	return view('destinations.flights-to-paris');
});

Route::get('/destination/flights-to-Miami', function(){
	return view('destinations.flights-to-Miami');
});

Route::get('/destination/flights-to-mexico', function(){
	return view('destinations.flights-to-mexico');
});

//--------------------Routes-----------------------------------------------------------------------------------
Route::get('/route/miami-quito', function(){
	return view('routes.miami-quito');
});
Route::get('/route/los-angeles-shangai', function(){
	return view('routes.los-angeles-shangai');
});
Route::get('/route/las-vegas-denver', function(){
	return view('routes.las-vegas-denver');
});
Route::get('/route/las-vegas-seattle', function(){
	return view('routes.las-vegas-seattle');
});
Route::get('/route/los-angeles-christchurch', function(){
	return view('routes.los-angeles-christchurch');
});
Route::get('/route/denver-minneapolis', function(){
	return view('routes.denver-minneapolis');
});
Route::get('/route/minneapolis-denver', function(){
	return view('routes.minneapolis-denver');
});
Route::get('/route/seattle-las-vegas', function(){
	return view('routes.seattle-las-vegas');
});
Route::get('/route/new-york-tokyo', function(){
	return view('routes.new-york-tokyo');
});
Route::get('/route/chicago-hyderabad', function(){
	return view('routes.chicago-hyderabad');
});
Route::get('/route/chicago-hongkong', function(){
	return view('routes.chicago-hongkong');
});
Route::get('/route/new-york-rome', function(){
	return view('routes.new-york-rome');
});
Route::get('/route/anchorage-san-diego', function(){
	return view('routes.anchorage-san-diego');
});
Route::get('/route/denver-honolulu', function(){
	return view('routes.denver-honolulu');
});
Route::get('/route/las-vegas-san-diego', function(){
	return view('routes.las-vegas-san-diego');
});
Route::get('/route/atlanta-fort-lauderdale', function(){
	return view('routes.atlanta-fort-lauderdale');
});
Route::get('/route/las-vegas-los-angeles', function(){
	return view('routes.las-vegas-los-angeles');
});
Route::get('/route/anchorage-san-francisco', function(){
	return view('routes.anchorage-san-francisco');
});






