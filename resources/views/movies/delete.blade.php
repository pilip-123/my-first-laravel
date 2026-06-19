  <div class="modal fade" id="deleteMovie{{ $movie->id }}" tabindex="-1" aria-labelledby="deleteMovieLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="deleteMovieLabel">Delete Movie</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Are you sure to delete this movie?
                  </div>
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
