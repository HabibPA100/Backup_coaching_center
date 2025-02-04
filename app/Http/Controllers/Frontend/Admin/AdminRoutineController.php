<?php
namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Routine;
use App\Models\RoutineCreate;

class AdminRoutineController extends Controller
{
    /**
     * Display a listing of the routines.
     */
    public function index()
    {
        $NewRoutine = RoutineCreate::all();
        return view('frontend.admin.create_routine.index', compact('NewRoutine'));
    }

    /**
     * Show the form for creating a new routine.
     */
    public function create()
    {
        return view('frontend.admin.create_routine.create');
    }

    /**
     * Store a newly created routine in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        RoutineCreate::create($request->all());

        return redirect()->route('admin-create-routine.index')->with('success', 'Routine added successfully.');
    }

    /**
     * Show the form for editing the specified routine.
     */
    public function edit($id)
    {
        $routine = RoutineCreate::findOrFail($id);
        return view('frontend.admin.create_routine.edit', compact('routine'));
    }

    /**
     * Update the specified routine in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'day' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'class' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
        ]);

        $routine = RoutineCreate::findOrFail($id);
        $routine->update($request->all());

        return redirect()->route('admin-create-routine.index')->with('success', 'Routine updated successfully.');
    }

    /**
     * Remove the specified routine from storage.
     */
    public function destroy($id)
    {
        $routine = RoutineCreate::findOrFail($id);
        $routine->delete();

        return redirect()->route('admin-create-routine.index')->with('success', 'Routine deleted successfully.');
    }
}
