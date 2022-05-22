<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'picname' => 'required',
            'companyname' => 'required',
            'email' => 'required|email:dns|unique:users',
            'group' => 'required',
            'type' => 'required',
            'channel' => '',
            'custom' => '',
            'password' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
