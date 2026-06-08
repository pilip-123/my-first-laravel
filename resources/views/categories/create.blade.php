
    @extends('Layouts.app')
    @section('content')
          <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name ="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input name="price" type="number" step="0.01" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Descrition</label>
                        <div class="form-floating">
                            <textarea name="desc" style="height: 150px"class="form-control" id="desc"></textarea>
                            <label for="desc">Descrition</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    @endsection
  
