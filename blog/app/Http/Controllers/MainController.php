<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Service;
use App\Slider;
use App\Social;
use App\Form;
use App\Animal;

class MainController extends Controller
{
	public function showController(){

		$service = Service::all();
		$slider = Slider::all();
		$social = Social::all();
		$form = Form::all();
		$animal = Animal::all();

    	return view('welcome', [
    		'service'=>$service, 
    		'slider'=>$slider, 
    		'social'=>$social,
    		'form'=>$form,
    		'animal'=>$animal
    	]);
    }

}
