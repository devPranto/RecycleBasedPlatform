@extends('layouts.app')
@section('content')
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <div class="container mt-4">

        @if (count($posts) > 0)
            @foreach ($posts as $item)
                <div class="card p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="position-relative snipimage"> <img src="/recycle.png"
                                    class="rounded img-fluid w-60 img-responsive"> <span
                                    class="position-absolute user-timing">{{ $item->created_at }}</span> </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mt-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="mb-1"><a href="/posts/{{$item->id}}">{{ $item->Title }}</a> </h5> <span><i
                                            class="fa fa-heart text-danger"></i> </span>
                                </div>
                                <div class="d-flex justify-content-md-start justify-content-between views-content mt-2">
                                    <div class="d-flex flex-row align-items-center"> <i class="fa fa-eye"></i> <span
                                            class="ms-1 views">{!! $item->Description !!}</span> </div>
                                </div>
                                <div class="d-flex flex-row mt-3"> <img src="/user.jpg" width="60" class="rounded-circle">
                                    <p>Posted By :

                                        @if ($item->user_name)
                                            {{ $item->user_name }}
                                        @else
                                            Unknown
                                        @endif
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>


            @endforeach
            {{ $posts->links() }}


        @else
            <p>we found nothing</p>
        @endif

    </div>

@endsection
