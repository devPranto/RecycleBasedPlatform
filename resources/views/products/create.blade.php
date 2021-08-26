@extends('layouts.app')

@section('content')
    <h3>Create an Add</h3>
    <form action="{{route('products.store')}}" method="POST">
        <label for="tester">Item</label><br>
        <input type="textarea" id="editor" name="tester">
        {{-- we are using name to recall the variable or param --}}
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
@endsection
