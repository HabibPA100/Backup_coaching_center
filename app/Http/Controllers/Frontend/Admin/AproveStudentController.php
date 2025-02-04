<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AproveStudentController extends Controller
{
    public function index(){
        return view('frontend.admin.aprove_student.aprove_pending');
    }
}
