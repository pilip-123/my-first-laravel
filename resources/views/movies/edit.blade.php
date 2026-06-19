@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('movies.update', $movie->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name="name" value="{{ $movie->name }}" type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input name="date" value="{{ $movie->date }}" type="date" class="form-control"
                            id="date">
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea name="desc" style="height: 150px" class="form-control" id="desc">{{ $movie->desc }}</textarea>
                            <label for="desc">Description</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
