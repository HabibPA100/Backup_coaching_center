<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResultSheetController extends Controller
{
    public function index(){
        return view('frontend.admin.create_result-sheet');
    }
}
