<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductQty extends Model
{
    protected $table = 'product_qty';
    protected $fillable = ['product_id','qty'];

    public function product(){
      return $this->belongsTo(Product::class,'product_id','id');
    }
}
