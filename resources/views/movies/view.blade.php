<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Details</title>
</head>

<body>
    <h1>Movie Details</h1>

    <p><strong>Title:</strong> {{ $movie->title }}</p>
    <p><strong>Release Year:</strong> {{ $movie->release_year }}</p>

    <p>
        <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
        |
        <a href="{{ route('movies.index') }}">Back to list</a>
    </p>
</body>

</html>
