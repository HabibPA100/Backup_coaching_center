<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Memorize;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class memorizeController extends Controller
{
    public function index(){
        $Memorizes = Memorize::orderBy('id', 'desc')->get();
        return view('frontend.memorize', compact('Memorizes'));
    }
}
