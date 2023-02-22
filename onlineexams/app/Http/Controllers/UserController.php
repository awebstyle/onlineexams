<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userHome(){
        return view('user.home');
    }

    public function userHistory(){
        return view('user.history');
    }

    public function userRanking(){
        return view('user.ranking');
    }

    public function userExam(){
        return view('user.exam');
    }
}
