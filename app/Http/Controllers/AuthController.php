<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    #login
    function login(){
        return view('auth.Login');
    }
    #register
    function register(){
        return view('auth.Register');
    }
}
