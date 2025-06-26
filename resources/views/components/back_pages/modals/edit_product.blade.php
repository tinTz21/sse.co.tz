<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#{{@$product->id}}">
  <i class="bi bi-pencil-square"></i> Product
</button>

<!-- Modal -->
<div class="modal fade" id="{{@$product->id}}" tabindex="-1" aria-labelledby="{{@$product->id}}Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="{{@$product->id}}Label">Edit Product</h1>
        <div class="col-md-8 d-flex justify-content-end">
            <h3 class="bg-danger text-light" style="padding: 0.2em; text-transform: uppercase;">
                {{ $product_category->name .' CATEGORY'}}
            </h3>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('edit_product',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- products table -->
        <div class="row">
          <input type="hidden" name="product_category_id" required value="{{@$product_category->id}}">
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Dotex Name</label>
              <input type="text" id="create_category" class="form-control" required value="{{@$product->title}}" required name="title" placeholder="e.g. Dotex Tiles Cleaner">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Dotex Picture:</label>
              <input class="form-control" required name="file" type="file" id="formFile">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Formula Name</label>
              <input type="text" id="create_category" class="form-control" required name="formula_name" placeholder="e.g. Detox 087" required value="{{@$product->formula_name}}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Available In:</label>
              <input type="text" id="create_category" class="form-control" required name="size" placeholder="e.g. 500ml, 1Ltr and 5Ltr" required value="{{@$product->size}}">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group">
              <label for="create_category" class="form-label">Dotex Description:</label>
              <textarea class="form-control" required name="dotex_description" rows="3" placeholder="It is a ceramic and tiles cleaning product ...">{{@$product->description}}</textarea>
          </div>
        </div>

        <div class="row">
          <!-- product_use_and_applications -->
          <div class="col-md-6">
            <div class="form-group">
                <label for="create_category" class="form-label">Dotex Application:</label>
                <textarea class="form-control" required name="application_description" rows="3" placeholder="Used to remove dirt deposits on ceramic surfaces">{{@$product->product_application->description}}</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <!-- product_how_to_uses -->
            <div class="form-group">
                <label for="create_category" class="form-label">How To Use:</label>
                <textarea class="form-control" required name="how_to_use_description" rows="3" placeholder="Apply and spread the product on tiles surfaces. Let the product rest on the surface for 15min to 2hrs ...">{{@$product->product_how_to_use->description}}</textarea>
            </div>
          </div>
        </div>

        <!-- precaution -->
        <div class="row">
          <div class="form-group">
              <label for="create_category" class="form-label">Precation:</label>
              <textarea class="form-control" required name="precation_description" rows="3" placeholder="1. Wear gloves during the cleaning process. 2.">{{@$product->product_precation->description}}</textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>