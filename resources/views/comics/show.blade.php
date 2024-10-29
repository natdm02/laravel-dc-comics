@extends('layouts.app')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p> {{ $comic->description }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <p>price: {{ $comic->price }}</p>
    <p>series: {{ $comic->series }}</p>
    <p>sale Date: {{ $comic->sale_date }}</p>
    <p>type: {{ $comic->type }}</p>

    <a href="{{ route('comics.index') }}">Torna alla lista</a>

@endsection

