<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function privacy(){
        return view('frontend.privacy_policy');
    }
    public function terms(){
        return view('frontend.termsConditions');
    }
}
