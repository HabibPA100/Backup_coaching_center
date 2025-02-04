<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Parent\ParentController;

// Multi Auth System Route is here start
Route::middleware(['auth','role:parent'])->group(function(){
    Route::get('/parent/dashboard',[ParentController::class,'index'])->name('parent.dashboard');
    
 });