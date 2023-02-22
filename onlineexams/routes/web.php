<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\QuizzController;
use App\Http\Controllers\QuestionsController;


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

Route::get('/admin/dashboard', [AdminController::class, 'adminHome'])->name('adminhome');
Route::get('/admin/ranking', [AdminController::class, 'adminRanking'])->name('adminranking');
Route::get('/admin/feedback', [AdminController::class, 'adminFeedback'])->name('adminfeedback');
Route::get('/admin/feedback/viewfeedback', [AdminController::class, 'viewAdminFeedback'])->name('viewadminfeedback');

Route::get('/admin/users', [UsersController::class, 'index'])->name('usersindex');

Route::get('/admin/quiz/quizdetails', [QuizzController::class, 'quizDetails'])->name('quizdetails');
Route::get('/admin/quiz/destroy', [QuizzController::class, 'destroy'])->name('quizdestroy');

Route::get('/admin/questiondetails', [QuestionsController::class, 'questionDetails'])->name('questiondetails');

Route::get('/user/home', [UserController::class, 'userHome'])->name('userhome');
Route::get('/user/history', [UserController::class, 'userHistory'])->name('userhistory');
Route::get('/user/ranking', [UserController::class, 'userRanking'])->name('userranking');
Route::get('/user/exam', [UserController::class, 'userExam'])->name('userexam');

