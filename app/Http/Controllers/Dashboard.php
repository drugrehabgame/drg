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
    	return response()->view('dashboard.index', [
            'journals' => $journal
        ]);
    }
	
	public function test()
    {
    	AppServiceProvider::createUser();
    }
}
