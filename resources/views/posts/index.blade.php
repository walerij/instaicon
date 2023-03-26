@extends('layouts.insta')
@section('content')
    @foreach($posts as $post)
    <!---Сообщение-->
    <div class="card" style="width: 60%; ">

        <img src="images/posts/{{$post->media}}" class="card-img-top img-fluid"  alt="no">


        <div class="card-body">
            <h5 class="card-title">{{$post->postdate}}</h5>
            <p class="card-text">{{$post->posttext}}</p>
            <a href="#" class="btn btn-primary">Комментировать</a>
        </div>
    </div>
    <!---Конец сообщения-->
    @endforeach
@endsection
