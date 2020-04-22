<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('services');
    }
    public function contact()
    {
        return view('contact');
    }
    public function more()
    {
        return view('more');
    }
    public function musics()
    {
        return view('musics');
    }
}
