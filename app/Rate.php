<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
use App\Product;
Use App\User;
class Rate extends Model
{
	protected $table = "rate";
	protected $fillable = ['user_id','product_id','subcategory_id','rate','type'];
	public function user(){
		return $this->belongsTo(User::class,'user_id','id');
	}
	public function subcategory(){
		return $this->belongsTo(Subcategory::class,'subcategory_id','id');
	}
	public function product(){
		return $this->belongsTo(Product::class,'product_id','id');
	}

}
