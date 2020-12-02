<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PageController extends Controller
{
    function index() {
        return view('Index');
    }
    function createPost(){
        return view('user.Create');
    }
    function userProfile(){
        return view('user.Userprofile');
    }
    function contactUs(){
        return view('user.ContactUs');
    }
    function post(Request $req){
        return redirect()->route('home')->with("message","Added Post!");
    }
}
