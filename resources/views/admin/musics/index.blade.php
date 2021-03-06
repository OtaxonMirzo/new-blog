@extends('layouts/admin', ['title' => 'index'])
@section('content')
<div style="margin: 50px" class="bs-example4 m-50" data-example-id="contextual-table">
    <h3 class="dark"> 
        Musiqalar 
        <a href="{{ route('admin.musics.create') }}" class="btn btn-primary float-right"> Yaratish </a>
    </h3>
    <table class="table table-bordered">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success')}}
            </div>
        @endif
        @if (session()->has('delete'))
            <div class="alert alert-danger">
                {{ session()->get('delete')}}
            </div>
        @endif
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
                        <a href="{{route('admin.musics.show', $music->id)}}" role="button" class="btn btn-sm text-white float-left"> <i class="fa fa-eye"></i> </a>
                        <a class="btn btn-sm btn-outline-dark float-left" role="button" href="{{ route('admin.musics.edit', ['id' => $music->id]) }}">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <form method="POST" action="{{ route('admin.musics.destroy', ['id' => $music->id]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn float-right btn-sm btn-danger"> <i class="fa fa-trash-o"></i> </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $musics->links() }}
   </div>
@endsection