<?php

use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TimetableController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// POST routes
Route::post('/subject',[SubjectController::class,'add_subject']);
Route::post('/teacher',[TeacherController::class,'add_teacher']);
Route::post('/timetable',[TimetableController::class,'add_period']);






// GET routes
Route::get('/teachers',[TeacherController::class,'get_all_teachers']);



// Route::get('/timetable',[TimetableController::class,'index']);