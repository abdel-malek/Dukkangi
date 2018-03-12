<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Product;
class Subcategory extends Model
{
	protected $table = "subcategory";
    public function category()
    {
    	return $this->belongsTo(Category::class,'id','category_id');
    }
    public function products()
    {
    	return $this->hasMany(Product::class,'id','product_id');
    }
}
