<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getInfo(){
        return view('pages.info');
    }

    public function getSupport(){
        return view('pages.support');
    }
}
