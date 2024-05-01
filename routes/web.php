<?php

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/profile', function () {
    $data = [
        'content' => 'home/profile/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/news', function () {
    $data = [
        'content' => 'home/news/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/contact', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/detail', function () {
    $data = [
        'content' => 'home/detail/index'
    ];
    return view('home.layouts.wrapper', $data);
});
Route::get('/login', function () {
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});


// ==== Admin ==== //
Route::prefix('/admin')->group(function() {
    Route::get('/dashboard', function(){
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/user', AdminUserController::class);

});