<?php

use Illuminate\Support\Facades\Route;


Route::get('dashboard',[\App\Http\Controllers\Panel\DashboardController::class,'dashboard'])->name('dashboard');

Route::resource('users',\App\Http\Controllers\Panel\UserController::class);
Route::resource('quizzes',\App\Http\Controllers\Panel\QuizController::class);
Route::resource('questions',\App\Http\Controllers\Panel\QuestionController::class);
