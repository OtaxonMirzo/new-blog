<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Music;

class MusicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::all();
        return view('admin.musics.index', compact('musics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.musics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'singer' => 'required',
            'name' => 'required',
            'duration' => 'required',
            'size' => 'required',
            'lyric' => 'required',
            'genre' => 'required',
        ]);

        Music::create($request->post());

        return redirect()->to('admin/musics') -> with('success', 'Yangi musiqa yaratildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $musics = Music::findOrFail($id);

        return view('admin.musics.show', compact('musics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::findOrFail($id);

        return view('admin.musics.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $musics = Music::findOrFail($id);

        $request->validate([
            'singer' => 'required',
            'name' => 'required',
            'duration' => 'required',
            'size' => 'required',
            'lyric' => 'required',
            'genre' => 'required',
        ]);

        $musics->update([
            'singer' => $request->post('singer'),
            'name' => $request->post('name'),
            'duration' => $request->post('duration'),
            'size' => $request->post('size'),
            'lyric' => $request->post('lyric'),
            'genre' => $request->post('genre'),
        ]);

        return redirect()->route('admin.musics.index') -> with('success', 'Musiqa ozgartirildi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $metod = Music::findOrFail($id);

        $metod->delete();

        return redirect()->route('admin.musics.index') -> with('success', 'Musiqa ochirildi!');
    }
}
