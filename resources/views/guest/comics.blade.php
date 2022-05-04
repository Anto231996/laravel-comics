@extends('layouts.app')

@section('main-content')
<div class="current-series-content">
    <span>current series</span>
    <div id="current-series-items" class="wrapper">
        @foreach ($comics as $comicsItem)
        <div class="item">
            <img src="{{ $comicsItem['thumb'] }}" alt="">
            <h4>{{ $comicsItem['series'] }}</h4>
        </div>
        @endforeach
    </div>
</div>
@endsection