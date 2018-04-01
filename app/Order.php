<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Payment;
use App\OrderItem;
use App\OrderStatus;

class Order extends Model
{
    protected $table = "order";
    protected $fillable = ['id','payment_id','user_id','status_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id', 'id');
    }

    public function orderItem(){
      return $this->hasMany(OrderItem::class,'order_id','id');
    }

    public function orderStatus(){
      return $this->belongsTo(OrderStatus::class,'status_id','id');
    }
}
