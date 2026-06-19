@extends('Layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('movies.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input name="date" type="date" class="form-control" id="date"
                            value="{{ old('date') }}">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea name="desc" style="height: 150px" class="form-control" id="desc">{{ old('desc') }}</textarea>
                            <label for="desc">Description</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
