@extends('layouts.app')

@section('content')

    <h1>Lista Fumetti</h1>

    @if($comics->isEmpty())

        <p>Nessun fumetto trovato.</p>

    @else

        <ul>

            @foreach ($comics as $comic)

                <li>
                    <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <a href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>

                </li>
            @endforeach

        </ul>

    @endif
@endsection

