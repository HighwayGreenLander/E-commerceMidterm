<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.users.index');
    }

    public function register(){
        return view('frontend.users.register');
    }

    public function  profile(){
        return view('frontend.users.profile');
    }
}
