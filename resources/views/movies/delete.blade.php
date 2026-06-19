<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Movie</title>
</head>

<body>
    <h1>Delete Movie</h1>

    <p>Are you sure you want to delete:</p>
    <p><strong>{{ $movie->title }}</strong> ({{ $movie->release_year }})</p>

    <form method="POST" action="{{ route('movies.destroy', $movie->id) }}">
        @csrf
        @method('DELETE')

        <button type="submit">Yes, delete</button>
        <a href="{{ route('movies.index') }}">Cancel</a>
    </form>
</body>

</html>
