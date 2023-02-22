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
Route::post('/teacher',[TeacherController::class,'add_teacher']);
Route::post('/periods',[TimetableController::class,'add_period']);


// GET routes
Route::get('/teachers',[TeacherController::class,'get_all_teachers']);
Route::get('/periods',[TimetableController::class,'get_all_periods']);
Route::get('/index',[TimetableController::class,'index']);


//FILTER routes
Route::post('/timetable',[TimetableController::class,'get_time_table']);
Route::post('/teacher',[TeacherController::class,'get_teacher_name']);