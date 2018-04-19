<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Coupon extends Model
{
    protected $table = 'coupon';

    //
     public function user()
    {
    	return $this->belongsTo(User::class,'id','user_id');
    }
}
