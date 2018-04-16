<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CouponType extends Model
{
    protected $table = 'coupon_type';

    const FIXED = 'fixed';
    const PERCENTAGE = 'percentage';

}
