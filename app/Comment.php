<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
//use App\Subcategory;
use App\Rate;
Use App\User;
use App\Product;
class Comment extends Model
{
	protected $table = "comment";
	protected $fillable = ['user_id','rate','description', 'product_id'];
	public function user(){
		return $this->belongsTo(User::class,'user_id','id');
	}
	public function product(){
		return $this->belongsTo(Product::class,'product_id','id');
		
	}

}
