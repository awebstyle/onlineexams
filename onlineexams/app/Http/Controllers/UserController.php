<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Quiz;
use App\Models\Score;
use App\Models\Developer;
use App\Models\Feedback;


class UserController extends Controller
{
    
    public function userHistory(){
        $scores = Score::where('email', Session::get('developer')->email)->get();
        return view('user.history')->with('scores', $scores);
    }

    public function ranking(){
        $developers = Developer::orderBy('score', 'desc')->get();
        return view('user.ranking')->with('developers', $developers);
    }

    

   
}
