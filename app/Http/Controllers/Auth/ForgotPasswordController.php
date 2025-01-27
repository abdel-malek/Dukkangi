<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use Illuminate\Support\Facades\Password;
use App\Http\Services\MailService;
use Auth;
use App\User;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        // $response = $this->broker(););
        $user = User::where('email' , 'like' , $request->input('email'))->get()->first();
        $user->token  = bin2hex(random_bytes(20));
        $user->save();
        // dd("i'm here");
        MailService::send('emails.reset_password',['token' => $user->token], 'signin@dukkangi.com' , $request->input('email') ,'reset password link');

        return redirect(route('home'));
        // return $response == Password::RESET_LINK_SENT
        //             ? $this->sendResetLinkResponse($response)
        //             : $this->sendResetLinkFailedResponse($request, $response);
    }
}
