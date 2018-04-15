<?php
namespace App\Http\Services;

use Cartalyst\Stripe\Exception\ServerErrorException;
use Cartalyst\Stripe\Exception\StripeException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Support\Facades\Auth;
use App\StripeCustomer;

class StripeService
{
    // //TEST
    const STRIPE_KEY = 'sk_test_vgJUisaoeRUWJpgXdc9mE8uV';
    // LIVE
    // const STRIPE_KEY = 'sk_live_QWB7ziOyJU50Vy9gQOQOGaO4';
    const VERSION =  '2017-08-15';

    public static function chargeCard($amount, $currency, $description, $email,$stripeToken)
    {
        $stripe = Stripe::make(self::STRIPE_KEY,self::VERSION);

        $stripeCustomer = self::getStripeCustomer($stripe,$stripeToken,$email);

        $charge = null;
//dd($stripeCustomer);
        try {
            if (!empty($stripeCustomer)) {
                $charge = $stripe->charges()->create([
                'customer' => $stripeCustomer->stripe_id,
                'currency' => $currency,
                'amount'   => $amount,
                'description' => $description,
                'capture'=> true,
                'receipt_email' =>$stripeCustomer->email
              ]);
            }
        } catch (\Exception $e) {
        }
        return $charge;
    }

    private static function getStripeCustomer($stripe,$stripeToken,$email)
    {
        $stripCustomer = StripeCustomer::where('email', '=', $email)->get()->first();

        if (empty($stripeCustomer)) {
            self::createCustomerStripe($stripe,$stripeToken,$email);
        }

        return $stripCustomer;
    }

    private static function createCustomerStripe($stripe,$stripeToken,$email)
    {
        $stripeCustomer = null;
            $customer = $stripe->customers()->create(['email' => $email/*,'source' => $stripeToken*/]);
        try {

//            dd($customer);
            //get user Id
            $userId = Auth::id();
            //create stripe customer
            if (!empty($customer)) {
                $stripeCustomer=  StripeCustomer::updateOrCreate(['email'=>$email],
              ['email' => $email,'stripe_id'=>$customer['id'],'user_id'=>$userId]);
            }
            //create card for the customer
            $card  = $stripe->cards()->create($stripeCustomer->stripe_id, $stripeToken);
        } catch (StripeException $e) {
        }
//        dd($stripeCustomer);
        return $stripeCustomer;
    }
}
