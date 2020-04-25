@extends('layouts/app', ['title' => 'musics'])
@section('content')
@foreach ($musics as $music)
<ul class="list-unstyled ml-5">
    <li class="media">
        <img src="#" class="mr-0" alt="">
        <br>
        <div class="media-body">
            <a class="text-center text-danger" href="{{ route('musicsmore', $music->id) }}"> {{ $music->name }} </a>
            <br>    
            <h3 class="mb-3 mt-1"> {{ $music->singer }} </h3>
        </div>
    </li>
</ul>
@endforeach
@endsection
