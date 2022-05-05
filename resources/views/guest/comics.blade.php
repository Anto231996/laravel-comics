@extends('layouts.app')

@section("title", 'Comics')

@section('main-content')
<div class="current-series-content">
    <h1 class="bg-blue">current series</h1>
    <div id="current-series-items" class="wrapper">
        @foreach ($comics as $index => $comicsItem)
        <div class="item">
            <a href="{{ url("comics/$index") }}">
                <img src="{{ $comicsItem['thumb'] }}" alt="{{ $comicsItem['series'] }}">
            </a>
            <h5>{{ $comicsItem['series'] }}</h5>
        </div>
        @endforeach
    </div>
</div>
@endsection