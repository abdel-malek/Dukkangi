<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Coupon;


class CouponUser extends Model
{
    protected $table= "coupon_users";

    public function user()
    {
        return $this->belongsTo('App\User');
    }

   	public function coupon(){
   		return $this->belongsTo(Coupon::class, 'coupon_id' , 'id');
   	}

}
