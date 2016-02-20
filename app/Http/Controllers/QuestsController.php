<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestsController extends Controller
{
    public function index(){
        return view('quests.index');
    }
}
