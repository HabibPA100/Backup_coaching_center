<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class resultSheetController extends Controller
{
    public function index(){
        return view('frontend.result_sheet');
    }
}
