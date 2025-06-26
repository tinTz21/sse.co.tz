<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#create_product">
  <i class="bi bi-plus-circle"></i> Product
</button>

<!-- Modal -->
<div class="modal fade" id="create_product" tabindex="-1" aria-labelledby="create_productLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="create_productLabel">Create New Product</h1>
        <div class="col-md-8 d-flex justify-content-end">
            <h3 class="bg-danger text-light" style="padding: 0.2em; text-transform: uppercase;">
                {{ @$product_category->name .' CATEGORY'}}
            </h3>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('create_product')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <!-- products table -->
        <div class="row">
          <input type="hidden" name="product_category_id" value="{{@$product_category->id}}">
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Dotex Name</label>
              <input type="text" id="create_category" class="form-control" required name="title" placeholder="e.g. Dotex Tiles Cleaner">
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
              <input type="text" id="create_category" class="form-control" required name="formula_name" placeholder="e.g. Detox 087">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="create_category" class="form-label">Available In:</label>
              <input type="text" id="create_category" class="form-control" required name="size" placeholder="e.g. 500ml, 1Ltr and 5Ltr">
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group">
              <label for="create_category" class="form-label">Dotex Description:</label>
              <textarea class="form-control" required name="dotex_description" rows="3" placeholder="It is a ceramic and tiles cleaning product ..."></textarea>
          </div>
        </div>

        <div class="row">
          <!-- product_use_and_applications -->
          <div class="col-md-6">
            <div class="form-group">
                <label for="create_category" class="form-label">Dotex Application:</label>
                <textarea class="form-control" required name="application_description" rows="3" placeholder="Used to remove dirt deposits on ceramic surfaces"></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <!-- product_how_to_uses -->
            <div class="form-group">
                <label for="create_category" class="form-label">How To Use:</label>
                <textarea class="form-control" required name="how_to_use_description" rows="3" placeholder="Apply and spread the product on tiles surfaces. Let the product rest on the surface for 15min to 2hrs ..."></textarea>
            </div>
          </div>
        </div>

        <!-- precaution -->
        <div class="row">
          <div class="form-group">
              <label for="create_category" class="form-label">Precation:</label>
              <textarea class="form-control" required name="precation_description" rows="3" placeholder="1. Wear gloves during the cleaning process. 2."></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>