<!DOCTYPE html>
<html>
<head>
    <title>{{ $comic->title }}</title>
</head>
<body>
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->description }}</p>
    <p>prezzo: {{ $comic->price }}</p>
    <a href="{{ route('comics.index') }}">Torna alla lista</a>
</body>
</html>
