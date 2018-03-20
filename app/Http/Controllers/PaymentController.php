<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;


use App\Http\Services\PaymentService;


class PaymentController extends Controller
{

  public function __construct()
  {
    $this->middleware('isadmin');
  }

	public function index(){
		return view('admin.payments.index');
	}

	public function loadPayments(Request $request){
		$filter = $request->input('filter');
		return PaymentService::loadPaymentData($filter);
	}

	public function destroy($id){
		return PaymentService::deletePayment($id);
	}

}
