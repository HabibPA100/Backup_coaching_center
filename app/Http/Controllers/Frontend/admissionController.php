<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class admissionController extends Controller
{
    public function index(){
        $NewStudent = Student::where('user_id', Auth::id())->orderBy('id', 'desc')->get();
        return view('frontend.admission_paper', compact('NewStudent'));
    }

    // Store form data in the database
    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'phone' => 'required|string|max:15',
            'class' => 'required|string',
            'school' => 'required|string|max:255',
            'subjects' => 'required|string',
        ]);

        // Add the user_id to the validated data
    $validatedData['user_id'] = Auth::id(); // Assuming you're using Laravel's authentication

    // Save to the database
    Student::create($validatedData);

        // Redirect with a success message
        return redirect()->route('dashboard')->with('success', 'Registration submitted successfully!');
    }
}
