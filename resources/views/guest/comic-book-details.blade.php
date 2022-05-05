@extends('layouts.app')

@section("title", 'Dettagli comic-book')

@section('main-content')
<div id="blue-panel" class="bg-blue"></div>

<section id="comic-book-details">
    <img class="img-comic-book" src="{{ $comicBook['thumb'] }}" alt="{{ $comicBook['title'] }}">
    <div id="content-product">
        <h1>{{ $comicBook['title'] }}</h1>
        <div class="label-price">
            <span>U.S Price {{ $comicBook['price'] }}</span> 
        </div>
        <p>{{ $comicBook['description'] }}</p>
    </div>

    <div id="advertisement">
        <h6>advertisement</h6>
        <img src="{{asset("images/adv.jpg")}}" alt="adv img">
    </div>
</section>

<section id="comic-book-details-others">
    <div id="content">
        <div id="talent">
            <h2>Talent</h2>
            <hr>
            <span>Art by:</span>
            <ul>
                @foreach ( $comicBook['artists'] as $artist)
                <li class="color-blue">{{ $artist }}</li>
                @endforeach
            </ul>
            <hr>
            <span>Written by:</span>
            <ul>
                @foreach ( $comicBook['writers'] as $writers)
                <li class="color-blue">{{ $writers }}</li>
                @endforeach
            </ul>
            <hr>
        </div>
    
        <div id="specs">
            <h2>Specs</h2>
            <hr>
            <div>
                <span>Series:</span>
                <span class="color-blue">{{ $comicBook['series'] }}</span>
            </div>
            <hr>
            <div>
                <span>U.S Price:</span>
                <span>{{ $comicBook['price'] }}</span>
            </div>
            <hr>
            <div>
                <span>On Sale Date:</span>
                <span>{{ $comicBook['sale_date'] }}</span>
            </div>
            <hr>
        </div>
    </div>
</section>
@endsection