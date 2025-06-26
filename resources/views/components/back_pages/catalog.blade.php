<div class="col-md-12 d-flex justify-content-center">
	@foreach(\App\Models\ProductCategory::all() as $category)
			<a class="{{@$category->id == @$id ? 'btn btn-outline-primary' : ''}}" href="{{ route('products',$category->id) }}" style="text-transform: uppercase; text-decoration: none;">
				&nbsp;{{' '.$category->name.'.  '}}
			</a>
			@include('components.back_pages.modals.delete_category')
	@endforeach
</div>