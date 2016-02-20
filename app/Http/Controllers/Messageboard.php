<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use App\Messageboard as MessageboardModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class Messageboard extends Controller
{
    public function index() 
	{
		return view('messageboard.index');
	}
	
	public function addMessage(Request $request)
	{
		$message = new MessageboardModel;
		$message->message = $request->message;
		$message->status = 'A';
		$message->user_id = Auth::user()->id;
		$message->save();
		return response()->json(array('success'=>1));
	}
	
	public function getMessages(Request $request)
	{
		return response()->json(MessageboardModel::getMessages($request->from,$request->to));
	}
}
