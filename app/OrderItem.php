<?php

namespace App;
use App\Order;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = "order_item";

    protected $fillable = ['order_id','item_id','sub_amount','qty','total_amount','gain_point','user_id','status_id','currency'];

    public function order(){
      return $this->belongsTo(Order::class,'id','order_id');
    }
}
