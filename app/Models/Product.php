<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','formula_name','size','description','product_category_id'];

    public function product_image(){
        return $this->hasOne('App\Models\ProductImage', 'product_id');
    }

    public function product_application() {
        return $this->hasOne('App\Models\ProductUseAndApplication', 'product_id');
    }

    public function product_precation() {
        return $this->hasOne('App\Models\ProductPrecation', 'product_id');
    }

    public function product_how_to_use() {
        return $this->hasOne('App\Models\ProductHowToUse', 'product_id');
    }

    public function product_category() {
        return $this->belongsTo('App\Models\ProductCategory', 'product_category_id');
    }
    
}
