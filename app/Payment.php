<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Order;
use App\User;

class Payment extends Model
{
	protected $table ="payment";
	protected $fillable = ['payment_method_id','request','response','user_id','order_id','amount','currency','coupon','sub_amount'];
	public function user(){
		return $this->belongsTo(User::class,'id','user_id');;
	}

    public function order(){
		return $this->belongsTo(Order::class,'id','order_id');
	}

}
