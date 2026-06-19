<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Movie</title>
</head>

<body>
    <h1>Edit Movie</h1>

    <form method="POST" action="{{ route('movies.update', $movie->id) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title', $movie->title) }}" required />
        </div>

        <div>
            <label for="release_year">Release Year</label>
            <input id="release_year" name="release_year" type="number"
                value="{{ old('release_year', $movie->release_year) }}" />
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>

    <p><a href="{{ route('movies.index') }}">Back to list</a></p>
</body>

</html>
