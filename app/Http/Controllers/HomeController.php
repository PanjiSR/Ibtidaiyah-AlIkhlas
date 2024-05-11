<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\Latest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $data = [
            // 'blog' => Blog::first(),
            'banner' => Banner::get(),
            'latest' => Latest::limit(3)->get(),
            'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data, [
            "title" => "Home"
        ]);
    }
}

