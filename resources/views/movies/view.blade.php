@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Movie Details</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $movie->name }}</p>
                        <p><strong>Date:</strong> {{ $movie->date }}</p>
                        <p><strong>Description:</strong> {{ $movie->desc }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('movies.index') }}" class="btn btn-secondary btn-sm">Back</a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
