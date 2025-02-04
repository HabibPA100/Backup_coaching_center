<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaymentInfoController extends Controller
{
    public function index(){
        $Payments = Payment::orderBy('id', 'desc')->get();
        return view('frontend.admin.show_payments', compact('Payments'));
    }
}
