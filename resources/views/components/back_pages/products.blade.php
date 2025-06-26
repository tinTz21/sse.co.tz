<div class="col-md-12">
	<hr>
	<div class="row">
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<img src="{{ URL::asset(@$product->product_image->image_url) }}" style="max-height: 12em; min-height: 12em; max-width: 16em; min-width: 16em;">
				</div>
				<div class="col-md-12">
					<br><br>
					<div class="row">
						<h4 style="text-transform: uppercase;">
							{{$product->formula_name}}:
						</h4>
					</div>
					<div class="row">
						<p>
							Available In: {{$product->size}}
						</p>
					</div>
					<div class="row">
						<div class="col-md-6">
							<p>
								{{$product->created_at->format('D, d M Y')}}
							</p>
						</div>
						<div class="col-md-6">
				            @include('components.back_pages.modals.contact_us')
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="mb-3">
				<div class="row">
					<div class="col-md-6">
						<h3 for="exampleFormControlTextarea1" class="form-label" style="text-transform: uppercase;">
							{{$product->title}}
						</h3>
					</div>
					<div class="col-md-6">
						<div class="col-md-6 d-flex justify-content-end">
				           @include('components.back_pages.modals.edit_product')
				           &nbsp;
				           @include('components.back_pages.modals.delete')
						</div>
					</div>
				</div>
				<p>
					{{$product->description}}
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