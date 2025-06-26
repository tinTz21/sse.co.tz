<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['contact_us','welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(empty(ProductCategory::first()->id)){
            $products = [];
            $data = [
                'products'=>$products,
            ];
            return view('home')->with($data);
        } else {
            return $this->category(ProductCategory::first()->id);
        }
    }

    public function category($id)
    { 
        $products = Product::where('product_category_id',$id)->latest()->get();
        $product_category = ProductCategory::find($id);
        $data = [
            'products'=>$products,
            'id'=>$id,
            'product_category'=>$product_category,
        ];
        return view('home')->with($data);
    }

    public function contact_us(){
        return view('components.front_pages.contact_us');
    }

    public function welcome(){
        $products = Product::latest()->paginate(3);
            $product_category = ProductCategory::get();
            $data = [
                'products'=>$products,
                'product_category'=>$product_category,
            ];
            return view('welcome')->with($data);
    }
}
