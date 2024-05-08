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
            'blog' => Blog::get(),
            'latest' => Latest::first(),
            'content' => 'home/blog/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    public function show($id){
        $data = [
            'blog' => Blog::find($id),
            'latest' => Latest::get(),
            'content' => 'home/blog/show'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
