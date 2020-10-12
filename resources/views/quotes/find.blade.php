@extends('plantilla')

@section('title', ' | ' . $type)

@section('content')
    @forelse($quotes as $quote)
        @include('quotes.quote', [$quote])
    @empty
        <p>There are not quotes.</p>
    @endforelse
@endsection