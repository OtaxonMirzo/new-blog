@extends('layouts/app', ['title' => '{{ $musics->id }}'])
@section('content')
    <div class="card mb-3">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $musics->singer }}</h5>
        <p class="card-text">{{ $musics->lyric }}</p>
        <p class="card-text"><small class="text-muted">{{ $musics->duration }}</small></p>
      </div>
    </div>
@endsection
