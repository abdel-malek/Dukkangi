<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use App\Http\Services\StripeService;
use App\PaymentMethod;
use App\PaypalIPN;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function index(){

    }

    public function ipn()
    {
// Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
        header("HTTP/1.1 200 OK");

        $ipn = new PaypalIPN();
// Use the sandbox endpoint during testing.
        $ipn->useSandbox();
        $verified=false;
        try {
            $verified = $ipn->verifyIPN();
        } catch (\Exception $e) {
        }
        dd($verified);
        if ($verified) {
            /*
             * Process IPN
             * A list of variables is available here:
             * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
             */
            $request = json_encode($_POST);
            if (isset($_POST['payment_status'])) {
                if ($_POST['payment_status'] == "Completed") {

                    // Provider Parameters
                    $item_name = $_POST['item_name'];
                    $item_number = $_POST['item_number'];


                   $payer_email = $_POST['payer_email'];


                    // Custom Fields
                    $item_id = explode(',', $item_number);
                    $cartId = $item_id[0];
                    $userId = $item_id[1];

                    $invoice_id = $_POST['txn_id'];
                    $amount = $_POST['mc_gross'];


                    CartService::checkout($cartId,$products,PaymentMethod::PAYAPL,$userId);



                }
            }
        }

    }


}
