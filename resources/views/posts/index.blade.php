@extends('layouts.main')
@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="post-listing mb-4">
                <h3>{{$post->title}}</h3>
                <p class="mb-0 " >{{$post->content}}</p>
                <a href="{{route('posts.show',$post->id)}}">Read more ></a>
            </div>
        @endforeach
    </div>
@endsection
