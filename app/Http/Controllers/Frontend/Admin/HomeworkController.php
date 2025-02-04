<?php

namespace App\Http\Controllers\Frontend\Admin;

use Illuminate\Support\Facades\Storage;
use App\Models\Homework;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the homework.
     */
    public function index()
    {
        $homeworks = Homework::orderBy('id', 'desc')->get();
        return view('frontend.admin.home_work', compact('homeworks'));
    }

    /**
     * Remove the specified homework from storage.
     */
    public function destroy($id)
    {
        $homework = Homework::findOrFail($id);

        // Delete the associated file if it exists
        if ($homework->file_path && Storage::exists($homework->file_path)) {
            Storage::delete($homework->file_path);
        }

        // Delete the homework record
        $homework->delete();

        return redirect()->back()->with('success', 'Homework deleted successfully.');
    }
}
