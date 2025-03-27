<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/docenten', [TeacherController::class, 'index']);
Route::get('/vakken', [SubjectController::class, 'index']);
