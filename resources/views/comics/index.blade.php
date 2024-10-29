@extends('layouts.app')

@section('content')
    <h1>LISTA FUMETTI</h1>
    <a href="{{ route('comics.create') }}">Crea Nuovo Fumetto</a>

    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
