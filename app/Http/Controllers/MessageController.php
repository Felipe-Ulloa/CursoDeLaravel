<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;

use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
   
	public function Store(){

		$message = request()->validate([

			'name'=>'required',
			'email'=>'required|email',
			'subject'=>'required',
			'content'=>'required|min:3',
		]);

		//enviar email

		Mail::to('felipe@example.com')->send(new MessageReceived($message));
		
		return 'Mensaje Enviado';
	}


}
