<?php

namespace App\Http\Controllers\Frontend\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // Pass the variable name 'student_info' to the compact function
        return view('frontend.teacher.dashboard');
    }
}
