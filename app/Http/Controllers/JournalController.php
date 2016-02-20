<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JournalController extends Controller
{
    public function index(){
        return view('journal.index');
    }

    public function store(Request $request){

    }
}
