<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  <i class="bi bi-plus-circle"></i> Category
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create New Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('create_category')}}" method="post">
        @csrf
      <div class="modal-body">
        <label for="create_category" class="form-label">Category Name</label>
        <input type="text" id="create_category" class="form-control" name="name" placeholder="e.g. Cleaning Products" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>