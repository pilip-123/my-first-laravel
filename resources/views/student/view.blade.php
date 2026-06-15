
     <div class="modal fade" id="showStudent{{$student->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Student Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <div class="row">
                    <div class="col-md-12">
                        <p>{{ $student->name }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>{{ $student->email }}</p>
                    </div>
                    <div class="col-md-12">
                        <p>{{ $student->phone }}</p>
                    </div>
                </div>
                </div>
             </div>
        </div>
    </div>

   

                
                               