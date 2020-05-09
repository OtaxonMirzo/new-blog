@extends('layouts/admin', ['title' => 'edit'])
@section('content')
<div class="input-form" style="margin: 50px">
    <h3 class="blank1 ts-8 text-center"> {{$musics->name}} - ko'rish </h3>
        <div class="tab-content">
           <h3> {{ $musics->singer }} </h3>
        </div>
        <p>
            {{ $musics->lyric }}
        </p>
        <h4>
            {{ $musics->created_at->format('H:i d/m/Y') }} <br>
            {{ $musics->updated_at->format('H:i d/m/Y') }}
        </h4>
</div>
@endsection