<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class payController extends Controller
{
    public function index(){
        return view('frontend.pay');
    }

    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'studentName' => 'required|string|max:255',
            'class' => 'required|string|max:50',
            'month' => 'required|string|max:50',
            'paymentNumber' => 'required|string|max:50',
            'paymentAmount' => 'required|numeric|min:1',
            'batchNumber' => 'required|string|max:50',
        ]);

        // Store the data in the database
        Payment::create([
            'studentName' => $request->input('studentName'),
            'className' => $request->input('class'),
            'month' => $request->input('month'),
            'paymentNumber' => $request->input('paymentNumber'),
            'paymentAmount' => $request->input('paymentAmount'),
            'batchNumber' => $request->input('batchNumber'),
            'user_id' => Auth::id(),
        ]);

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Payment submitted successfully!');
    }
}
