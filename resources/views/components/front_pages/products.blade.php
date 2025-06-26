<div class="col-md-12">
	<hr> 
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<img src="{{ URL::asset(@$product->product_image->image_url) }}" style="max-height: 12em; min-height: 12em; max-width: 16em; min-width: 16em;">
					{{-- Storage::get('file.jpg') --}}
				</div>
				<div class="col-md-12">
					<div class="row">
						<h4 style="text-transform: uppercase;">
							{{@$product->formula_name}}:
						</h4>
					</div>
					<div class="row">
						<p>
							Available In: {{@$product->size}}
						</p>
					</div>
					<div class="row">
						
						<div class="col-md-6">
							<p>
								{{@$product->created_at->format('D, d M Y')}}
							</p>
						</div>
						<div class="col-md-6">
				            <!-- Button trigger modal -->
							<button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
							  Contact Us.
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h1 class="modal-title fs-5" id="exampleModalLabel">Our Contact Details.</h1>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        <p>
							        	Plot No. 158, Block 14 Bunju B,<br>
							        	Along Bagamoyo Road,<br>
							        	P.O Box 61175-Dar es Salaam-Tanzania.<br>
							        	Email: soundstageengineering@yahoo.com<br>
							        	Mob: +255 712 586 984/+255 766 156 714.
							        </p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							      </div>
							    </div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="mb-3">
				<h3 for="exampleFormControlTextarea1" class="form-label" style="text-transform: uppercase;">
					{{@$product->title}}
				</h3>
				<p>
					{{@$product->description}}
				</p>
			</div>

			<div class="mb-3">
				<h3 for="exampleFormControlTextarea1" class="form-label">
					{{-- $product->product_application->title --}}
					Dotex Application
				</h3>
				<p>
					{{@$product->product_application->description}}
				</p>
			</div>

			<div class="mb-3">
				<h3 for="exampleFormControlTextarea1" class="form-label">
					{{-- @$product->product_how_to_use->title --}}
					How To Use
				</h3>
				<p>
					{{@$product->product_how_to_use->description}}
				</p>
			</div>

			<div class="mb-3">
				<h3 for="exampleFormControlTextarea1" class="form-label">
					{{-- @$product->product_precation->title --}}
					Precation
				</h3>
				<p>
					{{@$product->product_precation->description}}
				</p>
			</div>

		</div>
	</div>
</div>