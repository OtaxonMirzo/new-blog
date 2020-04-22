@extends('layouts/admin', ['title' => 'index'])
@section('content')
<div style="margin: 50px" class="bs-example4 m-50" data-example-id="contextual-table">
    <h3 class="dark"> 
        Musiqalar 
        <a href="{{ route('musics.create') }}" class="btn btn-primary float-right"> Yaratish </a>
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th> Ijrochi </th>
                <th> Nomi </th>
                <th> Davomiyligi </th>
                <th> Amallar </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($musics as $music)
                <tr class="active">
                    <td> {{ $music->singer }} </td>
                    <td> {{ $music->name }} </td>
                    <td> {{ $music->duration }} </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('musics.edit', ['id' => $music->id]) }}"> O'zgartirish </a>
                        <form method="POST" action="{{ route('musics.destroy', ['id' => $music->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-dark"> O'chirish </button>
                        </form>
                    </td>
                </tr>
            @endforeach
      </tbody>
    </table>
   </div>
@endsection