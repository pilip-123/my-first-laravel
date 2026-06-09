@extends('Layouts.app')
@section('content')
<div class="container">
    <a href="{{route('products.create')}}" class=" btn btn-info"> create+</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>desc</th>
                <th>price</th>
                <th>qty</th>
                <th>category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)

            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->desc }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->category?->name }}</td>
                <td>
                    <a href="" data-bs-toggle="modal" data-bs-target="#showProducts{{$product->id}}">
                        View
                    </a>
                    |
                    <a href="{{ route('products.edit', $product->id) }}">
                        Edit
                    </a>
                    |
                    <a href="" data-bs-toggle="modal" data-bs-target="#deleteProducts{{$product->id}}">
                        Delete
                    </a>
                    @include('products.show')
                    @include('products.delete')
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
