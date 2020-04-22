@extends('layouts/app', ['title' => 'musics'])
@section('content')
<ul class="list-unstyled ml-5">
    <li class="media">
      <img src="D:\Document\Rasm\Utopia.jpg" class="mr-0" alt="...">
      <div class="media-body">
        <h5 class="mt-1 mb-1">Utopia</h5>
             Miyagi & Andy Panda
      </div>
    </li>
    <li class="media my-4">
      <img src="D:\Document\Rasm\Hajime.jpg" class="mr-0" alt="...">
        <div class="media-body">
            <h5 class="mt-1 mb-1">Hajime</h5>
                Мияги & Эндшпиль
        </div>
    </li>
    <li class="media">
      <img src="D:\Document\Rasm\Улыбка.jpg" class="mr-0" alt="...">
      <div class="media-body">
        <h5 class="mt-1 mb-1">Улыбка</h5>
                    Пицца
      </div>
    </li>
  </ul>
@endsection