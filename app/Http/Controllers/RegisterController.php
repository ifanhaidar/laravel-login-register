<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',



        ]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required|captcha'

        ]);
    }
}
