<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TaskController;
use App\Http\Livewire\Admin\Messages\ListConversationAndMessages;

Route::get('/', function () {
    return view('home', [
        "title" => "home",

    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ifan Haidar",
        "email" => "ifanhaidar18@gmail.com",
        "image" => "foto.jpg"
    ]);
});

Route::get('/profile', function () {
    return view('dashboard.profile', [
        "title" => "Profile"
    ]);
});

Route::get('/analytics', function () {
    return view('dashboard.analytics', [
        "title" => "Analytics"
    ]);
});

Route::get('/messages', function () {
    return view('dashboard.messages', [
        "title" => "Messages"
    ]);
});





Route::get('/dolist', [TaskController::class, 'index'])->name('index');
Route::resource('task', TaskController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'authenticate']);
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
