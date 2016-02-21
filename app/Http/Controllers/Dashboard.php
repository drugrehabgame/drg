<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Providers\AppServiceProvider as AppServiceProvider;
use App\UserJournal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function index()
    {
		$journal = UserJournal::where('user_id', \Auth::user()->id)
            ->orderBy('created_at', 'DESC')->paginate(6);
    	$availableQuests = AppServiceProvider::getAvailableQuests(Auth::user()->id);
		$userProfile = AppServiceProvider::getUserProfile(Auth::user()->id);
		$profile = array();

		foreach ($userProfile['scores'] as $key => $value) {
			$metric_id = $value['metric']['id'];
			$profile[$metric_id] = array('name'=>$value['metric']['id'],'points'=>$value['value']); 
		}
		
		//$key = array_search('exp', $userProfile['scores']);
		//var_dump($key);
		//die();
		return view('dashboard.index')->with(array('quests'=>$availableQuests,'profile'=>$profile, 'journals' => $journal));
    }
	
	public function test()
    {
    	AppServiceProvider::getAvailableQuests();
		die();
    }
}
