<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\AdminImagePost;
use App\Http\Controllers\Controller;

class noticeBoardController extends Controller
{
    public function index(){
        $Notices = AdminImagePost::orderBy('id', 'desc')->get();
        return view('frontend.notice_board', compact('Notices'));

    }
}
