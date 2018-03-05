<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Subcategory;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class,'id','category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'id','subcategory_id');
    }
}
