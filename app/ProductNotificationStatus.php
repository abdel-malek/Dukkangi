<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductNotificationStatus extends Model
{
	protected $table = 'product_notification_status';

	const CREATED  = 1;
	const NOTIFIED = 2;

}
