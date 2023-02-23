<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

use App\Models\Question;
use App\Models\Quiz;

class QuestionsController extends Controller
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
    public function create()
    {
        
        $quiz = Quiz::where('topic', Session::get('quiz')->topic)->first();
        //print ($quiz);
        if($quiz->num < $quiz->totalquestions){
            return view('questions.create')->with('quiz', $quiz);
        }
        else{
            Session::forget('quiz');
            return redirect('/dashboard');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $correct;

        if($request->input('correct') == "a"){
            $correct = $request->input('optiona');
        }
        elseif($request->input('correct') == "b"){
            $correct = $request->input('optionb');
        }
        elseif($request->input('correct') == "c"){
            $correct = $request->input('optionc');
        }
        else{
            $correct = $request->input('optiond');
        }
        
        $question = new Question();
        $question->topic = Session::get('quiz')->topic;
        $question->question = $request->input('question');
        $question->one = $request->input('optiona');
        $question->two = $request->input('optionb');
        $question->three = $request->input('optionc');
        $question->four = $request->input('optiond');
        $question->correct = $correct;

        $quiz = Quiz::where('topic', Session::get('quiz')->topic)->first();
        $quiz->num = $quiz->num + 1;
        $quiz->update();

        $question->numquestion = $quiz->num;
        $question->save();

        return redirect('questions/create');
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
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
