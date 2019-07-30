<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function user(Request $request) {
        return $request->user();
    }

    public function home(){
        return "home";
    }

    public function hello(){
        return view('hello', ['first_name' => 'Stefan']);
    }
}
