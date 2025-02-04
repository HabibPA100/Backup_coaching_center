<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\LeaveApplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class takeLeaveController extends Controller
{
    public function index(){
        $Leaves = LeaveApplication::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('frontend.take_leave', compact('Leaves'));
    }

    public function store(Request $request)
    {
        // Validate Form Input
        $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'reason' => 'required|string|max:500',
        ]);

        // Save Data to Database
        LeaveApplication::create([
            'name' => $request->name,
            'class' => $request->class,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reason' => $request->reason,
            'user_id' => Auth::id(),
        ]);

        // Redirect with Success Message
        return redirect()->route('dashboard')->with('success', 'ছুটির আবেদন সফলভাবে জমা হয়েছে!');
    }
}
