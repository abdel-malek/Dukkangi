<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StripeCustomer extends Model
{
    protected $table = 'stripe_customer';
    protected $fillable = ['email','stripe_id','user_id'];
}
