<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Subcategory;

class Product extends Model
{
    protected $table = "product";
    protected $fillable = ['english','arabic','german','kurdi','turky','desc_arabic','desc_english','desc_german',
    'desc_kurdi','desc_turky','option1','option2','option3','option4','qty','category_id','subcategory_id',
    'image_id','price','point','rate','section1_english','section1_arabic','section1_turky','section1_kurdi',
    'section1_german','section2_english','section2_arabic','section2_turky','section2_kurdi','section2_german',
    'section3_english','section3_arabic','section3_turky','section3_kurdi','section3_german','active'];
		
    public function category()
    {
        return $this->belongsTo(Category::class, 'id', 'category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'id', 'subcategory_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'id', 'product_id');
    }
}
