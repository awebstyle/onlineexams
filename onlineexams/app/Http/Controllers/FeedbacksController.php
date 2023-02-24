<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Feedback;

class FeedbacksController extends Controller
{
    public function feedback(){
        return view('feedback.feedback');
    }

    public function feedbackSuccess(){
        return view('feedback.feedbacksuccess');
    }

    public function sendFeedback(Request $request){
        $feedback = new Feedback();
        $feedback->developer = Session::get('developer')->id.' - '.Session::get('developer')->name;
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->subject = $request->input('subject');
        $feedback->content = $request->input('content');

        $feedback->save();

        return redirect('/feedback/feedbacksuccess');
    }

    public function index(){
        $feedbacks = Feedback::all();
        return view('admin.feedback')->with('feedbacks', $feedbacks);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedbackdetails')->with('feedback', $feedback);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return back()->with('status', 'the feedback has been successfully deleted');
    }


}
