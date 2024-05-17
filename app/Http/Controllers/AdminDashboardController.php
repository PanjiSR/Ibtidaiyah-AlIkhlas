<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Pesan;
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
            'pesan' => Pesan::count(),
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data, [
            "title" => "Dashboard"
        ]);
        
    }
}
