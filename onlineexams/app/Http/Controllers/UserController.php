<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Score;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /* public function userHome(){
        $quizzes = Quiz::all();
        $scores = Score::all();
        return view('user.home')->with('quizzes', $quizzes)->with('scores', $scores);
    } */

    public function userHistory(){
        $scores = Score::where('email', Session::get('developer')->email)->get();
        return view('user.history')->with('scores', $scores);
    }

    public function userRanking(){
        return view('user.ranking');
    }

   
}
