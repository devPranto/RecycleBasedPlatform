@extends('layouts.app')

@section('content')
    <div class="form-group">
        <h3>Create an Add</h3>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <label for="item">Item</label><br>
            <input type="text" name="item" placeholder="enter item name">
            <br>
            <div class="form-group">
                {{ Form::label('desc', 'Description') }}
                {{ Form::textarea('desc', '', ['id'=>'editor','class' => 'form-control' ]) }}
            </div>
            <br>

            <label for="loc">location</label><br>
            <input type="text" name="loc" placeholder="location">
            <br>
            <label for="free"> Free</label>
            <input type="checkbox" name="free" checked data-toggle="toggle" value="True">
            <br>
            <label for="price">Price</label><br>
            <input type="text" name="price" placeholder="Tk">
            <br>

            {{-- we are using name to recall the variable or param --}}
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
