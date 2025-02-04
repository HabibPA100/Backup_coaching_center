<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class messageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Save the data to the database
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
