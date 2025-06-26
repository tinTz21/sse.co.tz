<div class="col-md-12 d-flex justify-content-center">
	@foreach(\App\Models\ProductCategory::all() as $category)
			<a class="{{@$category->id == @$id ? 'btn btn-outline-primary' : ''}}" href="{{ route('service',$category->id) }}" style="text-transform: uppercase; text-decoration: none;">
				&nbsp;{{' '.$category->name.'.  '}}
			</a>
	@endforeach
</div>