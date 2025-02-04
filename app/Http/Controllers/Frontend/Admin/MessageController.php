<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(){
        $Messages = Message::orderBy('id', 'desc')->get();
        return view('frontend.admin.messages', compact('Messages'));
    }

    public function destroy($id)
    {
        $Message = Message::findOrFail($id);
        // Delete the Message record
        $Message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
