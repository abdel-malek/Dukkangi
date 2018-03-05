<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Subcategory;

class Category extends Model
{
 	public function subcategories(){
 		return $this->hasMany(Subcategory::class,'id','subcategory_id');
 	}
}
