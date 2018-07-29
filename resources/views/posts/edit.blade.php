@extends('layouts.app')

@section('content')

    <h1 class="text-center">Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-goup">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id'=> 'article-ckeditor', 'class' => 'form-control'])}}
    </div>
    <div class="form-row m-1">
        <p class="mt-1 mr-2">
            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                View Actual Cover Image
            </a>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body p-0">
                <img class="img-fluid m-1" src="/storage/cover_images/{{$post->cover_image}}" alt="Cover image" style="height: 160px;">
            </div>
        </div>
    </div>
    <div class="form-group ml-1">
        {{Form::file('cover_image')}}
    </div>

    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Publish', ['class' => 'btn btn-outline-primary ml-1 mt-1'])}}
    {!! Form::close() !!}
@endsection