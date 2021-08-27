@extends('layouts.app')

@section('content')
    <div class="form-group">
        <h3>Edit</h3>
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="item">Item</label><br>
            <input type="text" name="item" value="{{ $product->item }}">
            <br>
            <div class="form-group">
                {{ Form::label('desc', 'Description') }}
                {{ Form::textarea('desc', $product->desc, ['id' => 'editor', 'class' => 'form-control']) }}
            </div>
            <br>

            <label for="loc">location</label><br>
            <input type="text" name="loc" value="{{ $product->location }}" placeholder="location">
            <br>
            <label for="free"> Free</label>
            <input type="checkbox" name="free" checked data-toggle="toggle" value="True">
            <br>
            {{-- we are using name to recall the variable or param --}}
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
