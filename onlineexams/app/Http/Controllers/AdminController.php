<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class AdminController extends Controller
{
    public function adminHome(){
        $quizzes = Quiz::all();
        return view('admin.dashboard')->with('quizzes', $quizzes);
    }

    public function adminRanking(){
        return view('admin.ranking');
    }

    public function adminFeedback(){
        return view('admin.feedback');
    }

    public function viewAdminFeedback(){
        return view('admin.viewfeedback');
    }
}
