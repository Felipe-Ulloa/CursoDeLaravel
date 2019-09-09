<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
   
	public function Store(Request $request){

		request()->validate([

			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required|min:3',
		]);

		
		
		return 'datos validados';
	}


}
