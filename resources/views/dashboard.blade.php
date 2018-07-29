@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/posts/create" class="btn btn-success">Create Post</a>
                        <br>
                        <br>
                        <h3>Your Blog Posts</h3>
                        <br>
                        @if(count($posts) > 0)
                            <table class="table table striped">
                                <tr>
                                    <td>
                                        Title
                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                    <td>

                                    </td>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                        <td>
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class="btn btn-primary">Preview</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no Posts</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
