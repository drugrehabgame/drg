<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Providers\AppServiceProvider as AppServiceProvider;

class QuestsController extends Controller
{
    public function index(Request $request)
    {
    	if (isset($request->join)) {
    		$joinGame = AppServiceProvider::joinGame(Auth::user()->id, $request->join);
			$gameId = $request->join;	
    	} else {
    		$gameId = $request->continue;
    	} 
    	
		$gameDetails = AppServiceProvider::getGameDetails(Auth::user()->id, $gameId);
		$gameTasks = AppServiceProvider::getGameTasks(Auth::user()->id, $gameId);
		//var_dump($gameDetails,'<br /><br />',$gameTasks); die();
		return view('quests.index')->with(array('gamedetails'=>$gameDetails,'gametasks'=>$gameTasks,'gameId'=>$gameId));
    }
	
	public function dotask(Request $request)
	{
		$response = AppServiceProvider::doTask(Auth::user()->id, $request->gameId, $request->trigger);
		return response()->json(array('response'=>$response));
		
	}
}
