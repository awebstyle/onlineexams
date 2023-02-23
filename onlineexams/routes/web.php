<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\DevelopersController;



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
Route::get('/admin/ranking', [AdminController::class, 'adminRanking'])->name('adminranking');
Route::get('/admin/feedback', [AdminController::class, 'adminFeedback'])->name('adminfeedback');
Route::get('/admin/feedback/viewfeedback', [AdminController::class, 'viewAdminFeedback'])->name('viewadminfeedback');
Route::get('/startquiz/{topic}', [AdminController::class, 'startQuiz'])->name('startquiz');
Route::get('/assessements', [AdminController::class, 'assessements'])->name('assessements');
Route::post('/saveanswer/{id}', [AdminController::class, 'saveAnswer'])->name('saveanswer');
Route::get('/quiz/nextquestion', [AdminController::class, 'nextQuestion'])->name('nextquestion');
Route::get('/getresults', [AdminController::class, 'getResults'])->name('getresults');

Route::get('/admin/users', [UsersController::class, 'index'])->name('usersindex');


Route::get('/admin/quiz/destroy', [QuizzController::class, 'destroy'])->name('quizdestroy');




//Route::get('/user/home', [UserController::class, 'userHome'])->name('userhome');
Route::get('/user/history', [UserController::class, 'userHistory'])->name('userhistory');
Route::get('/user/ranking', [UserController::class, 'userRanking'])->name('userranking');


Route::resource('quizzes', QuizzController::class);
Route::resource('questions', QuestionsController::class);
Route::resource('developers', DevelopersController::class);


