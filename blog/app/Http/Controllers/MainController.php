<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
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

    public function postController(Request $request, $orderId){
        $this->validate($request,[
            'name' => 'min:3',
            'email' => 'required|email',
            'subject' => 'min:3',
            'textarea' => 'min:5',
            
        ]);

        $order = Order::findOrFail($orderId);
        Mail::to($request->user())->send(new OrderShipped($order));

        Mail::send();

    }
    
}
