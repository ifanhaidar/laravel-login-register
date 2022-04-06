<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",

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
Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog"
    ]);
});


Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'authenticate']);
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);
