<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(){

        return view('frontend.service.index');
    }


    public function register(){
        return view('frontend.service.register');
    }

    public function renew(){
        return view('frontend.service.renew');
    }



    public function booktest(){
        return view('frontend.service.bookTest');
    }


    public function checkstatus()  {
        return view('frontend.service.checkstatus');
    }

    public function downloadDucument(){
        return view('frontend.service.download');
    }
}