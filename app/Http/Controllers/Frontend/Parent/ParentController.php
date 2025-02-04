<?php

namespace App\Http\Controllers\Frontend\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        // Pass the variable name 'student_info' to the compact function
        return view('frontend.parent.dashboard');
    }
}
