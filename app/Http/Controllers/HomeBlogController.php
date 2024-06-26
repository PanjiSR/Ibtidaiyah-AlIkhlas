<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Latest;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    //
    function index (){
        $data = [
            'blog' => Blog::orderBy('created_at', 'desc')->paginate(6),
            'latest' => Latest::first(),
            'content' => 'home/blog/index'
        ];
        return view('home.layouts.wrapper', $data, [
            "title" => "Blog"
        ]);
    }

    public function show($id){
        $data = [
            'blog' => Blog::find($id),
            'latest' => Latest::limit(5)->orderBy('created_at', 'desc')->get(),
            'content' => 'home/blog/show'
        ];
        return view('home.layouts.wrapper', $data, [
            "title" => "Show Blog"
        ]);
    }
}
