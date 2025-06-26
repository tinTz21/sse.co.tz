<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    // Front pages actions
    public function service($id){ 
        $products = Product::where('product_category_id',$id)->latest()->get();
        $product_category = ProductCategory::find($id);
        $data = [
            'products'=>$products,
            'id'=>$id,
            'product_category'=>$product_category,
        ];
        return view('components.front_pages.services')->with($data);
    }

    // Back end pages actions
    public function store_category(Request $request){
        $category = ProductCategory::updateOrCreate([
            'name'=>$request->name,
        ]);
        return back()->with('success',''.$category->name.' Category Created Successful!');
    }
    
}
