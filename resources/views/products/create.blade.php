@extends('Layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <div class="form-floating">
                        <textarea name="desc" style="height: 150px" class="form-control" id="desc">{{ old('desc') }}</textarea>
                        <label for="desc">Description</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input name="price" value="{{ old('price') }}" type="number" step="0.01" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Qty:</label>
                    <input name="qty" value="{{ old('qty') }}" type="number" class="form-control" id="qty">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option value="">Choose category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
