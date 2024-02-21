<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function home(){
        return view('home');
    }

    public function app(){
        return view('app');
    }
}
