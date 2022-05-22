<?php

namespace App\Http\Controllers;


class MessagesController extends Controller
{
    public function index()
    {

        return view('dashboard.messages');
    }
}
