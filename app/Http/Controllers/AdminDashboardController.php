<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    function index ()
    {
        $data = [
            'blog' => Blog::count(),
            'user' => User::count(),
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
