<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Score;
use App\Models\Developer;

class AdminController extends Controller
{
    public function home(){
        $quizzes = Quiz::all();
        $scores = Score::all();
        return view('admin.dashboard')->with('quizzes', $quizzes)->with('scores', $scores);
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

    public function startQuiz($topic){
        

        if(!Session::get('num') && !Session::get('quiz')){
            Session::put('num', 1);

            $quiz = Quiz::where('topic', $topic)->first();
            Session::put('quiz', $quiz);
            
        }
        
        return redirect('/assessements');
    } 

    public function assessements(){
        $question = Question::where('topic', Session::get('quiz')->topic)
                ->where('numquestion', Session::get('num'))
                ->first();
        
        
        Session::put('question', $question);

        return view('admin.assessements')->with('question', $question);
    }

    public function saveAnswer($id, Request $request){
        
        $question = Question::find($id);

        if(Session::has('admin')){
            $score = Score::where('email', Session::get('admin')->email)
                ->where('topic', Session::get('quiz')->topic)->first();
        }
        else{
            $score = Score::where('email', Session::get('developer')->email)
                ->where('topic', Session::get('quiz')->topic)->first();
            
            $developer = Developer::where('email', Session::get('developer')->email)->first();
        }
        

        
        if($request->input('ans')){
            if($request->input('ans') == Session::get('question')->correct){
                if(!Session::get('score')){
                    Session::put('score', Session::get('quiz')->mark);
                }
                else{
                    $totalScore = Session::get('score') + Session::get('quiz')->mark;
                    Session::forget('score');
                    Session::put('score', $totalScore);
                }
            }

            if(!Session::get('solved')){
                Session::put('solved', 1);
            }
            else{
                $solved = Session::get('solved') + 1;
                Session::forget('solved');
                Session::put('solved', $solved);
            }
        }

        if(!$score && Session::get('num') == Session::get('quiz')->totalquestions){

            $newScore = new Score();
            $newScore->topic = Session::get('quiz')->topic;
            if(Session::has('admin')){
                $newScore->email = Session::get('admin')->email;
            }
            else $newScore->email = Session::get('developer')->email;
            
            if(Session::get('score')){
                $newScore->score = Session::get('score');
                if(Session::get('developer')){
                    $developer->score = $developer->score + Session::get('score');
                    $developer->update();
                }
            }
            else{
                $newScore->score = 0;
            }
            $newScore->mark = Session::get('quiz')->mark;
            $newScore->numquestion = Session::get('quiz')->totalquestions;

            if(Session::get('solved')){
                $newScore->solved = Session::get('solved');
            }
            else{
                $newScore->solved = 0;
            }

            $newScore->save();
        
        }
        
        elseif($score && Session::get('num') == Session::get('quiz')->totalquestions){
            
            if(Session::get('score')){
                if(Session::get('developer')){
                    $developer->score = $developer->score - $score->score + Session::get('score');
                    $developer->update();
                }
                $score->score = Session::get('score');
            }
            else{
                $score->score = 0;
            }

            if(Session::get('solved')){
                $score->solved = Session::get('solved');
            }
            else{
                $score->solved = 0;
            }

            $score->update();
            
        }

        return redirect('/quiz/nextquestion');
        
    }

    public function nextQuestion(){
        $num = Session::get('num') + 1;
        Session::forget('num');
        Session::put('num', $num);

        if( $num <= Session::get('quiz')->totalquestions){
            return redirect('/assessements');
        }
        else{
            Session::forget('num');
            Session::forget('score');
            Session::forget('solved');
            return redirect('/getresults');
        } 
    }

    public function getResults(){
        if(Session::has('quiz')){
            if(Session::has('admin')){
                $score = Score::where('topic', Session::get('quiz')->topic)
                ->where('email', Session::get('admin')->email)
                ->first();
            }
            else{
                $score = Score::where('topic', Session::get('quiz')->topic)
                ->where('email', Session::get('developer')->email)
                ->first();
            }

            Session::forget('quiz');

            return view('admin.results')->with('score', $score);
            
        }
        else return redirect('/dashboard');
       
        
        
    }


}
