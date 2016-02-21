<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\UserJournal;

class JournalController extends Controller
{
    public function index(){
        $journal = UserJournal::where('user_id', \Auth::user()->id)
            ->orderBy('created_at', 'DESC')->get();
        return response()->view('journal.index', [
            'journals' => $journal
        ]);
    }

    public function store(Request $request){
        $input = [
            'status' => $request->input('status',0),
            'entry' => $request->input('entry',''),
            'user_id' => \Auth::user()->id
        ];
        UserJournal::create($input);
        return redirect('journal');
    }
}
