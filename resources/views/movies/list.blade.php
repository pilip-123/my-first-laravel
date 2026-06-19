@extends('Layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('movies.create') }}" class="btn btn-info mb-3">Create +</a>

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>date</th>
                    <th>desc</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($movies as $index => $movie)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->date }}</td>
                        <td>{{ $movie->desc }}</td>
                        <td>
                            <a href="{{ route('movies.show', $movie->id) }}">View</a>
                            |
                            <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
                            |
                            <button class="btn btn-link p-0" data-bs-toggle="modal"
                                data-bs-target="#deleteMovie{{ $movie->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>

                    @include('movies.delete', ['movie' => $movie])
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
