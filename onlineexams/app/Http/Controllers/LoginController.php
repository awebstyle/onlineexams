<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

use App\Models\Admin;

class LoginController extends Controller
{
    function login(){
        return view('login.login');
    } 
    
    function adminLogin(Request $request){
        $admin = Admin::where('email', $request->input('email'))->first();
        if($admin){
            if($admin->password == $request->input('password')){
                Session::put('admin', $admin);
                return redirect('/admin/dashboard');
            }
            else return back();
        }
        else{
            return back();
        }
    }

    function logout(){
        Session::forget('admin');
        return redirect('/');
    }
}
