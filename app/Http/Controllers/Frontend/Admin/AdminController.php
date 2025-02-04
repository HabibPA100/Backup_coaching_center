<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        // Pass the variable name 'student_info' to the compact function
        return view('frontend.admin.dashboard');
    }
    public function user(){
        $user_data = User::orderBy('id', 'desc')->get();
        return view('frontend.admin.components.user_list', compact('user_data'));
    }
}
