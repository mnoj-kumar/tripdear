<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function destinations (){
		return view('destinations');
	}
	public function losangelesChristchurch (){
		return view('destinations.losangeles-christchurch');
	}
	public function atlantaCapetown (){
		return view('destinations.atlanta-capetown');
	}
	public function chicagoDubai (){
		return view('destinations.chicago-dubai');
	}
	public function dallasAuckland (){
		return view('destinations.dallas-auckland');
	}
	public function losangelesSeoul (){
		return view('destinations.losangeles-seoul');
	}
	public function newyorkParis (){
		return view('destinations.newyork-paris');
	}
	public function seattleLondonheathrow (){
		return view('destinations.seattle-londonheathrow');
	}
	
}

