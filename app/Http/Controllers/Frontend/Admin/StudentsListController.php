<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsListController extends Controller
{
    public function index()
    {
        $StudentsInfo = Student::orderBy('id', 'desc')->get();
        return view('frontend.admin.students_list', compact('StudentsInfo'));
    }
    
    // Show the form for editing the specified resource
    public function edit($id)
    {
        $edit = Student::findOrFail($id);
        return view('frontend.admin.aprove_student.aprove_pending', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|string',
            'phone' => 'required|string|max:15',
            'class' => 'required|string',
            'school' => 'required|string|max:255',
            'subjects' => 'required|string',
            'status' => 'required|string|in:Pending,Cancel,Approved',
        ]);

        // Find the student record by ID
        $student = Student::findOrFail($id);

        // Update the student's data
        $student->update([
            'name' => $request->name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'class' => $request->class,
            'school' => $request->school,
            'subjects' => $request->subjects,
        ]);

        // Update the student's status
        $student->status = $request->status;
        $student->save();

        // Redirect back with a success message
        return redirect()->route('admin-student-list.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $post = Student::findOrFail($id);
        $post->delete();

        return redirect()->route('admin-student-list.index')->with('success', 'Post deleted successfully.');
    }
}
