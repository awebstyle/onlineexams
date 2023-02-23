<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use App\Models\Admin;
use App\Models\Developer;

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
                return redirect('/dashboard');
            }
            else return back();
        }
        else{
            return back();
        }
    }

    function userLogin(Request $request){
        $developer = Developer::where('email', $request->input('email'))->first();
        if($developer){
            if(Hash::check($request->input('password'), $developer->password)){
                Session::put('developer', $developer);
                return redirect('/dashboard');
            }
            else{
                return back()->with('status', 'wrong email or password');
            }
        } 
        else return back()->with('status', 'wrong email or password');
     }
        
    
    

    function logout(){
        if(Session::has('admin')){
            Session::forget('admin');
        }
        elseif(Session::has('developer')){
            Session::forget('developer');
        }
        
        return redirect('/');
    }
}
