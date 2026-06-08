@extends('Layouts.app')
@section('content')
        <div class="container">
        <a href="{{route('categories.create')}}" class=" btn btn-info"> create+</a>
        <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>desc</th>
                <th>price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $index => $category)

            <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->desc }}</td>
                    <td>{{ $category->price }}</td>
                    <td>
                        <a href="" data-bs-toggle="modal"  data-bs-target="#showCategories{{$category->id}}">
                            View
                        </a>
                        |
                        <a href="{{ route('categories.edit', $category->id) }}">
                                {{-- <i class="fa-solid fa-pen-to-square text-info"></i> --}}
                                Edit
                        </a>
                        |
                        <a href="" data-bs-toggle="modal"  data-bs-target="#deleteCategory{{$category->id}}">
                            Delete
                        </a>
                        @include('categories.view')
                        @include('categories.delete')
                    </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    </div>
@endsection

 
