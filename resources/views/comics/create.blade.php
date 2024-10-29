<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <h1>nuovo fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST">

        @csrf

        <label for="title">titolo:</label>

        <input type="text" name="title" required>

        <label for="description">descrizione:</label>
        <textarea name="description" required></textarea>

        <label for="price">prezzo:</label>
        <input type="text" name="price" required>

        <button type="submit">salva</button>
    </form>
    <a href="{{ route('comics.index') }}">torna alla lista</a>
</body>
</html>
