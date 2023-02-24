<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\DevelopersController;
use App\Http\Controllers\FeedbacksController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('adminlogin');
Route::post('/user/login', [LoginController::class, 'userLogin'])->name('userlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'home'])->name('home');
Route::get('/ranking', [UserController::class, 'ranking'])->name('ranking');
Route::get('/feedback', [AdminController::class, 'feedback'])->name('feedback');
Route::get('/feedback/viewfeedback', [AdminController::class, 'viewFeedback'])->name('viewfeedback');
Route::get('/startquiz/{topic}', [AdminController::class, 'startQuiz'])->name('startquiz');
Route::get('/assessements', [AdminController::class, 'assessements'])->name('assessements');
Route::post('/saveanswer/{id}', [AdminController::class, 'saveAnswer'])->name('saveanswer');
Route::get('/quiz/nextquestion', [AdminController::class, 'nextQuestion'])->name('nextquestion');
Route::get('/getresults', [AdminController::class, 'getResults'])->name('getresults');

Route::get('/feedback', [FeedbacksController::class, 'feedback'])->name('feedback');
Route::get('/feedback/feedbacksuccess', [FeedbacksController::class, 'feedbackSuccess'])->name('feedbacksuccess');
Route::post('/feedback/sendfeedback', [FeedbacksController::class, 'sendFeedback'])->name('sendfeedback');
//Route::get('/feedback/list', [FeedbacksController::class, 'index'])->name('feedbacks.index');


Route::get('/admin/quiz/destroy', [QuizzController::class, 'destroy'])->name('quizdestroy');




//Route::get('/user/home', [UserController::class, 'userHome'])->name('userhome');
Route::get('/user/history', [UserController::class, 'userHistory'])->name('userhistory');



Route::resource('quizzes', QuizzController::class);
Route::resource('questions', QuestionsController::class);
Route::resource('developers', DevelopersController::class);
Route::resource('feedbacks', FeedbacksController::class);


