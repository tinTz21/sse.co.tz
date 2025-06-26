<!-- Button trigger modal -->
<i  class="bi bi-trash text-danger" data-bs-toggle="modal" data-bs-target="#{{'delete'.$product->id}}" style="cursor: pointer;"></i>

<!-- Modal -->
<div class="modal fade" id="{{'delete'.$product->id}}" tabindex="-1" aria-labelledby="{{'delete'.$product->id}}Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="{{'delete'.$product->id}}Label">Our Contact Details.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('delete_dotex_product',$product->id)}}" method="post">
      	@csrf
      <div class="modal-body">
        <p class="text-danger">
        	Do you want to delete {{$product->title.'?'}}
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Yes</button>
      </div>
      </form>
    </div>
  </div>
</div>