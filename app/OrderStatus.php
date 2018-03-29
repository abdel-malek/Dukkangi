<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    protected $table = 'order_status';

    const CREATED = 1;
    const INPROGRESS = 2;
    const COMPLETED = 3;

}
