<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Movie</title>
</head>

<body>
    <h1>Create Movie</h1>

    <form method="POST" action="{{ route('movies.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" type="text" value="{{ old('title') }}" required />
        </div>

        <div>
            <label for="release_year">Release Year</label>
            <input id="release_year" name="release_year" type="number" value="{{ old('release_year') }}" />
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>

    <p><a href="{{ route('movies.index') }}">Back to list</a></p>
</body>

</html>
