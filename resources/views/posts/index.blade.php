@extends('layouts.app');

@section('content')
    <h1>
        Posts
    </h1>
    @if(count($posts) > 0)
        <div class="card-deck" style="height: auto;">
            @foreach($posts as $post)
                <div class="card p-0 mt-3">
                    <img class="card-img-top img-fluid" src="/storage/cover_images/{{$post->cover_image}}" alt="Card cover image">
                    <div class="card-body">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
                    </div>
                </div>
            @endforeach
        </div>
        <br>
        <br>
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection