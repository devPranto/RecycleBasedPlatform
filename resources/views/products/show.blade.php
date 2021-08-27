@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="padding-left: 50px">
        <div style="padding-bottom: 50px">
            <h1>{{ $product->item }}</h1>
            <article>{!! $product->desc !!}</article>
            <time>Created at : {{ $product->created_at }}</< /time>
                @if ($product->posted_by)
                    <p>{{ $product->posted_by }}</p>

                @else
                    <p>Nothing found</p>
                @endif
                @if ($product->free)
                <span class="badge badge-success">Free</span>

                @else
                <span class="badge badge-primary">Price</span>
                @endif
        </div>


        <div style="padding-bottom: 20px">
            <a class="btn btn-primary" href='/products'>Go Back</a>
            <a class="btn btn-warning" href="/products/{{ $product->id }}/edit">Edit</a>
        </div>

        {!! Form::open(['action' => ['ProductController@destroy', $product->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('DELETE', ['class' => 'btn btn-danger']) }}
        {!! Form::close() !!}
    </div>

@endsection
