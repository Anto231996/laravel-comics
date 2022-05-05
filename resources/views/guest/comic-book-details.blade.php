@extends('layouts.app')

@section("title", 'Dettagli comic-book')

@section('main-content')
<section id="comic-book-details">
    <div id="content-product">
        <h1>{{ $comicBook['title'] }}</h1>
        <div class="label-price">
            <p>U.S Price {{ $comicBook['price'] }}</p> 
        </div>
        <p>{{ $comicBook['description'] }}</p>
    </div>

    <div id="advertisement">
        <img src="{{asset("images/adv.jpg")}}" alt="adv img">
    </div>
</section>
@endsection