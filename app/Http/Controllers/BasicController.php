<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function home(){
        // return "home page";
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function service(){
        return view('pages.service');
    }
    public function portfolio(){
        return "Portfolio page";
    }
    public function blog(){
        return "Blog page";
    }
    public function contact(){
        return "Contact page";
    }
}
