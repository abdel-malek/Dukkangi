<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
 	protected $table= "review";
 	protected $fillable = ['id' ,'rate', 'desc'];
}
