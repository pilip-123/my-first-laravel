@extends('Layouts.app')
@section('content')
        <div class="container">
        <a href="{{route('student.create')}}" class=" btn btn-info"> create+</a>
        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $index => $student)

            <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="" data-bs-toggle="modal"  data-bs-target="#showStudent{{$student->id}}">
                            View
                        </a>
                        |
                        <a href="{{ route('student.edit', $student->id) }}">
                                
                                Edit
                        </a>
                        |
                        <a href="" data-bs-toggle="modal"  data-bs-target="#deleteStudent{{$student->id}}">
                            Delete
                        </a>
                        @include('student.view')
                        @include('student.delete')
                    </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

 
