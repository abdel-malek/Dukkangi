<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponStatus extends Model
{
    protected $table="coupon_status";

    const ACTIVE = 1;
    const EXPIRED = 2;
    const CONSUMED = 3;
}
