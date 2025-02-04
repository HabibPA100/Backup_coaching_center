<?php

namespace App\Http\Controllers\Frontend\Admin;

use Illuminate\Http\Request;
use App\Models\LeaveApplication;
use App\Http\Controllers\Controller;

class StudentLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $LeaveTakes = LeaveApplication::orderBy('id', 'desc')->get();
        return view('frontend.admin.show_leave_info', compact('LeaveTakes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = LeaveApplication::findOrFail($id);
        return view('frontend.admin.leave.approve_leave', compact('edit'));
    }

    /**
     * Update the leave status of a specific application.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'status' => 'required|string|in:Pending,Approved,Cancel', // Corrected typo in "Cancel"
        ]);

        // Find the leave application by ID and update its status
        $leaveApplication = LeaveApplication::findOrFail($id);
        $leaveApplication->status = $validated['status'];
        $leaveApplication->save();

        // Redirect back with a success message
        return redirect()->route('admin-leave-list.index')->with('success', 'Leave status updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leave = LeaveApplication::findOrFail($id);
        $leave->delete();

        return redirect()->route('admin-leave-list.index')->with('success', 'Leave application deleted successfully.');
    }
}
