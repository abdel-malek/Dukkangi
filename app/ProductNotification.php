<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;
class ProductNotification extends Model
{
    
    protected $table= 'product_notification';

    protected $fillable =  ['user_id' , 'product_id' , 'status_id','updated_at'];

    public function product(){
      return $this->belongsTo(Product::class,'product_id','id');
    }
    public function user(){
      return $this->belongsTo(User::class,'user_id','id');
    }
}
