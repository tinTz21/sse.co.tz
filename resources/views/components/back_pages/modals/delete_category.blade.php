<!-- Button trigger modal -->
<i class="bi bi-trash text-danger" data-bs-toggle="modal" data-bs-target="#{{'delete_category'.$category->id}}" style="cursor: pointer;"></i>

<!-- Modal -->
<div class="modal fade" id="{{'delete_category'.$category->id}}" tabindex="-1" aria-labelledby="{{'delete_category'.$category->id}}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="{{'delete_category'.$category->id}}Label">{{$category->name.' Category'}}<i class="bi bi-trash text-warning"></i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('delete_category',$category->id)}}" method="post">
        @csrf
      <div class="modal-body">
        <p class="text-danger">
        	Do you want to delete {{$category->name.' category?'}}<br>
        </p>
        <label style="font-size: 12px;">If you delete category, all products registered under that category, will be deleted?</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Yes</button>
      </div>
      </form>
    </div>
  </div>
</div>