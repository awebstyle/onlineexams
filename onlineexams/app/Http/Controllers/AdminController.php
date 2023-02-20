<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome(){
        return view('admin.dashboard');
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
