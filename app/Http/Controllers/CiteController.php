<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

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
    public function musicsmore($id)
    {
        $musics = Music::findOrFail($id);
        return view('musicsmore', compact('musics'));
    }
    public function musics()
    {
        $musics = Music::all();
        return view('musics', compact('musics'));
    }
}
