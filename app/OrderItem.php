<?php

namespace App;
use App\Order;
use App\Product;
use App\OrderStatus;
use App\User;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = "order_item";

    protected $fillable = ['order_id','item_id','sub_amount','qty','total_amount','gain_point','user_id','status_id','currency'];

    public function order(){
      return $this->belongsTo(Order::class,'id','order_id');
    }

    public function product(){
    	return $this->belongsTo(Product::class,'item_id','id');
    }

    public function orderStatus(){
      return $this->belongsTo(OrderStatus::class,'status_id','id');
    }

    public function user(){
      return $this->belongsTo(User::class,'user_id','id');
    }
}
