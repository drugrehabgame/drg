<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Providers\AppServiceProvider as AppServiceProvider;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        if(\Auth::check()){
            $userProfile = AppServiceProvider::getUserProfile(\Auth::user()->id);
            $profile = array();
            foreach ($userProfile['scores'] as $key => $value) {
                $metric_id = $value['metric']['id'];
                $profile[$metric_id] = array('name'=>$value['metric']['id'],'points'=>$value['value']);
            }
            view()->share('UserProfile', $profile);
        }
    }
}
