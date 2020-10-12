@extends('plantilla')

@section('content')
@include('quotes.quote', [$quote])
@endsection

@section('random')
<div id="random">
    <img src="{{ asset('frontend/images/random-white.svg') }}" alt="">
    <p>Random</p>
</div>
@endsection