@extends('layouts/admin', ['title' => 'edit'])
@section('content')
<div class="input-form" style="margin: 50px">
    <h3 class="blank1 ts-8 text-center"> Musiqani o'zgartirish </h3>
        <div class="tab-content">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="tab-pane active" id="horizontal-form">
            <form method="POST" class="form-horizontal" action="{{ route('admin.musics.update', $music->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="singer" class="col-sm-2 control-label"> Ijrochisi </label>
                    <div class="col-sm-8">
                    <input type="text" value="{{ $music->singer }}" class="form-control1" name="singer" placeholder="Ijrochi nomini kiriting">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label"> Qo'shiq nomi </label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $music->name }}" class="form-control1" name="name" placeholder="Qo'shiq nomini kiriting">
                    </div>
                </div>
                <div class="form-group">
                    <label for="genre" class="col-sm-2 control-label"> Janri </label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $music->genre }}" class="form-control1" name="genre" placeholder="Musiqa janrini kiriting">
                    </div>
                </div>
                <div class="form-group">
                    <label for="duration" class="col-sm-2 control-label"> Davomiyligi </label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $music->duration }}" class="form-control1" name="duration" placeholder="Musiqa davomiyligini kiriting">
                    </div>
                </div>
                <div class="form-group">
                    <label for="size" class="col-sm-2 control-label"> Hajmi </label>
                    <div class="col-sm-8">
                        <input type="text" value="{{ $music->size }}" class="form-control1" name="size" placeholder="Musiqa hajmini kiriting">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lyric" class="col-sm-2 control-label"> Musiqa matni </label>
                    <div class="col-sm-8">
                        <textarea name="lyric" class="form-control" cols="30" rows="10"> {{ $music->lyric }} </textarea>
                    </div>
                </div>
                <button class="btn btn-primary text-center"> Saqlash </button>
            </form>
        </div>
    </div>
@endsection