<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductUseAndApplication;
use App\Models\ProductHowToUse;
use App\Models\ProductPrecation;
use App\Models\ProductImage;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function store_product(Request $request){

        $request->validate([
            'file'=> 'required:file:mimes:jpg,png,svg:max:2048',
        ]);

        // Product
        $product = Product::updateOrCreate([
            'title'=>$request->title,'formula_name'=>$request->formula_name,'size'=>$request->size,'description'=>$request->dotex_description,'product_category_id'=>$request->product_category_id
        ]);

        // Product_use_and_applications
        $product_application = ProductUseAndApplication::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->application_description]);

        // product_how_to_uses
        $product_how_to_use = ProductHowToUse::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->how_to_use_description]);

        // product_precations
        $product_precaution = ProductPrecation::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->precation_description]);

        // product_image
        if(!is_null($request->file)){
            // Storage::makeDirectory('images');
            
            $filePath = $request->file->store('images','public');
            // $filePath = $request->file->store('images2','public');

            $product_image = ProductImage::updateOrCreate(
                ['product_id'=>$product->id],
                ['image_url'=>$filePath]);
        }

        return back()->with('success',''.$product->name.' Created Successfully!');
    }

    public function store_edited_product(Request $request, $id){
        $request->validate([
            'file'=> 'required:file:mimes:jpg,png,svg:max:2048',
        ]);

        // Product
        $product = Product::updateOrCreate(
            ['id'=>$id],
            ['title'=>$request->title,'formula_name'=>$request->formula_name,'size'=>$request->size,'description'=>$request->dotex_description,'product_category_id'=>$request->product_category_id]);

        // Product_use_and_applications
        $product_application = ProductUseAndApplication::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->application_description]);

        // product_how_to_uses
        $product_how_to_use = ProductHowToUse::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->how_to_use_description]);

        // product_precations
        $product_precaution = ProductPrecation::updateOrCreate(
            ['product_id'=>$product->id],
            ['description'=>$request->precation_description]);

        // product_image
        if(!is_null($request->file)){
            // Storage::makeDirectory('images');
            
            $filePath = $request->file->store('images','public');
            // $filePath = $request->file->store('images2','public');

            $product_image = ProductImage::updateOrCreate(
                ['product_id'=>$product->id],
                ['image_url'=>$filePath]);
        }

        return back()->with('success','Product Edited Successfully!');
    }

    public function delete_dotex_product(Request $request, $id){
        $delete = Product::find($id)->delete();
        ProductUseAndApplication::where('product_id',$id)->delete();
        ProductImage::where('product_id',$id)->delete();
        ProductPrecation::where('product_id',$id)->delete();
        ProductHowToUse::where('product_id',$id)->delete();
        return back()->with('success','Dotex Deleted Successfully!');
    }

    public function delete_category(Request $request, $id){
        $category = ProductCategory::find($id)->delete();
        $delete = Product::where('product_category_id',$id)->delete();
        ProductUseAndApplication::where('product_id',$id)->delete();
        ProductImage::where('product_id',$id)->delete();
        ProductPrecation::where('product_id',$id)->delete();
        ProductHowToUse::where('product_id',$id)->delete();

        return 
        back()->with('success','Dotex Deleted Successfully!');
    }
}