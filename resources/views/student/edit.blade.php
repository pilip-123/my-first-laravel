@extends('Layouts.app')
@section('content')
     <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name ="name" value = "{{ $student->name }}" type="text" class="form-control"
                            id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" value="{{ $student->email }}" type="text" step="0.01" class="form-control"
                            id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <div class="form-floating">
                            <textarea name="phone" style="height: 150px"class="form-control" id="phone">{{ $student->phone }}</textarea>
                            <label for="phone">Phone Number</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
   
