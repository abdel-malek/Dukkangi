<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CouponUser;
class Coupon extends Model
{
    protected $table = 'coupon';

    //
     public function user()
    {
    	return $this->hasMany(CouponUser::class,'id','user_id');
    }
}
