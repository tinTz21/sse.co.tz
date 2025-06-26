@extends('layouts.app')
@section('content')
@include('components.css.front_end.general_style')
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h3 class="d-flex justify-content-center">
                    PRODUCT CATALOG.
                </h3>
            </div>
            @include('components.front_pages.catalog')
        </div>
    </div>
    <div class="col-md-12" style="padding-top: 2em;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h3 class="bg-danger text-light" style="padding: 0.2em; text-transform: uppercase;">
                        {{@$product_category->name}}
                    </h3>
                </div>
            </div>
            @foreach($products as $product)
                @include('components.front_pages.products')
            @endforeach
            </div>
        <hr>
    </div>
    @include('components.front_pages.catalog')
</div>
@endsection