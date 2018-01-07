<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Slider;

class MainController extends Controller
{
	public function showController(){

		$service = Service::all();
		$slider = Slider::all();

    	return view('welcome', ['service'=>$service, 'slider'=>$slider]);
    }
}
