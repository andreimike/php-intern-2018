@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>

        @guest
            <h2>LaraBlog</h2>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @else
            <h3 class="text-center mt-2 mb-2">You're on fire. Welcome to the Blog.</h3>
            <button class="btn btn-primary"><a href="/dashboard" class="text-white nav-link">Dashboard</a></button>
        @endguest
    </div>
@endsection