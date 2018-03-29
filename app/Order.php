<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;
use App\Payment;
use App\OrderItem;

class Order extends Model
{
    protected $table = "order";
    protected $fillable = ['id','payment_id','user_id','status_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
    public function payment()
    {
        return $this->has(Payment::class, 'id', 'payment_id');
    }

    public function orderItem(){
      return $this->hasMany(OrderItem::class,'id','order_id');
    }
}
