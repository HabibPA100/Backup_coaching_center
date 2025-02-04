<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Facades\Storage;
use App\Models\Homework;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class homeWorkController extends Controller
{
    public function index(){
        $homeworks = Homework::where('user_id', Auth::id())->orderBy('id','desc')->get();
        return view('frontend.home_work', compact('homeworks'));
    }

    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'file' => 'nullable|file|mimes:pdf,doc,docx,txt|max:2048',
    ]);

    // ফাইল আপলোড হ্যান্ডলিং
    $filePath = null;
    if ($request->hasFile('file')) {
        $filePath = $request->file('file')->store('homeworks', 'public');
    }

    // ডেটাবেজে সেভ
    Homework::create([
        'user_id' => Auth::id(), // লগইন করা শিক্ষার্থীর আইডি
        'title' => $request->title,
        'description' => $request->description,
        'file_path' => $filePath,
    ]);

    return redirect()->route('dashboard')->with('success', 'আপনার Homework সফলভাবে জমা হয়েছে!');
}

}
 