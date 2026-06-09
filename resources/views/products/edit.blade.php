@extends('Layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input name="name" value="{{ $product->name }}" type="text" class="form-control"
                        id="name">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <div class="form-floating">
                        <textarea name="desc" style="height: 150px" class="form-control" id="desc">{{ $product->desc }}</textarea>
                        <label for="desc">Description</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input name="price" value="{{ $product->price }}" type="number" step="0.01" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Qty:</label>
                    <input name="qty" value="{{ $product->qty }}" type="number" class="form-control" id="qty">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected($product->category_id == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
