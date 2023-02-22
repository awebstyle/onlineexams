<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Session;

use App\Models\Quiz;

class QuizzController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response(view("quizz.create"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $quiz = new Quiz();
        $quiz->topic = $request->input('topic');
        $quiz->totalquestions = $request->input('totalquestions');
        $quiz->mark = $request->input('mark');
        $quiz->timelimit = $request->input('timelimit');
        $quiz->description = $request->input('description');
        $quiz->num = 0;

        $quiz->save();
        $quiz = Quiz::where('topic', $request->input('topic'))->first();
        Session::put('quiz', $quiz);

        

        return redirect("questions/create");
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
    /* public function destroy(string $id): RedirectResponse
    {
        $id = 1;
        return view('quizz.destroy')->with('quiz', $id);
    } */

    public function destroy()
    {
        
        return view('quizz.destroy');
    }
}
