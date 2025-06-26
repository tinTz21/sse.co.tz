<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Models\Product;
use App\Models\ProductCategory;

Auth::routes();

// Auth Middleware
Route::group( ['middleware'=>['auth']], function(){
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	Route::get('/home/category/{id}', [App\Http\Controllers\HomeController::class, 'category'])->name('products');
	Route::get('image/{image_id}',[App\Http\Controllers\ProductController::class, 'display_image'])->name('images2.displayImage');
	Route::post('/home/create/category', [App\Http\Controllers\ProductCategoryController::class, 'store_category'])->name('create_category');
	Route::post('/home/create/product', [App\Http\Controllers\ProductController::class, 'store_product'])->name('create_product');
	Route::post('/home/edit/product/{id}', [App\Http\Controllers\ProductController::class, 'store_edited_product'])->name('edit_product');
	Route::post('/home/product/product/{id}', [App\Http\Controllers\ProductController::class, 'delete_dotex_product'])->name('delete_dotex_product');
	Route::post('/home/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete_category'])->name('delete_category');
});

// Guest Middleware
Route::group( ['middleware'=>['guest']], function(){
	Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
	Route::get('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
	Route::get('/service/{product_category_id}', [App\Http\Controllers\ProductCategoryController::class, 'service'])->name('service');
});

