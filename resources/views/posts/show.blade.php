@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-info m-3">Go Back</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <img class="rounded-top img-fluid mb-3" src="/storage/cover_images/{{$post->cover_image}}" alt="Cover image">
            <h1>{{$post->title}}</h1>
            <div class="m-1 pr-4 pl-4">
                {!!$post->body!!}
            </div>
            <hr/>
            <small>Written at {{$post->created_at}} by <b>{{$post->user->name}}</b></small>
        </div>
    </div>
    <hr/>
    <div class="form-row">
    @if(!Auth::guest())
        @if(Auth::user()-> id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-success mr-2 ml-2">Edit</a>
            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif
    </div>
    <br>
    <br>
@endsection