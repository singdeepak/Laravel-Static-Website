<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function index(){
        return view('home');
    }

    public function service(){
        return view('service');
    }

    public function about(){
        return view('about');
    }

    public function gallery(){
        return view('gallery');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }
}
