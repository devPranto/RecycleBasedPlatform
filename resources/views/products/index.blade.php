@extends('layouts.app')

@section('content')
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<div class="container-fluid">
    <h2>Travelers Choice of Hotels</h2>
    <div class="image-carousel style2 flexslider" data-animation="slide" data-item-width="270" data-item-margin="30">
        <div class="flex-viewport" style="overflow: hidden; position: relative;">
            <ul class="slides image-box hotel listing-style1 " style="width: 1000%; transition-duration: 0.6s; ">
                @if (count($product) > 0)
                @foreach ($product as $item)

                <li style="width: 270px; float: left; display: block;">
                    <article class="box">
                        <figure> <a href="/products/{{$item->id}}" class="hover-effect popup-gallery"><img width="270" height="160" alt="" src="https://i.imgur.com/JN2wkb6.jpg" draggable="false"></a> </figure>
                        <div class="details"> <span class="price"> <small>Price</small>
                        @if ($item->free==1)
                            Free
                        @else
                            {{$item->price}}
                        @endif
                        </span>
                            <h4 class="box-title">{{$item->item}}<small>{{$item->location}}</small></h4>

                            <p class="description">{!!$item->desc!!}</p>
                            <div class="action"> <a class="button btn-small" href="{{route('pay')}}">Buy</a> <a ></a> </div>
                        </div>
                    </article>
                </li>
                @endforeach



            @else
                <p>we found nothing</p>
            @endif
            </ul>
        </div>

    </div>
    <div style="padding-top: 50px">
        {{ $product->links() }}
    </div>

</div>

@endsection

