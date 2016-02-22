<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Providers\AppServiceProvider as AppServiceProvider;
use App\User as UserModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AlliesController extends Controller
{
    public function index(){
      
      	$alliesPlayLife = AppServiceProvider::getFriends(Auth::user()->id);
		$allies = array();
		if($alliesPlayLife){
			foreach ($alliesPlayLife['data'] as $ally) {
				if ($ally['id'] != Auth::user()->id) {
					$user = UserModel::find($ally['id']);
					if(!is_null($user)){
						$allies[$ally['id']] = array('character_name'=>$user->character_name);
					}
				}
			}
		}
      
       return view('allies.index')->with(
			array('allies'=>$allies));
    }
  
}
