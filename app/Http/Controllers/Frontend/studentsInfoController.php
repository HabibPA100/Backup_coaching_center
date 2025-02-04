<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LeaveApplication;
use Illuminate\Support\Facades\Auth;

class studentsInfoController extends Controller
{
    public function index(){
        $Payments = Payment::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        $StudentsInfo = Student::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        $LeaveTakes = LeaveApplication::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('frontend.students_info', compact('Payments','StudentsInfo','LeaveTakes'));
    }
}
