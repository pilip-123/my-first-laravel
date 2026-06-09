<div class="modal fade" id="showCategories{{$category->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Categories Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <p> Name : {{ $category->name }}</p>
                    </div>
                    <div class="col-md-12">
                        <p> Description : {{ $category->desc }}</p>
                    </div>
                    <div class="col-md-12">
                        <p> Price : {{ $category->price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>