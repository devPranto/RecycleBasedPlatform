@extends('layouts.app')

@section('content')
<div class='container-fluid' style="padding-left: 50px" style="padding-top:50px" >
        <h3>Posts</h3>
            @if (count($posts) > 0)
                @foreach ($posts as $item)

                        <h3><a href="/posts/{{$item->id}}">{{ $item->Title }}</a></h3>
                        <article>
                            <small>
                                {!! $item->Description !!}
                            </small>
                        </article>

                @endforeach
                {{ $posts->links() }}


            @else
                <p>we found nothing</p>
            @endif
</div>
@endsection

