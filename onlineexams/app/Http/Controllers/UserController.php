<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Score;

class UserController extends Controller
{
    /* public function userHome(){
        $quizzes = Quiz::all();
        $scores = Score::all();
        return view('user.home')->with('quizzes', $quizzes)->with('scores', $scores);
    } */

    public function userHistory(){
        return view('user.history');
    }

    public function userRanking(){
        return view('user.ranking');
    }

   
}
