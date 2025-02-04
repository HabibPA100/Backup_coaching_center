<?php

namespace App\Http\Controllers\Frontend\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function index(){
        // Fetch all messages from the database
    $messages = Message::all();

    // Return the view with messages
    return view('frontend.admin.contacts', compact('messages'));
    }
}
