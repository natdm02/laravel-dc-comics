@extends('layouts.app')

@section('content')
    <h1>modifica fumetto: {{ $comic->title }}</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div>
            <label for="title">titolo:</label>
            <input type="text" name="title" value="{{ $comic->title }}" required>
        </div>
        <div>
            <label for="description">descrizione:</label>
            <textarea name="description" required>{{ $comic->description }}</textarea>
        </div>
        <div>
            <label for="thumb">URL:</label>
            <input type="text" name="thumb" value="{{ $comic->thumb }}" required>
        </div>
        <div>
            <label for="price">prezzo:</label>
            <input type="text" name="price" value="{{ $comic->price }}" required>
        </div>
        <div>
            <label for="series">serie:</label>
            <input type="text" name="series" value="{{ $comic->series }}" required>
        </div>
        <div>
            <label for="sale_date">data di vendita:</label>
            <input type="date" name="sale_date" value="{{ $comic->sale_date }}" required>
        </div>
        <div>
            <label for="type">tipo:</label>
            <input type="text" name="type" value="{{ $comic->type }}" required>
        </div>
        <button type="submit">aggiorna fumetto</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla lista</a>
@endsection
