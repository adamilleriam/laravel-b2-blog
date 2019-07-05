<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{

	public function index(){

		$data['title'] = 'Subscriber Lists';
		$data['subscribers'] = Subscriber::all();
		$data['total_sub'] = Subscriber::count('id');
		return view('admin.subscriber',$data);


	}


    public function addSubscriber(Request $request){

    	$request->validate([
    		'email' => 'required|email|unique:subscribers'
    	]);
    
    	Subscriber::create(['email'=>$request->email]);
    	return redirect()->route('home');
    }


}
