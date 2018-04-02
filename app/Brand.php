<?php

namespace App;
use App\Product;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brand";

    protected $fillable = ['english','arabic','german','kurdi','turky','image_path'];

    public function products(){
      return $this->hasMany(Product::class,'id','brand_id');
    }
}
