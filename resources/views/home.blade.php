@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                            @include('flash-message')
                <div class="card-body">
                    <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center" style="padding-bottom: 1em">
                            <h3 class="">
                                PRODUCT CATALOG.
                            </h3>
                            <sse style="float: right;">
                                @include('components.back_pages.modals.create_category')
                            </sse>
                        </div>
                                @include('components.back_pages.catalog')
                    </div>
                </div>

                <div class="col-md-12" style="padding-top: 2em;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="bg-danger text-light" style="padding: 0.2em; text-transform: uppercase;">
                                        {{ @$product_category->name }}
                                    </h3>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    @include('components.back_pages.modals.create_product')
                                </div>
                            </div>
                        </div>
                        @foreach($products as $product)
                            @include('components.back_pages.products')
                        @endforeach
                        </div>
                    <hr>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
