<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Teacher\TeacherController;

// Multi Auth System Route is here start
Route::middleware(['auth','role:teacher'])->group(function(){
    Route::get('/teacher/dashboard',[TeacherController::class,'index'])->name('teacher.dashboard');
    
 });