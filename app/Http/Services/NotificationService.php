<?php

namespace App\Http\Services;

use App\Product;
use App\Category;
use App\Subcategory;
use App\ProductQty;
use App\OrderItem;
use Illuminate\Support\Facades\DB;
use Session;
use App\ProductNotification;
use App\ProductNotificationStatus;
use App\User;
use App\Http\Services\MailService;

class NotificationService
{
	public static function notifyUser(){
		$notifications = ProductNotification::select('user_id', 'product_id', 'status_id')->where('id_status' , '=' , ProductNotificationStatus::CREATED)->get();
		if(isset($notifications)){
			foreach ($notifications as $notify) {
				$product = Product::find($notify->product_id);
				if (ProductService::checkProductQty($product->id , 1)){
					$user = User::find($notify->user_id);
					MailService::send('emails.notify' ,['product'=> $product , 'qty' => ProductService::getProductQty($product->id)], 'Notification@dukkangi.com' , $user->email, 'product available');
					$notify->staus_id = ProductNotificationStatus::NOTIFIED;
				}
			}
		}
	}

}