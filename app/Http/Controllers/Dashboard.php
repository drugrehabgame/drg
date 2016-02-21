<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Providers\AppServiceProvider as AppServiceProvider;
use App\User as UserModel;
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

		$alliesPlayLife = AppServiceProvider::getFriends(Auth::user()->id);
		$allies = array();
		foreach ($alliesPlayLife['data'] as $ally) {
			if ($ally['id'] != Auth::user()->id) {
				$user = UserModel::find($ally['id']);
				$allies[$ally['id']] = array('character_name'=>$user->character_name);
			}
		}
		return view('dashboard.index')->with(array('quests'=>$availableQuests,'profile'=>$profile,'allies'=>$allies, 'journals' => $journal));

    }
	
	public function test()
    {
    	AppServiceProvider::getAvailableQuests();
		die();
    }
}
