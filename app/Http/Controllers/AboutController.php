<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;


use App\Http\Services\OrderService;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('isadmin');
    }

    public function index()
    {
        return view('admin.about.index');
    }

    public function loadOrder(Request $request)
    {
        $filter = $request->input('filter');
        return OrderService::loadOrderData($filter);
    }

    public function destroy($id)
    {
        return OrderService::deleteOrder($id);
    }

    public function orderItemPage(){
      return view('admin.orders.orderItems');
    }

    public function loadOrderItems(Request $request,$id){
      $filter = $request->input('filter');
      return OrderService::loadOrderItemData($filter,$id);
    }
    public function checkProductQtyPage(Request $request,$id){
      $orderId = $id;

      return view('admin.orders.checkProductQty',compact('orderId'));
    }

    public function checkProductQty(Request $request,$id){
      $filter = $request->input('filter');
      return OrderService::loadOrderItemData($filter,$id);
    }

    public function checkOrderBarcode($id,$barcode){
       return OrderService::checkOrderBarcode($id,$barcode);
    }
    public function getDHLPage(){
      return view('admin.dhl.index');
    }
    public function loadPackedOrders(Request $request){
      $filter = $request->input('filter');
      return OrderService::loadPackedOrders($filter);
    }
    public function onDeleviryOrder(Request $request){
      $orderId = $request->id ;
      // dd($request);
      $code = $request->code; 
      OrderService::changeDHLState($orderId, $code);
      return redirect(route('dhl.index'));
    }
    public function getUserOrders($id){
      return view('admin.orders.userOrders');
    }
    public function loadUserOrders($id,Request $request){
        $filter = $request->filter;
        return OrderService::loadUserOrders($id,$filter);
    }
}
