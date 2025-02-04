<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\RoutineCreate;
use App\Http\Controllers\Controller;

class classRoutineController extends Controller
{
    public function index()
{
    $NewRoutine = RoutineCreate::orderBy('id', 'desc')->get();
    return view('frontend.class_routine', compact('NewRoutine'));
}
}
