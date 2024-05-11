<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLatestController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [HomeBlogController::class, 'index']);
Route::get('/blog/show/{id}', [HomeBlogController::class, 'show']);


Route::get('/profile', function () {
    $data = [
        'content' => 'home/profile/index'
    ];
    return view('home.layouts.wrapper', $data, [
        "title" => "Profile"
    ]);
});

Route::get('/contact', [HomeContactController::class, 'index']);
Route::post('/contact/send', [HomeContactController::class, 'send']);

Route::get('/detail', function () {
    $data = [
        'content' => 'home/detail/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);


// ==== Admin ==== //
Route::prefix('/admin')->middleware('auth')->group(function() {

    Route::get('logout', [AdminAuthController::class, 'logout']);

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    
    Route::resource('/posts/blog',AdminBlogController::class);
    Route::resource('/posts/category',AdminCategoryController::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/latest', AdminLatestController::class);
    Route::resource('/pesan', AdminPesanController::class);

});
