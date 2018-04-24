<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Coupon;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    protected $guard = "user";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_category_id','token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function coupon(){
        return $this->hasMany(Coupon::class,'id','user_id');
    }

    public function orderItem(){
      return $this->hasMany(OrderItem::class,'user_id','id');
    }
}
