@extends('layouts.app')

@section('content')
    <h1>aggiungi un nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">titolo:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="description">descrizione:</label>
            <textarea name="description" required></textarea>
        </div>
        <div>
            <label for="thumb">URL:</label>
            <input type="text" name="thumb" required>
        </div>
        <div>
            <label for="price">prezzo:</label>
            <input type="text" name="price" required>
        </div>
        <div>
            <label for="series">serie:</label>
            <input type="text" name="series" required>
        </div>
        <div>
            <label for="sale_date">data di vendita:</label>
            <input type="date" name="sale_date" required>
        </div>
        <div>
            <label for="type">tipo:</label>
            <input type="text" name="type" required>
        </div>
        <button type="submit">aggiungi fumetto</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna alla lista</a>
@endsection

