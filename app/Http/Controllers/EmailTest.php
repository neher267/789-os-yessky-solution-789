<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailTest extends Controller
{

	public function send()
	{
		$data = array();
		$data['to'] = 'neher1994@gmail.com';
		$data['subject'] = 'Test Email';
		$data['body'] = 'Hello World!';

		//dd($data['to']);

		
	    Mail::send('mail.template', $data, function($message) use ($data){
	    	$message->from('jhonbaker404@gmail.com', 'Neher Halder');
	    	$message->to($data['to']);
	    	$message->subject($data['subject']);
	    });

	    return "Send";
	}
}
