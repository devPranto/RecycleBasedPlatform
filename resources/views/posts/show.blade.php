@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="padding-left: 50px">
        <div style="padding-bottom: 50px">
            <h1>{{ $post->Title }}</h1>
            <article>{!! $post->Description !!}</article>
            <time>Created at : {{ $post->created_at }}</< /time>
                @if ($post->user_name)
                   <p>{{ $post->user_name }}</p>

                @else
                    <p>Nothing found</p>
        </div>
        @endif

        <div style="padding-bottom: 20px">
            <a class="btn btn-primary" href='/posts'>Go Back</a>
            <a class="btn btn-warning" href="/posts/{{ $post->id }}/edit">Edit</a>
        </div>

        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('DELETE', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>

@endsection
