<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Admin\AdminController;
use App\Http\Controllers\Frontend\studentsInfoController;
use App\Http\Controllers\Frontend\Admin\ImgPostController;
use App\Http\Controllers\Frontend\Admin\MessageController;
use App\Http\Controllers\Frontend\Admin\NewPostController;
use App\Http\Controllers\Frontend\Admin\ProfileController;
use App\Http\Controllers\Frontend\Admin\HomeworkController;
use App\Http\Controllers\Frontend\Admin\SomeInfoController;
use App\Http\Controllers\Frontend\Admin\LeaveInfoController;
use App\Http\Controllers\Frontend\Admin\TeacherCVController;
use App\Http\Controllers\Frontend\Admin\AttendanceController;
use App\Http\Controllers\Frontend\Admin\RoleUpdateController;
use App\Http\Controllers\Frontend\Admin\NewMemorizeController;
use App\Http\Controllers\Frontend\Admin\PaymentInfoController;
use App\Http\Controllers\Frontend\Admin\ResultSheetController;
use App\Http\Controllers\Frontend\Admin\SomeWorningController;
use App\Http\Controllers\Frontend\Admin\AdminRoutineController;
use App\Http\Controllers\Frontend\Admin\AproveStudentController;
use App\Http\Controllers\Frontend\Admin\NumberListController;
use App\Http\Controllers\Frontend\Admin\StudentLeaveController;
use App\Http\Controllers\Frontend\Admin\StudentsListController;
use App\Http\Controllers\Frontend\Admin\ShowAllNoticeController;

// Multi Auth System Route is here start
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/user/list',[AdminController::class,'user'])->name('admin.user');
    Route::delete('/user/delete/{id}', [RoleUpdateController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/admin/home-work',[HomeworkController::class,'index'])->name('admin.homework');
    Route::delete('/homework/{id}', [HomeworkController::class, 'destroy'])->name('homework.destroy');
    Route::get('/admin/attendance', [AttendanceController::class,'index'])->name('admin.attendance.list');
    Route::resource('admin-create-routine', AdminRoutineController::class);
    Route::resource('/admin-image-post', ImgPostController::class);
    Route::resource('admin-memorize', NewMemorizeController::class);
    Route::resource('admin-leave-list', StudentLeaveController::class);
    Route::get('/admin/notice', [ShowAllNoticeController::class,'index'])->name('admin.notice');
    Route::get('/admin/payments', [PaymentInfoController::class,'index'])->name('admin.payments');
    Route::get('/admin/result-sheet', [ResultSheetController::class,'index'])->name('admin.add.result');
    Route::get('/admin/students-list', [StudentsListController::class,'index'])->name('admin.student.list');
    Route::resource('/admin-student-list', StudentsListController::class);
    Route::put('/update-role/{id}', [RoleUpdateController::class, 'updateRole'])->name('update.role');
    Route::get('/role-edit/{id}', [RoleUpdateController::class, 'edit'])->name('role.edit');
    Route::get('/students-message',[MessageController::class,'message'])->name('admin.message');
    Route::delete('/message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
    Route::get('/numbers-list', [NumberListController::class, 'number'])->name('admin.number');
    
 });
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});