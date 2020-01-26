<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function campaigns(){
        return view('campaigns');
    }
    public function store(){
        return view('store');
    }
    public function contact(){
        return view('contact');
    }
}
