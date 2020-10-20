<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request)
    {
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		'name.required' => 'Pilas con este campo',
    	]);
    	// Send to the browser
    	// return new MessageReceive($message);
    	Mail::to('jakop.box@gmail.com')->queue(new MessageReceive($message));
    	return 'Datos validados';
    }
}
