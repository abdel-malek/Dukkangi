<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use App\Http\Services\StripeService;
use App\PaymentMethod;
use App\PaypalIPN;
use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function index()
    {
    }

    public function ipn()
    {
        // Reply with an empty 200 response to indicate to paypal the IPN was received correctly.
        header("HTTP/1.1 200 OK");
        $data = $raw_post_data = file_get_contents('php://input');
        $raw_post_array = explode('&', $data);
        $myPost = array();
        foreach ($raw_post_array as $keyval) {
            $keyval = explode('=', $keyval);
            if (count($keyval) == 2) {
                $myPost[$keyval[0]] = urldecode($keyval[1]);
            }
        }

        $ipn = new PaypalIPN();
        // Use the sandbox endpoint during testing.
        $ipn->useSandbox();
        $verified=false;
        try {
            $verified = $ipn->verifyIPN($raw_post_array);
        } catch (\Exception $e) {
        }

        if ($verified) {
            /*
             * Process IPN
             * A list of variables is available here:
             * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
             */

            if (isset($myPost['payment_status'])) {
                if ($myPost['payment_status'] == "Completed") {
                    // Provider Parameters
                    $item_name = $myPost['item_name'];
                    //cart id

                    $items = $myPost['item_number'];
                    $item_id = explode(',', $items);
                    $payer_email = $myPost['payer_email'];
                    // Custom Fields
                    $cartId = $item_id[0];
                    $userId = $item_id[1];

                    $invoice_id = $myPost['txn_id'];
                    $amount = $myPost['mc_gross'];

                    //load the product for specfic cartId
                    $products = CartService::loadProductCart($cartId);
                    echo ($products);
                    die();
                    CartService::checkout($cartId, $products, PaymentMethod::PAYAPL, $userId);
                }
            }
        }
    }
}
