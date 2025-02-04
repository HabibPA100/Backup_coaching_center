<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NumberListController extends Controller
{
    public function number(){
        $Numbers = Student::orderBy('id','desc')->get();
        return view('frontend.admin.number_List', compact('Numbers'));
    }
}
