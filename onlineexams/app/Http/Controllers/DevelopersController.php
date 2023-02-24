<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\Developer;
use App\Models\Score;

class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = Developer::all();
        return view('developers.index')->with('developers', $developers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $developer = new Developer();
        $developer->name = $request->input('name');
        $developer->gender = $request->input('gender');
        $developer->college = $request->input('college');
        $developer->phone = $request->input('phone');
        $developer->email = $request->input('email');
        $developer->password = bcrypt($request->input('password'));
        $developer->score = 0;

        $developer->save();
        Session::put('developer', $developer);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $developer = Developer::find($id);
        $developerScores = Score::where('email', $developer->email)->get();

        if($developerScores){
            foreach ($developerScores as $developerScore){
            $developerScore->delete();
            }
        }
        
        $developer->delete();

        return back()->with('status', 'the developer user account has been deleted successfully');
    }
}
