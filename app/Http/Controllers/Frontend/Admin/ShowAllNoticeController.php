<?php

namespace App\Http\Controllers\Frontend\Admin;

use Illuminate\Http\Request;
use App\Models\AdminImagePost;
use App\Http\Controllers\Controller;

class ShowAllNoticeController extends Controller
{
    public function index(){
        $posts = AdminImagePost::orderBy('id', 'desc')->get();
        return view('frontend.admin.show_notice', compact('posts'));
    }
}
