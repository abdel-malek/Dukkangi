<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;


use App\Http\Services\OrderService;


class OrderController extends Controller
{
	public function index(){
		return view('admin/orders.index');
	}

	public function loadOrder(Request $request){
		$filter = $request->input('filter');
		return OrderService::loadOrderData($filter);
	}

	public function destroy($id){
		return OrderService::deleteOrder($id);
	} 

}
