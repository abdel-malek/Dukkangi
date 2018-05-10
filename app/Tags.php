<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
	protected $table = 'tags';
	protected $fillable = ['category_id' , 'subcategory_id', 'product_id', 'creatd_at' , 'updated_at'];
	public function product()
    {
        return $this->belongsTo('App\Product');
    }
	public function category()
    {
        return $this->belongsTo('App\Category');
    }
	public function subcategory()
    {
        return $this->belongsTo('App\Subcategory');
    }

}
