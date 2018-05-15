<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DHLStatus extends Model
{
    protected $table ='dhl_status' ;
    
    const ONDELIVERY = 1;
    const SOON = 2;

}
