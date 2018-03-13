<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;
use App\Payment;
class Order extends Model
{
	protected $table = "order";
	public function user(){
		return $this->belongsTo(User::class,'id','user_id');
	}
	public function products(){
		return $this->hasMany(Product::class,'id','product_id');
	}
    public function payment(){
    	return $this->has(Payment::class,'id','payment_id');
    }
}
