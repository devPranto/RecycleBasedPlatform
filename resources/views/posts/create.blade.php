@extends('layouts.app')

@section('content')
    <h3>Create Posts</h3>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'input your title here']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', '', ['id'=>'editor','class' => 'form-control', 'placeholder' => 'Body']) }}
    </div>
   {{-- <div class="form-group">
        <label for="tester">First name:</label><br>
        <input type="text" id="editor" name="tester">
    </div> --}}

    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection
